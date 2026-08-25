<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use App\Models\ContentType;
use App\Models\Blog;
use App\Models\Page;
use App\Models\HomeSlider;
use App\Models\Gallery;

/**
 * CmsApiController
 *
 * Authenticated write-side (POST / PUT / PATCH / soft-DELETE) endpoints for the CMS.
 * All routes must sit behind the `cms.auth` middleware (see routes/api.php).
 *
 * Soft-delete convention: DELETE sets `status = 0` — it does NOT remove the row.
 * Image uploads follow the existing CMS convention: stored in /public/normal_images/.
 *
 * ────────────────────────────────────────────────────────────────────
 *  ContentType
 *    POST   /api/cms/content-type          → CmsStoreContentType
 *    PUT    /api/cms/content-type/{id}     → CmsUpdateContentType
 *    DELETE /api/cms/content-type/{id}     → CmsDeleteContentType   (soft)
 *
 *  Blog
 *    POST   /api/cms/blog                  → CmsStoreBlog
 *    PUT    /api/cms/blog/{id}             → CmsUpdateBlog
 *    DELETE /api/cms/blog/{id}             → CmsDeleteBlog          (soft)
 *
 *  Page
 *    POST   /api/cms/page                  → CmsStorePage
 *    PUT    /api/cms/page/{id}             → CmsUpdatePage
 *    DELETE /api/cms/page/{id}             → CmsDeletePage          (soft)
 *
 *  HomeSlider
 *    POST   /api/cms/home-slider           → CmsStoreHomeSlider
 *    PUT    /api/cms/home-slider/{id}      → CmsUpdateHomeSlider
 *    DELETE /api/cms/home-slider/{id}      → CmsDeleteHomeSlider    (soft)
 *
 *  Gallery
 *    POST   /api/cms/gallery               → CmsStoreGallery
 *    PUT    /api/cms/gallery/{id}          → CmsUpdateGallery
 *    DELETE /api/cms/gallery/{id}          → CmsDeleteGallery       (soft)
 * ────────────────────────────────────────────────────────────────────
 */
class CmsApiController extends Controller
{
    // ─────────────────────────────────────────────────────────────────
    // Helpers
    // ─────────────────────────────────────────────────────────────────

    /**
     * Move an uploaded image to /public/normal_images/ and return its filename.
     * Returns null if no file was uploaded.
     */
    private function uploadImage(Request $request, string $field): ?string
    {
        if (!$request->hasFile($field)) {
            return null;
        }

        $file      = $request->file($field);
        $filename  = round(microtime(true) * 1000) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('/normal_images'), $filename);

