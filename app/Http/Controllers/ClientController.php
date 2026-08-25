<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $datas = Client::orderBy('id', 'desc')->get();
        return view('backend.client.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               // return Session::get('ClientType');

		        return view('backend.client.create');

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
        ]);
        $imagename = '';
		if(!empty($request->file('photo'))){
        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
    }

        $item = new Client();
        $item->title = $request->title;
        $item->image = $imagename;
		$item->save();
        return redirect()->back()->with('success', 'New Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $Client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		$datas = Client::orderBy('id', 'desc')->get();
		return view('backend.client', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $Client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $item= Client::find($id);
		return view('backend.client.create', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $item = Client::find($id);

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
        $item->image = $imagename ? $imagename : $item->image;
        $item->save();

		 return redirect()->back()->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $item = Client::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
                unlink($normal_images.'/'.$item->image);
        }
        $item->delete();
		return redirect()->back()->with('success', 'Item deleted successfully');

    }

}
