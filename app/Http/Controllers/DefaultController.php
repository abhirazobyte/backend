<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CareerLead;
use App\Models\Contact;
use App\Models\ContentType;
use App\Models\Gallery;
use App\Models\Lead;
use App\Models\HomeSlider;
use App\Models\Language;
use App\Models\LanguageDetail;
use App\Models\Page;
use App\Models\Program;
use App\Models\Setting;
use App\Models\Type;
use App\Models\Thesunvillage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Exception;

class DefaultController extends Controller
{
    public function BlogList(){
        try {
            $data = Blog::where('status', 1)->get(['title', 'image', 'slug']);
            return response()->json([
                'status'=>true,
                'message'=>'total record '. count($data),
                'data'=>$data
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage()
            ], 500);
        }
    }

    public function home()
    {
        Session::flush();

        $seo_item = Setting::first();
        $sliders = HomeSlider::where('status', '1')->get();
        $affiliations = Page::where('post_type', 'affiliation')->orderBy('id', 'ASC')->get();
        $exams = Page::where('post_type', 'exam')->orderBy('id', 'ASC')->get();
        //$languages = Page::where('post_type', 'language')->where('status', '1')->get();
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();

        $records = Type::with('content_type')
        ->get();

        $content_type = [];

        foreach ($records as $type) {
            $content_type[$type->tag] = $type->content_type;
        }

        return view('frontend.home', compact(['languages', 'sliders', 'content_type', 'seo_item', 'affiliations', 'exams']));
    }


      
     public function dubai()
    {
        
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.foreign-language', compact(['languages']));
    }

