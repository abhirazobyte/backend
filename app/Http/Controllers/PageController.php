<?php
namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = Page::where('post_type','page')->orderBy('id', 'desc')->with('page_type')->get();
        //return view('backend.page.list', compact('datas'));
        return view('backend.page.list', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

		        return view('backend.page.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'type' => 'required',
            'banner' => !empty($request->file('banner')) ? 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2024' : '',
        ]);

        $imagename = "";
        $bannername = "";

        if($request->file('image')){
            $photo = $request->file('image');
            $imagename = time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $photo->move($destinationPath, $imagename);
        }

        if(!empty($request->file('banner'))){
            $banner = $request->file('banner');
            $bannername = time().'.'.$banner->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $banner->move($destinationPath, $bannername);

        }

        $item = new Page();
        $type= Session::get('pageType');
        $url = preg_replace('!\s+!', '-', strtolower($request->title));
        $item->type = $request->type;
        $item->post_type = "page";
		$item->title = $request->title;
		$item->url = $url;
		$item->content = $request->content;
		$item->seo_title = $request->seo_title;
		$item->seo_keyword = $request->seo_keyword;
        $item->seo_description = $request->seo_description;
        $item->image = $imagename;
		$item->banner = $bannername;
		$item->save();
		  // redirect
        return redirect()->back()->with('success', 'New Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		$datas = Page::orderBy('id', 'desc')->get();
		return view('backend.page', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $item= Page::find($id);
		return view('backend.page.create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'type' => 'required',
        ]);

        $item = Page::find($id);

        $bannername= '';
        $imagename = "";
        $normal_images = public_path('/normal_images');


        if(!empty($request->file('image'))){
            if(!empty($item->image) && file_exists($normal_images.'/'.$item->image)){
                    unlink($normal_images.'/'.$item->image);
            }
            $photo = $request->file('image');
            $imagename = round(microtime(true) * 1000).'.'.$photo->getClientOriginalExtension();
            $photo->move($normal_images, $imagename);
         }


         if(!empty($request->file('banner'))){
            if(!empty($item->banner) && file_exists($normal_images.'/'.$item->banner)){
                    unlink($normal_images.'/'.$item->banner);
            }
            $banner = $request->file('banner');
            $bannername = time().'.'.$banner->getClientOriginalExtension();
            $banner->move($normal_images, $bannername);
         }

        $type= Session::get('pageType');
        $url = preg_replace('!\s+!', '-', strtolower($request->title));
        $item->type = $request->type;
        $item->title = $request->title;
        $item->post_type = "page";
		$item->url = $url;
		$item->content = $request->content;
        $item->banner = $bannername ? $bannername : $item->banner;
        $item->image = $imagename ? $imagename : $item->image;

        $item->seo_title = $request->seo_title;
		$item->seo_keyword = $request->seo_keyword;
		$item->seo_description = $request->seo_description;
        $item->save();

		 return redirect()->back()->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Page::find($id);
        $normal_images = public_path('/normal_images');

        if(file_exists($normal_images.'/'.$item->image)){
            unlink($normal_images.'/'.$item->image);
    }
        if(file_exists($normal_images.'/'.$item->banner)){
                unlink($normal_images.'/'.$item->banner);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');

    }


    public function pageType($type){
       // return $type;

        Session::put('pageType', $type);
        $datas = Page::where('type', $type)->orderBy('id', 'desc')->get();
        return view('backend.page.list', compact('datas'));

    }
}
