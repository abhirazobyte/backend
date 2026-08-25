<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\LanguageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       $datas = LanguageDetail::orderBy('id', 'ASC')->get();
        return view('backend.language-detail.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                $lanid = Session::get('language_id');
		        return view('backend.language-detail.create', compact('lanid'));

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


        $item = new LanguageDetail();
        $slug = str_replace(
            array(" ","&","/"),
            array("-", "and","or"),
            $request->title."-language-program"
        );
        $seo_url = str_replace(
            array(" ","&","/"),
            array("-", "and","or"),
            $request->seo_url);
        $item->title = $request->title;
        $item->slug = $seo_url  ? strtolower($seo_url) : strtolower($slug);
        $item->content = $request->content;
        $item->fact = $request->fact;
        $item->course_feature = json_encode(array(
            'lecture'=>$request->lecture,
            'quiz'=>$request->quiz,
            'duration'=>$request->duration,
            'skill'=>$request->skill,
            'student'=>$request->student,
            'language'=>$request->language,
            'assesment'=>$request->assesment));
        $item->important_info = $request->important_info;
        $item->language_id = Session::get('language_id');

         $item->seo_title = $request->seo_title;
         $item->seo_keyword = $request->seo_keyword;
         $item->seo_description = $request->seo_description;
         $item->banner = $bannername ? $bannername : $item->banner;
         $item->aid = $aidname ? $aidname : $item->aid;
         $item->status = $request->status ? 1 :0;
         $item->image = $imagename ? $imagename : $item->image;
         $item->save();


        return redirect()->back()->with('success', 'Item create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		$datas = LanguageDetail::orderBy('id', 'desc')->get();
		return view('backend.language-detail', compact('datas'));
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
        $item= LanguageDetail::find($id);
        $lanid = Session::get('language_id');
		return view('backend.language-detail.create', compact('item','lanid'));
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

        //return $request->all();

        $item = LanguageDetail::find($id);

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
        $seo_url = str_replace(
            array(" ","&","/"),
            array("-", "and","or"),
            $request->seo_url);

         $newslugs= $seo_url  ? strtolower($seo_url) : strtolower($slug);


        // $check_duplicate_slug = \App\LanguageDetail::
        //      where('slug',$newslugs)
        //      ->where('id','!=', $id)
        //      ->first();

        //      if(!empty($check_duplicate_slug->id)){
        //      return redirect()->back()->withErrors('errors', 'SEO url already available');

        //      }


        $item->title = $request->title;
        $item->slug = $newslugs;
        $item->content = $request->content;
        $item->fact = $request->fact;
        $item->course_feature = json_encode(array(
            'lecture'=>$request->lecture,
            'quiz'=>$request->quiz,
            'duration'=>$request->duration,
            'skill'=>$request->skill,
            'student'=>$request->student,
            'language'=>$request->language,
            'assesment'=>$request->assesment));
        $item->important_info = $request->important_info;
        $item->language_id = Session::get('language_id');

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

        $item = LanguageDetail::find($id);
        $normal_images = public_path('/normal_images');
        if(file_exists($normal_images.'/'.$item->image)){
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

    public function detail($id){


        $datas = LanguageDetail::where('language_id',$id)->orderBy('id', 'ASC')->get();
        Session::put('language_id', $id);


        return view('backend.language-detail.list', compact('datas'));    }


}
