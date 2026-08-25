<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

// namespace App\Http\Controllers;
// use App\Models\Setting;
// use Session;
// use Image;
// use App\Http\Requests\StoreSettingRequest;
// use App\Http\Requests\UpdateSettingRequest;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Setting::orderBy('id', 'desc')->get();
        return view('backend/setting/list', ['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $item = Setting::first();
        return view('backend/setting/create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    // Setting $setting
    {
        // \App\Models\
        $datas = Setting::orderBy('id', 'desc')->get();
		return view('backend/setting/', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    // Setting $setting
    {
        // \App\Models\
        $item= Setting::find($id);
		return view('backend/setting/create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    // UpdateSettingRequest $request, Setting $setting
    {
        //
         // \App\Models\

         $item = Setting::find(19);
         $imagename = "";

        // return $request->phone;

         if(!empty($request->file('photo'))){
         $normal_images = public_path('/normal_images');
         if(!empty($item->logo) && file_exists($normal_images.'/'.$item->logo)){
                 unlink($normal_images.'/'.$item->logo);
         }
         $photo = $request->file('photo');
         $imagename = time().'.'.$photo->getClientOriginalExtension();
         $photo->move($normal_images, $imagename);
     }


         $item->title = $request->title;
         $item->phone = $request->phone ? $request->phone : $item->phone;
         $item->email = $request->email;
         $item->address = $request->address;
         $item->map = $request->map ? $request->map : $item->map;
         $item->seo_title = $request->seo_title;
         $item->seo_description = $request->seo_description;
         $item->seo_keyword = $request->seo_keyword;
         $item->logo = $imagename ? $imagename : $item->logo;
         $item->status = $request->status ? 1 :0;
          $item->save();


          return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    // Setting $setting
    {
        // \App\Models\
        $item = Setting::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');
    }
}