    public function dhabi()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.abu-dhabi', compact(['languages']));
    }

    public function sharjah()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.sharjah', compact(['languages']));
    }

  public function ajman()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.ajman', compact(['languages']));
    }

  public function quwain()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.quwain', compact(['languages']));
    }

  public function fujairah()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.fujairah', compact(['languages']));
    }
  public function lanka()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.sri-lanka', compact(['languages']));
    }
  public function nepal()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.nepal', compact(['languages']));
    }
 public function bangladesh()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.bangladesh', compact(['languages']));
    }


 public function australia()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.australia', compact(['languages']));
    }

 public function singapore()
    {
        $languages = Page::where('post_type', 'language')
        ->where('status', '1')
        ->orderBy(('title'))
        //->orderBy(Str::of('title')->append())
        ->get();
        return view('frontend.uae.singapore', compact(['languages']));
    }
    
 


    public function gallery()
    {
        $galleries = Gallery::get();
        $data_filters = Gallery::select('data_filter')->distinct()->get();
        return view('frontend.gallery', compact(['galleries','data_filters']));
    }

    public function image()
    {
        $images = Gallery::where('type', 'image')->get();
        return view('frontend.image', compact(['images']));
    }

    public function video()
    {
        $videoes = Gallery::where('type', 'video')->get();
        return view('frontend.video', compact('videoes'));
    }

    public function about()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.about', compact('item'));
    }



    public function about_us()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.about-us', compact('item'));
    }

    public function our_vision()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.our-vision', compact('item'));
    }


    public function our_staff()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.our-staff', compact('item'));
    }
    
    public function refund_policy()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.refund-policy', compact('item'));
    }

    public function privacy_policy()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.privacy-policy', compact('item'));
    }
       public function disclaimer()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.disclaimer', compact('item'));
    }
    


    public function terms_and_conditions()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.terms-and-conditions', compact('item'));
    }

    public function faqs()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.faqs', compact('item'));
    }


    public function transcription()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.transcription', compact('item'));
    }
    
    public function whatweget()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.what-we-get', compact('item'));
    }

    public function translation()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.translation', compact('item'));
    }
    
    public function translationService()
    {
        return view('frontend.translationService');
    }

    public function localization()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.localization', compact('item'));
    }

    public function multilanguage()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.multilanguage', compact('item'));
    }

    public function proofreading()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.proofreading', compact('item'));
    }

    public function voiceover()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.voiceover', compact('item'));
    }
    
      public function content_modulation()
     {
         $item = Page::where('type', 1)->first();
         return view('frontend.content-modulation', compact('item'));
     }
    
     public function content_writing()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.content-writing', compact('item'));
    }
    
     public function dubbing()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.dubbing', compact('item'));
    }
    
     public function subtitle()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.subtitle', compact('item'));
    }

    public function multicultural_marketing()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.multicultural-marketing', compact('item'));
    }

    public function service()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.service', compact('item'));
    }

    public function program()
    {
        $item = Page::where('type', 3)->first();
        return view('frontend.program', compact('item'));
    }

    public function career()
    {
        $item = Page::where('type', 2)->first();
        return view('frontend.career', compact('item'));
    }

    public function blog()
    {
        //$items = \App\Blog::get();
        $items = Blog::orderBy('id', 'DESC')->get();
        return view('frontend.blog', compact('items'));
    }

    //public function show() {
    //    $items = Blog::orderBy('id', 'DESC')->get();
    //   return view( 'frontend/blog', compact( 'items' ) );
    //}

    public function blogDetail($slug)
    {
        $item = Blog::where('slug', $slug)->first();
        return view('frontend.blog-detail', compact('item'));
    }

    public function blogSearch(Request $request)
    {
      
         $items = Blog::where('title', 'LIKE', "%$request->title%")->get();
         return view('frontend.blog-list', compact('items'));
    }

    public function contact(Request $request)
    {
        $setting = Setting::first();
        $item = Page::where('type', 8)->first();
        return view('frontend.contact', compact('setting', 'item'));
    }

    public function contact_course(Request $request)
    {
        $setting = Setting::first();
        $item = Page::where('type', 8)->first();
        return view('frontend.contact-course', compact('setting', 'item'));
    }

    public function enquiry(Request $request)
    {
        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.enquiry', compact('setting', 'item'));
    }

    public function russian(Request $request)
    {

        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.russian', compact('setting', 'item'));
    }
    
     public function english(Request $request)
    {

        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.english', compact('setting', 'item'));
    }
    
    public function japanese(Request $request)
    {

        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.japanese', compact('setting', 'item'));
    }
    
     public function german(Request $request)
    {

        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.german', compact('setting', 'item'));
    }
    
    public function spanish(Request $request)
    {

        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.spanish', compact('setting', 'item'));
    }
    

    public function french(Request $request)
    {
        $setting = Setting::first();
        $item = Page::where('type', 10)->first();
        return view('frontend.french', compact('setting', 'item'));
    }

    public function german_guide(Request $request)
    {
        $setting = Setting::first();
        $item = Page::all()->first();
        return view('frontend.german', compact('setting', 'item'));
    }
    //public function signup( Request $request ) {
    //   $setting = '\App\Setting'::first();
    //   $item = '\App\Page'::where( 'type', 10)->first();
    //   return view( 'frontend/signup', compact( 'setting', 'item' ) );
    //}

    public function getPageByType(Request $request)
    {
        // dd(($request->type));
        $item = Page::where('url', $request->type)->first();
        
        //return  $item;
       // @dd($request->type);

        if (!$item) {
            abort(404);
        }

        if ($item->post_type == 'language') {
        return view('frontend.language-detail', compact('item'));
        } else {
        return view('frontend/page', compact('item'));
        }

    }



    public function ourTestimonials()
    {
        $items = ContentType::where('status', 1)
            ->where('type', 4)
            ->get();

        return view('frontend.testimonials', compact('items'));
    }

    public function applyNow()
    {
         $item = Page::where('type', 1)->first();
        return view('frontend.apply-now', compact('item'));
        
    }

    public function thank_you()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.thank-you', compact('item'));
        
    }
    
     public function thank_you_certi()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.thank-you-certi', compact('item'));
        
    }
    
     public function thank_you_form()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.thank-you-form', compact('item'));
        
    }

    public function languageInternalPage($id, $type)
    {
        
        $item = LanguageDetail::where('id', $id)->where('status',1)->first();
        if($item==null){
            return redirect('/not-found');
        }
        // $item = \App\LanguageDetail::where( 'slug', $id )->first();
        $internals = LanguageDetail::where('id', '!=', $item->id)->where('status',1)->where('language_id', $item->language_id)->get();
        return view('frontend.language-internal', compact('item', 'internals'));
    }

    public function careerEnquiry(Request $request)
    {
        //dd($request->all());
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'languages' => 'required',
            'resume'   => 'mimes:doc,pdf,docx'
        ]);
        // $test = $request->file('resume');
       $resumenew =  $newresumename = time().'-'.$request->name.'.'.$request->resume->extension();
        $resume = $request->resume->move(public_path('resume'),$newresumename);
        //dd($newresumename);
        

        $item = new CareerLead();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->zip = $request->zip;
        $item->languages = $request->languages;
        $item->country = $request->country;
        $item->resume = $resumenew;
        $item->message = $request->message;
        $item->save();
      
        if (!empty($item->id)) {
             $to = 'info@langmainternational.com';// langmaschool@gmail.com
            $subject = 'New career mail langmainternational';
            $from =  $request->email;

           // To send HTML mail, the Content-type header must be set
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	        // Create email headers
	        $headers .= 'From: '.$from."\r\n".
	            'Reply-To: '.$from."\r\n" .
	            'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
            $message .= '<p> <strong> Mobile </strong> - '.$request->phone.'</p>';
            $message .= '<p> <strong> Email </strong> -'.$request->email.'</p>';
            $message .= '<p> <strong> Resume </strong> -'."<a href='https://langmainternational.com/public/resume/$resumenew'>".$resumenew.'</a></p>';
            $message .= '<p> <strong> Message </strong> -'.$request->message.'</p>';
            $message .= '</body></html>';

            if (mail( $to,  $subject, $message, $headers)) {
                
                 //return view('/thank-you', compact('item'));
                return redirect('/thank-you');
                //return Redirect::to('/thank-you');
                //return view('frontend.thank-you');
                //header("Location: https://langmainternational.com/thank-you", true, 301);
               // exit();
          }

            
            
        }
        // mail end
        
    }

    public function careerEnquiryLead()
    {
        $datas = CareerLead::whereNull('type')->orderBy('id', 'DESC')->get();

        return view('backend.leads.career', compact('datas'));
    }

    public function getEnquiryLead()
    {
        $datas = CareerLead::whereNotNull('type')->orderBy('id', 'DESC')->get();
        return view('backend.leads.lead', compact('datas'));
    }

    public function courseEnquiryLead()
    {
        $datas = Contact::orderBy('id', 'DESC')->get();
        return view('backend.leads.course', compact('datas'));
    }

    
    public function thesunvillageLead()
    {
        // $datas = Thesunvillage::orderBy('id', 'DESC')->get();
        return view('backend.leads.sunvillage');
        //echo("hello");
    }

    public function getProgramLead()
    {
        $datas = Program::where('type', 2)->orderBy('id', 'DESC')->take(100)->get();
        return view('backend.leads.program', compact('datas'));
    }

    public function search(Request $request)
    {

    //return $request->all();
        $q = $request->item;
        $items['list'] = Language::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('content', 'LIKE', '%' . $q . '%')
            ->get();

        $items['detail'] = LanguageDetail::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('content', 'LIKE', '%' . $q . '%')
            ->get();
        $items['blog'] = Blog::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('content', 'LIKE', '%' . $q . '%')
            ->get();

        $items['pages'] = Page::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('content', 'LIKE', '%' . $q . '%')
            ->get();
        // return $items;

        return view('frontend.search', compact('items'));
     
    }

    public function leadEnquiry(Request $request)
    {
        if (empty($request->type)) {
            $this->validate($request, [
                // 'name' => 'required',
                //'title'=> 'required',
                'email' => 'required',
                'mobile' => 'required',
                'city' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'fname' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'city' => 'required',
            ]);
        }

        // return $request->all();

        $item = new CareerLead();
        $item->name = $request->fname . ' ' . $request->lname;
        $item->email = $request->email;
        // $item->title = $request->title;
        $item->type = $request->type;
        $item->phone = $request->mobile;
        $item->city = $request->city;
        $item->country = $request->country;
        $item->message = $request->message;
        $item->save();
        $type = '';

        if (!empty($item->id)) {
            if ($request->type == 'f') {
                $type = 'Facebook';
            } elseif ($request->type == 'g') {
                $type = 'Google';
            } else {
                $type = 'Other';
            }

            $to = 'info@langmainternational.com';
            $subject = $request->subject;
            $from = $request->email;

            // To send HTML mail, the Content-type header must be set
            $headers = 'MIME-Version: 1.0' . '\r\n';
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

            // Create email headers
            $headers .= 'From: ' . $from . '\r\n' .
            'Reply-To: ' . $from . '\r\n' .
            'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            $message = '<html><body>';
            //if($type){
            //$message .= '<p> <strong> Resource </strong> - '.$type.'</p>';
            //}
            $message .= '<p> <strong> Name </strong> - ' . $request->fname . ' ' . $request->lname . '</p>';
            $message .= '<p> <strong> Email </strong> - ' . $request->email . '</p>';
            $message .= '<p> <strong> Phone </strong> -' . $request->mobile . '</p>';
            //$message .= '<p> <strong> Title </strong> -'.$request->title.'</p>';
            $message .= '<p> <strong> Zip </strong> -' . $request->city . '</p>';
            $message .= '<p> <strong> Country </strong> -' . $request->country . '</p>';
            $message .= '<p> <strong> Message </strong> -' . $request->message . '</p>';
            $message .= '</body></html>';
            //mail( $to, $subject, $message, $headers );

            if (mail($to, $subject, $message, $headers)) {
                return redirect()->back()->with('success', 'Thankyou for your message. It has been sent');
            }
        }
        //return redirect()->back()->with( 'success', 'your massage was sent successfully. Thanks' );
    }

    public function thankYou()
    {
        if (Session::get('PROGRAM_ENQUIRY_MOBILE')) {
            return view('frontend/thank-you');
        } else {
            return view('frontend/home');
        }
    }

    public function mycountry()
    {
        // $galleries = Gallery::get();
        // return view('frontend.gallery', compact(['galleries']));
        //echo('this is controller');
         return view('frontend.mycountry');
    }

    public function formcountry()
    {
        // $galleries = Gallery::get();
        // return view('frontend.gallery', compact(['galleries']));
        //echo('this is controller');
        //return view('frontend.mycountry');
        echo('hello');
      // return redirect('http://127.0.0.1:8000/mycountry');

    }



    // public function leads(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //         'languages' => 'required',
    //         'message' => 'required',
    //         'currenturl' => 'required'
    //     ]);

    //     $item = new Lead();
    //     $item->name = $request->name;
    //     $item->email = $request->email;
    //     $item->phone = $request->phone;
    //     $item->languages = $request->languages;
    //     $item->message = $request->message;
    //     $item->currenturl = $request->currenturl;
    //     $item->save();

    //     return redirect()->back()->with('success', 'your massage was sent successfully. Thanks');

    // }
    

    // public function enquireleads(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //         'message' => 'required',
    //     ]);

    //     $item = new Lead();
    //     $item->name = $request->name;
    //     $item->email = $request->email;
    //     $item->phone = $request->phone;
    //     $item->message = $request->message;
    //     $item->save();

    //     return redirect()->back()->with('success', 'your massage was sent successfully. Thanks');
    // }
    


}
