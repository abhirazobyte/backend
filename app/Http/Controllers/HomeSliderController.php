<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\HomeSlider;
use Image;

// namespace App\Http\Controllers;

// use App\Models\HomeSlider;
// use App\Http\Requests\StoreHomeSliderRequest;
// use App\Http\Requests\UpdateHomeSliderRequest;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'prem';
        $datas = HomeSlider::orderBy('id', 'desc')->get();
        return view('backend.homeslider.list', ['datas' => $datas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.homeslider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2024',
        ]);

        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);

		$item = new HomeSlider();
		$item->title = $request->title;
		$item->image = $imagename;
		$item->save();
        return redirect()->back()->with('success', 'New slider create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $datas = HomeSlider::orderBy('id', 'desc')->get();
		return view('backend.homeslider', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $item= HomeSlider::find($id);
		return view('backend.homeslider.create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeSliderRequest  $request
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = HomeSlider::find($id);

        if(empty($request->file('photo'))){
         $item->title = $request->title;
        $item->status = $request->status ? 1 :0;
         $item->save();
        }
        else
        {

        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $photo->move($normal_images, $imagename);

        $item->title = $request->title;
        $item->status = $request->status ? 1 :0;
		$item->image = $imagename;
         $item->save();

        }


		 return redirect()->back()->with('success', 'Home slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HomeSlider::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Slider deleted successfully');
    }
}
