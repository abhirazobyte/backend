<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = Gallery::orderBy('id', 'desc')->get();
        return view('backend.gallery.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               // return Session::get('galleryType');

		        return view('backend.gallery.create');

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
            'photo' => !empty($request->type=='video') ? '' : 'required',
            'type' => 'required',
        ]);
        $imagename = '';
		if(!empty($request->file('photo'))){
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
    }
        $url = '';
        if($request->type=='video'){
            $url = $request->url;
        }

        $item = new Gallery();
        $item->data_filter = $request->data_filter;
		$item->title = $request->title;
		$item->type = $request->type;
		$item->image = $request->type=='video' && !empty($url) ? $url : $imagename;
		$item->save();
		  // redirect
        return redirect()->back()->with('success', 'New Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        Session::pull('pageTitle');
        Session::pull('page_id');
        Session::pull('galleryType');
        session()->forget('pageType');

		$datas = Gallery::orderBy('id', 'desc')->get();
		return view('backend.gallery', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $item= Gallery::find($id);
		return view('backend.gallery.create', compact('item'));
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

        $item = Gallery::find($id);

        $imagename= '';

         if(!empty($request->file('photo'))){
            $normal_images = public_path('/normal_images');
            if(!empty($item->image) && file_exists($normal_images.'/'.$item->image)){
                    unlink($normal_images.'/'.$item->image);
            }
            $photo = $request->file('photo');
            $imagename = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($normal_images, $imagename);
         }

         $url = '';
         if($request->type=='video'){
             $url = $request->url;
         }

        $item->data_filter = $request->data_filter;
        $item->title = $request->title;
        $item->type = $request->type;
        if($request->type=='video' && !empty($url)){
            $item->image = $request->type=='video' && !empty($url) ? $url : $imagename;
        }else{
            $item->image = $imagename ? $imagename : $item->image;
        }

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
        $item = Gallery::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');
    }

}
