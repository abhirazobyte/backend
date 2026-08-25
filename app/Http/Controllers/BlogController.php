<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
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

       $datas = Blog::orderBy('id', 'desc')->get();
        return view('backend.blog.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               // return Session::get('BlogType');

		        return view('backend.blog.create');

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
            'photo' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $imagename = '';
		if(!empty($request->file('photo'))){
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
    }

        $item = new Blog();
        $slug = str_replace(
            array(" ","&"),
            array("-", "and"),
            $request->title
        );
        $item->title = $request->title;
        $item->slug = strtolower($slug);
        $item->image = $imagename;
        $item->content = $request->content;
        $item->seo_title = $request->seo_title;
        $item->seo_keyword = $request->seo_keyword;
        $item->seo_content = $request->seo_content;
        //$item->seo_description = $request->seo_description;
		$item->save();
		  //redirect
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
		$datas = Blog::orderBy('id', 'desc')->get();
		return view('frontend.blog', compact('datas'));
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
        $item= Blog::find($id);
		return view('backend.blog.create', compact('item'));
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

        $item = Blog::find($id);

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


        $item->title = $request->title;
        $slug = str_replace(
            array(" ","&"),
            array("-", "and"),
            $request->title
        );
        $item->slug = strtolower($slug);
        $item->image = $imagename ? $imagename : $item->image;
        $item->content = $request->content;
        $item->seo_title = $request->seo_title;
        $item->seo_keyword = $request->seo_keyword;
        $item->seo_content = $request->seo_description;
        //$item->seo_description = $request->seo_description;
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

        $item = Blog::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');

    }

}