        return $filename;
    }

    /**
     * Delete a file from /public/normal_images/ if it exists.
     */
    private function deleteImage(?string $filename): void
    {
        if ($filename && file_exists(public_path('/normal_images/' . $filename))) {
            unlink(public_path('/normal_images/' . $filename));
        }
    }

    /**
     * Clear cached home page data (both web and API variants).
     * Called after any CMS write operation that could affect the home page.
     */
    private function clearHomeCache(): void
    {
        Cache::forget('home_page_api');
        Cache::forget('home_page_web');
    }

    // ═════════════════════════════════════════════════════════════════
    // CONTENT TYPE
    // ═════════════════════════════════════════════════════════════════

    /**
     * POST /api/cms/content-type
     *
     * Body (multipart/form-data or JSON):
     *   type*    integer   Compound type value (see ContentType model comment)
     *   title*   string
     *   content  string    (optional)
     *   status   0|1       (default 1)
     *   photo    file      (optional image upload)
     */
    public function CmsStoreContentType(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'type'    => 'required|integer',
                'title'   => 'required|string|max:255',
                'content' => 'nullable|string',
                'status'  => 'nullable|in:0,1',
                'photo'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            $item          = new ContentType();
            $item->type    = $request->type;
            $item->title   = $request->title;
            $item->content = $request->content;
            $item->status  = $request->input('status', 1);
            $item->image   = $this->uploadImage($request, 'photo');
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Content type created successfully',
                'data'    => $item,
            ], 201);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * PUT /api/cms/content-type/{id}
     * PATCH is aliased to the same method (see routes).
     *
     * Partial updates are supported: only supplied fields are modified.
     * If `photo` is uploaded the old image is deleted first.
     */
    public function CmsUpdateContentType(Request $request, $id)
    {
        try {
            $item = ContentType::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Content type not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                'type'    => 'nullable|integer',
                'title'   => 'nullable|string|max:255',
                'content' => 'nullable|string',
                'status'  => 'nullable|in:0,1',
                'photo'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            if ($request->has('type'))    $item->type    = $request->type;
            if ($request->has('title'))   $item->title   = $request->title;
            if ($request->has('content')) $item->content = $request->content;
            if ($request->has('status'))  $item->status  = $request->status;

            if ($request->hasFile('photo')) {
                $this->deleteImage($item->image);
                $item->image = $this->uploadImage($request, 'photo');
            }

            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Content type updated successfully',
                'data'    => $item,
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * DELETE /api/cms/content-type/{id}
     * Soft delete: sets status = 0. Row is preserved.
     */
    public function CmsDeleteContentType($id)
    {
        try {
            $item = ContentType::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Content type not found'], 404);
            }

            $item->status = 0;
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Content type deactivated (soft-deleted) successfully',
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    // ═════════════════════════════════════════════════════════════════
    // BLOG
    // ═════════════════════════════════════════════════════════════════

    /**
     * POST /api/cms/blog
     *
     * Body:
     *   title*   string
     *   content* string
     *   slug*    string  (unique)
     *   status   0|1
     *   photo    file    (optional)
     */
    public function CmsStoreBlog(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title'   => 'required|string|max:255',
                'content' => 'required|string',
                'slug'    => 'required|string|unique:blogs,slug|max:255',
                'status'  => 'nullable|in:0,1',
                'photo'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            $item          = new Blog();
            $item->title   = $request->title;
            $item->content = $request->content;
            $item->slug    = $request->slug;
            $item->status  = $request->input('status', 1);
            $item->image   = $this->uploadImage($request, 'photo');
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Blog created successfully',
                'data'    => $item,
            ], 201);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * PUT /api/cms/blog/{id}
     */
    public function CmsUpdateBlog(Request $request, $id)
    {
        try {
            $item = Blog::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Blog not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                'title'   => 'nullable|string|max:255',
                'content' => 'nullable|string',
                'slug'    => 'nullable|string|unique:blogs,slug,' . $id . '|max:255',
                'status'  => 'nullable|in:0,1',
                'photo'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            if ($request->has('title'))   $item->title   = $request->title;
            if ($request->has('content')) $item->content = $request->content;
            if ($request->has('slug'))    $item->slug    = $request->slug;
            if ($request->has('status'))  $item->status  = $request->status;

            if ($request->hasFile('photo')) {
                $this->deleteImage($item->image);
                $item->image = $this->uploadImage($request, 'photo');
            }

            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Blog updated successfully',
                'data'    => $item,
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * DELETE /api/cms/blog/{id}
     * Soft delete: status = 0.
     */
    public function CmsDeleteBlog($id)
    {
        try {
            $item = Blog::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Blog not found'], 404);
            }

            $item->status = 0;
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Blog deactivated (soft-deleted) successfully',
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    // ═════════════════════════════════════════════════════════════════
    // PAGE
    // ═════════════════════════════════════════════════════════════════

    /**
     * POST /api/cms/page
     *
     * Body:
     *   post_type*  string  e.g. language, pr_investment, page, event
     *   title*      string
     *   url*        string  (slug, unique)
     *   content     string
     *   content_2   string
     *   status      0|1
     *   photo       file    (thumbnail/image)
     *   banner      file    (banner image)
     *   seo_title        string
     *   seo_keyword      string
     *   seo_description  string
     */
    public function CmsStorePage(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'post_type'       => 'required|string|max:100',
                'title'           => 'required|string|max:255',
                'url'             => 'required|string|unique:pages,url|max:255',
                'content'         => 'nullable|string',
                'content_2'       => 'nullable|string',
                'status'          => 'nullable|in:0,1',
                'photo'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                'banner'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                'seo_title'       => 'nullable|string|max:255',
                'seo_keyword'     => 'nullable|string|max:500',
                'seo_description' => 'nullable|string|max:500',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            $item                  = new Page();
            $item->post_type       = $request->post_type;
            $item->title           = $request->title;
            $item->url             = strtolower($request->url);
            $item->content         = $request->content;
            $item->content_2       = $request->content_2;
            $item->status          = $request->input('status', 1);
            $item->seo_title       = $request->seo_title;
            $item->seo_keyword     = $request->seo_keyword;
            $item->seo_description = $request->seo_description;
            $item->image           = $this->uploadImage($request, 'photo');
            $item->banner          = $this->uploadImage($request, 'banner');
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Page created successfully',
                'data'    => $item,
            ], 201);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * PUT /api/cms/page/{id}
     */
    public function CmsUpdatePage(Request $request, $id)
    {
        try {
            $item = Page::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Page not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                'post_type'       => 'nullable|string|max:100',
                'title'           => 'nullable|string|max:255',
                'url'             => 'nullable|string|unique:pages,url,' . $id . '|max:255',
                'content'         => 'nullable|string',
                'content_2'       => 'nullable|string',
                'status'          => 'nullable|in:0,1',
                'photo'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                'banner'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                'seo_title'       => 'nullable|string|max:255',
                'seo_keyword'     => 'nullable|string|max:500',
                'seo_description' => 'nullable|string|max:500',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            if ($request->has('post_type'))       $item->post_type       = $request->post_type;
            if ($request->has('title'))           $item->title           = $request->title;
            if ($request->has('url'))             $item->url             = strtolower($request->url);
            if ($request->has('content'))         $item->content         = $request->content;
            if ($request->has('content_2'))       $item->content_2       = $request->content_2;
            if ($request->has('status'))          $item->status          = $request->status;
            if ($request->has('seo_title'))       $item->seo_title       = $request->seo_title;
            if ($request->has('seo_keyword'))     $item->seo_keyword     = $request->seo_keyword;
            if ($request->has('seo_description')) $item->seo_description = $request->seo_description;

            if ($request->hasFile('photo')) {
                $this->deleteImage($item->image);
                $item->image = $this->uploadImage($request, 'photo');
            }
            if ($request->hasFile('banner')) {
                $this->deleteImage($item->banner);
                $item->banner = $this->uploadImage($request, 'banner');
            }

            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Page updated successfully',
                'data'    => $item,
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * DELETE /api/cms/page/{id}
     * Soft delete: status = 0.
     */
    public function CmsDeletePage($id)
    {
        try {
            $item = Page::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Page not found'], 404);
            }

            $item->status = 0;
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Page deactivated (soft-deleted) successfully',
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    // ═════════════════════════════════════════════════════════════════
    // HOME SLIDER
    // ═════════════════════════════════════════════════════════════════

    /**
     * POST /api/cms/home-slider
     *
     * Body:
     *   title*  string
     *   status  0|1
     *   photo   file
     */
    public function CmsStoreHomeSlider(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title'  => 'required|string|max:255',
                'status' => 'nullable|in:0,1',
                'photo'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            $item         = new HomeSlider();
            $item->title  = $request->title;
            $item->status = $request->input('status', 1);
            $item->image  = $this->uploadImage($request, 'photo');
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Home slider created successfully',
                'data'    => $item,
            ], 201);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * PUT /api/cms/home-slider/{id}
     */
    public function CmsUpdateHomeSlider(Request $request, $id)
    {
        try {
            $item = HomeSlider::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Home slider not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                'title'  => 'nullable|string|max:255',
                'status' => 'nullable|in:0,1',
                'photo'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            if ($request->has('title'))  $item->title  = $request->title;
            if ($request->has('status')) $item->status = $request->status;

            if ($request->hasFile('photo')) {
                $this->deleteImage($item->image);
                $item->image = $this->uploadImage($request, 'photo');
            }

            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Home slider updated successfully',
                'data'    => $item,
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * DELETE /api/cms/home-slider/{id}
     * Soft delete: status = 0.
     */
    public function CmsDeleteHomeSlider($id)
    {
        try {
            $item = HomeSlider::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Home slider not found'], 404);
            }

            $item->status = 0;
            $item->save();

            $this->clearHomeCache();

            return response()->json([
                'status'  => true,
                'message' => 'Home slider deactivated (soft-deleted) successfully',
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    // ═════════════════════════════════════════════════════════════════
    // GALLERY
    // ═════════════════════════════════════════════════════════════════

    /**
     * POST /api/cms/gallery
     *
     * Body:
     *   title*       string
     *   data_filter* string  e.g. event, gallery
     *   type         string
     *   status       0|1
     *   photo        file
     */
    public function CmsStoreGallery(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title'       => 'required|string|max:255',
                'data_filter' => 'required|string|max:100',
                'type'        => 'nullable|string|max:100',
                'status'      => 'nullable|in:0,1',
                'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            $item              = new Gallery();
            $item->title       = $request->title;
            $item->data_filter = $request->data_filter;
            $item->type        = $request->type;
            $item->status      = $request->input('status', 1);
            $item->image       = $this->uploadImage($request, 'photo');
            $item->save();

            return response()->json([
                'status'  => true,
                'message' => 'Gallery item created successfully',
                'data'    => $item,
            ], 201);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * PUT /api/cms/gallery/{id}
     */
    public function CmsUpdateGallery(Request $request, $id)
    {
        try {
            $item = Gallery::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Gallery item not found'], 404);
            }

            $validator = Validator::make($request->all(), [
                'title'       => 'nullable|string|max:255',
                'data_filter' => 'nullable|string|max:100',
                'type'        => 'nullable|string|max:100',
                'status'      => 'nullable|in:0,1',
                'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            if ($request->has('title'))       $item->title       = $request->title;
            if ($request->has('data_filter')) $item->data_filter = $request->data_filter;
            if ($request->has('type'))        $item->type        = $request->type;
            if ($request->has('status'))      $item->status      = $request->status;

            if ($request->hasFile('photo')) {
                $this->deleteImage($item->image);
                $item->image = $this->uploadImage($request, 'photo');
            }

            $item->save();

            return response()->json([
                'status'  => true,
                'message' => 'Gallery item updated successfully',
                'data'    => $item,
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * DELETE /api/cms/gallery/{id}
     * Soft delete: status = 0.
     */
    public function CmsDeleteGallery($id)
    {
        try {
            $item = Gallery::find($id);
            if (!$item) {
                return response()->json(['status' => false, 'message' => 'Gallery item not found'], 404);
            }

            $item->status = 0;
            $item->save();

            return response()->json([
                'status'  => true,
                'message' => 'Gallery item deactivated (soft-deleted) successfully',
            ], 200);
        } catch (Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }
}
