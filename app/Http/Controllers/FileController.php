<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $datas = File::orderBy('id', 'desc')->get();
        return view('backend.files.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('backend.files.create');

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
        ]);
        $imagename = '';
		if(!empty($request->file('photo'))){
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
        }
        $item = new File();
        $item->title = $request->title;
        $item->image = $imagename;
		$item->save();
        return redirect()->back()->with('success', 'New Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		$datas = File::orderBy('id', 'desc')->get();
		return view('backend.files', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $item= File::find($id);
		return view('backend.files.create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = File::find($id);
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
        $item->slug = strtolower($slug);
        $item->image = $imagename ? $imagename : $item->image;
        $item->save();
		return redirect()->back()->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = File::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');

    }

}
