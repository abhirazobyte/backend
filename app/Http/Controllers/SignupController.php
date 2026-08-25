<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\ContentType;
use \App\Models\Setting;
use \App\Models\HomeSlider;
use \App\Models\Page;
use \App\Models\Type;
use \App\Models\Signup;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class SignupController extends Controller
{
    //

    public function home() {

        $seo_item = Setting::first();
        $sliders = HomeSlider::where( 'status', '1' )->get();
        $affiliations = Page::where( 'post_type', 'affiliation' )->orderBy( 'id', 'ASC' )->get();
        $exams = Page::where( 'post_type', 'exam' )->orderBy( 'id', 'ASC' )->get();
        $languages = Page::where( 'post_type', 'language' )->where( 'status', '1' )->get();
        $records =  Type::with( 'content_type' )->get();

        $content_type = [];

        foreach ( $records as $type ) {
            $content_type[$type->tag] = $type->content_type;

        }

        // return $content_type['accreditation'];

        return view('frontend.home', compact( ['languages', 'sliders', 'content_type', 'seo_item', 'affiliations', 'exams'] ) );


    }


    public function getPageByType( Request $request ) {


        $item = Page::where( 'url', $request->type )->first();

        if ($item->post_type == 'language') {

            return view('frontend.language-detail', compact('item') );
        } else {
            return view('frontend.page', compact( 'item' ) );
        }

    }

   // public function signup() {
     //   return view( 'frontend/signup' );

    //}

        public function signup( Request $request ) {
        $setting = Setting::first();
            $item = Page::where('type', 10)->first();
            return view('frontend.signup', compact( 'setting', 'item' ) );
        }

 public function signupEnquiry( Request $request ) {

        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'course' => 'required',
        ] );

        $item = new Signup();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->course = $request->course;
        $item->mobile = $request->mobile;
        $item->message = $request->message;
        $item->save();

        if (!empty( $item->id ) ) {

            $to = 'fayaz@langmainternational.com';
            $subject = 'xyz';
            $from = $request->email;

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
            $message .= '<p> <strong> Eamil </strong> - '.$request->email.'</p>';
            $message .= '<p> <strong> Contact </strong> -'.$request->mobile.'</p>';
            $message .= '<p> <strong> Course </strong> -'.$request->course.'</p>';
            $message .= '<p> <strong> message </strong> -'.$request->message.'</p>';

            $message .= '</body></html>';

            if (mail( $to,  $subject, $message, $headers)) {

            return redirect()->back()->with('success', 'Thankyou for your message. It has been sent');

          }
            //return redirect()->back()->with( 'success', 'your massage was sent successfully. Thanks' );
        }
        //return redirect()->back()->with( 'success', 'your massage was sent successfully. Thanks' );

    }


}
