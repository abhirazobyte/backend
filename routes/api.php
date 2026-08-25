<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group.
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


 Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');

    // Artisan::call('view:clear');

    //  Artisan::call('config:cache');
    //  Artisan::call('config:clear');

    //  Artisan::call('route:cache');
    //  Artisan::call('route:clear');

    //  Artisan::call('optimize');
     Artisan::call('optimize:clear');

    // Clear home page caches
    \Illuminate\Support\Facades\Cache::forget('home_page_api');
    \Illuminate\Support\Facades\Cache::forget('home_page_web');

    //return "Cache is cleared"; // you can replace your redirect
    return redirect('https://www.langmainternational.com');
    });
// ── Content Type Lookup ──────────────────────────────────────────────────
// #0  List all available content types from the types lookup table
Route::get('content-type-list', [ApiController::class, 'ContentTypeList']);

// ── Blog ─────────────────────────────────────────────────────────────────
// #1  Blog Main Page  – Images, Heading
Route::get('blog-list', [ApiController::class, 'BlogList']);

// #2  Blog Detail Page  – Content, Banner, Recent Post
Route::get('blog-detail/{slug}', [ApiController::class, 'BlogDetail']);

// ── Language Pages ───────────────────────────────────────────────────────
// #3  Language Page (all pages) – PR opportunities, FAQ, Discover section
Route::get('language-page/{slug}', [ApiController::class, 'LanguagePage']);

// #7  International Language listing – Top banner, Content, Speak Fearlessly
Route::get('international-languages', [ApiController::class, 'InternationalLanguages']);

// #8  Language Detail Information – FAQs
Route::get('language-detail/{slug}', [ApiController::class, 'LanguageDetail']);

// #15  Languages page – Scrollable language list
Route::get('languages', [ApiController::class, 'LanguagesList']);

// ── Events ───────────────────────────────────────────────────────────────
// #4  Events – Images, Content
Route::get('events', [ApiController::class, 'Events']);

// #17  Events – Image + Content of Image (gallery only)
Route::get('event-gallery', [ApiController::class, 'EventGallery']);

// ── PR By Investment ─────────────────────────────────────────────────────
// #5  PR By Investment country pages (single) – Eligibility, Benefits, Opportunities, Banner, FAQ
Route::get('pr-investment/{slug}', [ApiController::class, 'PrInvestmentCountry']);

// #13  PR By Investment country pages (all listing)
Route::get('pr-investment-countries', [ApiController::class, 'PrInvestmentCountries']);

// #14  PR By Investment main page – Global Residency Investment Options
Route::get('pr-investment', [ApiController::class, 'PrInvestmentMain']);

// ── Home Page ─────────────────────────────────────────────────────────────
// #6  Home Page – Slider/Video, Study Abroad, About Us, Languages,
//                 Popular Courses, Blogs, Langma Unites, FAQ, Study Destinations
Route::get('home', [ApiController::class, 'HomePage']);

// ── Study / Work / Global ─────────────────────────────────────────────────
// #9  Study Abroad – Banner, Paragraph Content, FAQ
Route::get('study-abroad', [ApiController::class, 'StudyAbroad']);

// #10  Work Abroad – Banner, Content, FAQ, Country Destinations
Route::get('work-abroad', [ApiController::class, 'WorkAbroad']);

// #11  Global Assist – Banner, Two editors, FAQ
Route::get('global-assist', [ApiController::class, 'GlobalAssist']);

// ── Cultural Holidays ─────────────────────────────────────────────────────
// #12  Cultural Holidays – Recommended Trips, Explore India
Route::get('cultural-holidays', [ApiController::class, 'CulturalHolidays']);

// ── Career ────────────────────────────────────────────────────────────────────
// #16  Career Page – Open Opportunities
Route::get('career', [ApiController::class, 'CareerPage']);

