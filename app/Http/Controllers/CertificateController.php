<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Models\Certificate;
use App\Models\Certificate;
use App\Models\ContentType;
use App\Models\HomeSlider;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller {
    
     public function index()
    {
        $datas = Certificate::orderBy('id', 'desc')->get();
        return view('backend.leads.certificate', compact('datas'));
    }

    public function home() {

        $seo_item =  Setting::first();
        $sliders = HomeSlider::where('status', '1')->get();
        $affiliations = Page::where('post_type', 'affiliation')->orderBy( 'id', 'ASC' )->get();
        $exams = Page::where('post_type', 'exam')->orderBy( 'id', 'ASC' )->get();
        $languages = Page::where('post_type', 'language')->where( 'status', '1' )->get();
        $records = Type::with('content_type')->get();

        $content_type = [];

        foreach ( $records as $type ) {
            $content_type[$type->tag] = $type->content_type;

        }

        // return $content_type['accreditation'];

        return view('frontend.home', compact( ['languages', 'sliders', 'content_type', 'seo_item', 'affiliations', 'exams'] ) );

    }


    public function getPageByType( Request $request ) {


        $item = Page::where( 'url', $request->type )->first();

        if ( $item->post_type == 'language' ) {

            return view('frontend.language-detail', compact( 'item' ) );
        } else {
            return view('frontend.page', compact( 'item' ) );
        }

    }

    public function certificate() {
        return view('frontend.certificate');

    }

 public function certificateEnquiry( Request $request ) {
       //@dd($request);
       //dd($request->level);

        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'city' => 'required',
            'trainer_name' => 'required',
            'course' => 'required',
            'level' => 'required',
            'marks_obtained' => 'required',
            'select_batch' => 'required',
            'select_batch_to' => 'required'
        ] );

        
        $item = new Certificate();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->nationality = $request->country;
        $item->phone = $request->mobile;
        $item->city = $request->city;
        $item->trainer_name = $request->trainer_name;
        $item->select_courses = $request->course;
        $item->select_levels =json_encode($request->level);
        $item->marks = $request->marks_obtained;
        $item->select_batch = $request->select_batch;
        $item->select_batch_to= $request->select_batch_to;
        //  $item->select_batch = Carbon::parse($request->select_batch);
        // $item->select_batch_to= Carbon::parse($request->select_batch_to);
        $item->save();
         

        if (!empty( $item->id ) ) {

            $to = 'certificateslangma@gmail.com'; // langmaschool@gmail.com
            $subject = 'certificates';
            $from = $request->email;

           // To send HTML mail, the Content-type header must be set
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	        // Create email headers
	        $headers .= 'From: '.$from."\r\n".
	            'Reply-To: '.$from."\r\n" .
	            'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            // $download = "https://langmainternational.com/uploads/".$filename;
            $message = '<html><body>';
            $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
            $message .= '<p> <strong> Eamil </strong> - '.$request->email.'</p>';
            $message .= '<p> <strong> Phone </strong> -'.$request->mobile.'</p>';
            $message .= '<p> <strong> Nationality </strong> -'.$request->country.'</p>';
            $message .= '<p> <strong> Trainer-Name </strong> -'.$request->trainer_name.'</p>';
            $message .= '<p> <strong> Select-Courses </strong> -'.$request->course.'</p>';
            $message .= '<p> <strong> Select-Levels </strong> -'.json_encode($request->level).'</p>';
            $message .= '<p> <strong> Start-Date </strong> -'.$request->select_batch.'</p>';
            $message .= '<p> <strong> Drop-Date </strong> -'.$request->select_batch_to.'</p>';
            $message .= '<p> <strong> Marks </strong> -'.$request->marks_obtained.'</p>';
            // $message .= '<p><a href="'.$download.'" target="_blank">Download</a></p>';
            $message .= '</body></html>';

            if (mail( $to,  $subject, $message, $headers)) {
            
            return redirect('https://langmainternational.com/thank-you-certi');

          }
            //return redirect()->back()->with( 'success', 'your massage was sent successfully. Thanks' );
        }
        //return redirect()->back()->with( 'success', 'your massage was sent successfully. Thanks' );

    }


}
