<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AffiliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       // return \App\User::with('comments', 'userreplies')->with('profile')->get();
       //
       // Session::put('employee', 'Employee session started');


       $datas = Page::where('post_type','affiliation')->orderBy('id', 'ASC')->get();
        return view('backend.affiliation.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		        return view('backend/affiliation/create');

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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2024',
        ]);

        $imagename = "";
        $bannername = "";
        $aidname = "";

        if($request->file('photo')){
            $photo = $request->file('photo');
            $imagename = time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $photo->move($destinationPath, $imagename);
        }
        if($request->file('banner')){
            $banner = $request->file('banner');
            $bannername = round(microtime(true)*1000).'.'.$banner->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $banner->move($destinationPath, $bannername);
        }
        if($request->file('aid')){
            $aid = $request->file('aid');
            $aidname = round(microtime(true)*1000).'.'.$aid->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $aid->move($destinationPath, $aidname);
        }


        $item = new Page();
        $slug = str_replace(
            array(" ","&","/"),
            array("-", "and","or"),
            $request->title
        );
        $item->post_type = "affiliation";
        $item->title = $request->title;
        $item->url = strtolower($slug);
        $item->content = $request->content;
        $item->image = $imagename;
		$item->seo_title = $request->seo_title;
		$item->seo_keyword = $request->seo_keyword;
        $item->seo_description = $request->seo_description;
        $item->banner = $bannername;
        $item->aid = $aidname;

		$item->save();
        return redirect()->back()->with('success', 'Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		$datas = Page::orderBy('id', 'desc')->get();
		return view('backend.affiliation', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $item= Page::find($id);
		return view('backend.affiliation.create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $item = Page::find($id);

        $imageFolder = public_path('/normal_images');
        $imagename = "";
        $bannername = "";
        $aidname = "";


        if(!empty($request->file('photo'))){
            if(!empty($item->image) && file_exists($imageFolder.'/'.$item->image)){
                    unlink($imageFolder.'/'.$item->image);
            }
            $photo = $request->file('photo');
            $imagename = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($imageFolder, $imagename);
         }

         if($request->file('banner')){
            if(!empty($item->banner) && file_exists($imageFolder.'/'.$item->banner)){
                unlink($imageFolder.'/'.$item->banner);
        }
            $banner = $request->file('banner');
            $bannername = round(microtime(true)*1000).'.'.$banner->getClientOriginalExtension();
            $banner->move($imageFolder, $bannername);
        }
        if($request->file('aid')){
            if(!empty($item->aid) && file_exists($imageFolder.'/'.$item->aid)){
                unlink($imageFolder.'/'.$item->aid);
        }
            $aid = $request->file('aid');
            $aidname = round(microtime(true)*1000).'.'.$aid->getClientOriginalExtension();
            $aid->move($imageFolder, $aidname);
        }

        $slug = str_replace(
            array(" ","&","/"),
            array("-", "and","or"),
            $request->title
        );
        $item->post_type = "affiliation";
        $item->title = $request->title;
        $item->url = strtolower($slug);
        $item->content = $request->content;
         $item->seo_title = $request->seo_title;
         $item->seo_keyword = $request->seo_keyword;
         $item->seo_description = $request->seo_description;
         $item->banner = $bannername ? $bannername : $item->banner;
         $item->aid = $aidname ? $aidname : $item->aid;
         $item->status = $request->status ? 1 :0;
		 $item->image = $imagename ? $imagename : $item->image;
         $item->save();



		 return redirect()->back()->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $item = Page::find($id);
        $normal_images = public_path('/normal_images');
        if(!empty($item->image) && file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        if(!empty($item->banner) && file_exists($normal_images.'/'.$item->banner)){
            unlink($normal_images.'/'.$item->banner);
        }
        if(!empty($item->aid) && file_exists($normal_images.'/'.$item->aid)){
            unlink($normal_images.'/'.$item->aid);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');

    }


}