// ── Lead Capture ──────────────────────────────────────────────────────────────
// #18 Contact Lead – JSON Endpoint for Decoupled Frontends
Route::post('contact-lead', [ContactController::class, 'apiContactLead']);
// ══════════════════════════════════════════════════════════════════════════════
//  CMS Write API  (authenticated — requires active CMS session via cms.auth)
//
//  Auth:    The CMS uses a session-based login (session key: LoggedUser).
//           Log in via the CMS web panel at /auth/login first, then call these
//           endpoints from the same browser/cookie context.
//
//  Soft-delete convention:  DELETE sets status = 0 (row is preserved in DB).
//
//  Prefix:  /api/cms/...
// ══════════════════════════════════════════════════════════════════════════════

use App\Http\Controllers\CmsApiController;

Route::middleware('cms.auth')->prefix('cms')->group(function () {

    // ── ContentType ───────────────────────────────────────────────────────────
    // POST   /api/cms/content-type          Create a new content_type record
    // PUT    /api/cms/content-type/{id}     Full update
    // PATCH  /api/cms/content-type/{id}     Partial update (same handler as PUT)
    // DELETE /api/cms/content-type/{id}     Soft-delete (status = 0)
    Route::post('content-type',           [CmsApiController::class, 'CmsStoreContentType']);
    Route::put('content-type/{id}',       [CmsApiController::class, 'CmsUpdateContentType']);
    Route::patch('content-type/{id}',     [CmsApiController::class, 'CmsUpdateContentType']);
    Route::delete('content-type/{id}',    [CmsApiController::class, 'CmsDeleteContentType']);

    // ── Blog ──────────────────────────────────────────────────────────────────
    // POST   /api/cms/blog                  Create a new blog post
    // PUT    /api/cms/blog/{id}             Full update
    // PATCH  /api/cms/blog/{id}             Partial update
    // DELETE /api/cms/blog/{id}             Soft-delete (status = 0)
    Route::post('blog',                   [CmsApiController::class, 'CmsStoreBlog']);
    Route::put('blog/{id}',               [CmsApiController::class, 'CmsUpdateBlog']);
    Route::patch('blog/{id}',             [CmsApiController::class, 'CmsUpdateBlog']);
    Route::delete('blog/{id}',            [CmsApiController::class, 'CmsDeleteBlog']);

    // ── Page ──────────────────────────────────────────────────────────────────
    // POST   /api/cms/page                  Create page (any post_type)
    // PUT    /api/cms/page/{id}             Full update
    // PATCH  /api/cms/page/{id}             Partial update
    // DELETE /api/cms/page/{id}             Soft-delete (status = 0)
    Route::post('page',                   [CmsApiController::class, 'CmsStorePage']);
    Route::put('page/{id}',               [CmsApiController::class, 'CmsUpdatePage']);
    Route::patch('page/{id}',             [CmsApiController::class, 'CmsUpdatePage']);
    Route::delete('page/{id}',            [CmsApiController::class, 'CmsDeletePage']);

    // ── HomeSlider ────────────────────────────────────────────────────────────
    // POST   /api/cms/home-slider           Create slider item
    // PUT    /api/cms/home-slider/{id}      Full update
    // PATCH  /api/cms/home-slider/{id}      Partial update
    // DELETE /api/cms/home-slider/{id}      Soft-delete (status = 0)
    Route::post('home-slider',            [CmsApiController::class, 'CmsStoreHomeSlider']);
    Route::put('home-slider/{id}',        [CmsApiController::class, 'CmsUpdateHomeSlider']);
    Route::patch('home-slider/{id}',      [CmsApiController::class, 'CmsUpdateHomeSlider']);
    Route::delete('home-slider/{id}',     [CmsApiController::class, 'CmsDeleteHomeSlider']);

    // ── Gallery ───────────────────────────────────────────────────────────────
    // POST   /api/cms/gallery               Create gallery item
    // PUT    /api/cms/gallery/{id}          Full update
    // PATCH  /api/cms/gallery/{id}          Partial update
    // DELETE /api/cms/gallery/{id}          Soft-delete (status = 0)
    Route::post('gallery',                [CmsApiController::class, 'CmsStoreGallery']);
    Route::put('gallery/{id}',            [CmsApiController::class, 'CmsUpdateGallery']);
    Route::patch('gallery/{id}',          [CmsApiController::class, 'CmsUpdateGallery']);
    Route::delete('gallery/{id}',         [CmsApiController::class, 'CmsDeleteGallery']);
});