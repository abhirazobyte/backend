<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContentTypeController extends Controller
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
         //Session::put('employee', 'Employee session started');

        $datas = ContentType::with('types')->orderBy('id', 'desc')->get();
        return view('backend.content-type.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.content-type.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->type;
        if ($type != 3 || $type != 5 || $type != 7) {
            $this->validate($request, [
                'type' => 'required',
                'title' => 'required',
            ]);

        } else {
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2024',
                'type' => 'required',
                'title' => 'required',
            ]);

        }

        $imagename = null;

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $imagename = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/normal_images');
            $photo->move($destinationPath, $imagename);
        }

        $item = new ContentType();
        $item->type = $request->type;
        $item->title = $request->title;
        $item->content = $request->content;
        $item->status = $request->status;
        $item->image = $imagename;
        $item->save();
        return redirect()->back()->with('success', 'New item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContentType  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $datas = ContentType::orderBy('id', 'desc')->get();
        return view('backend.content-type', compact('datas'));
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
        $item = ContentType::find($id);
        return view('backend.content-type.create', compact('item'));
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

        $item = ContentType::find($id);
        $imagename = null;

        if (!empty($request->file('photo'))) {

            $normal_images = public_path('/normal_images');
            if (!empty($item->image) && file_exists($normal_images . '/' . $item->image)) {

                unlink($normal_images . '/' . $item->image);
            }
            $photo = $request->file('photo');
            $imagename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move($normal_images, $imagename);

        }

        $item->type = $request->type;
        $item->title = $request->title;
        $item->content = $request->content;
        $item->status = $request->status ? 1 : 0;
        $item->image = !empty($imagename) ? $imagename : $item->image;
        $item->save();

        return redirect()->back()->with('success', 'Home slider updated successfully');
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

        $item = ContentType::find($id);
        $normal_images = public_path('/normal_images');
        if (!empty($item->image) && file_exists($normal_images . '/' . $item->image)) {
            unlink($normal_images . '/' . $item->image);
        }
        $item->delete();
        return redirect()->back()->with('success', 'Item deleted successfully');

    }
}
