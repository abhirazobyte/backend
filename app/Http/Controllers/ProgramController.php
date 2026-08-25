<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class ProgramController extends Controller
{

    public function programLead(Request $request){

        //return $request->all();

         $this->validate($request, [
             'name' 	=> 'required',
             'company' 	=> 'required',
             'email' 	=> 'required',
             'mobile' 	=> 'required',
             'language' => 'required',
         ]);


         $item = new Program();
         $item->name = $request->name;
         $item->email = $request->email;
         $item->mobile = $request->mobile;
         $item->company = $request->company;
         $item->language = $request->language;
         $item->currenturl = $request->currenturl;
         $item->message = 'New Program Enquiry';
         $item->type = 1;
         $item->save();


        // $to = 'info@langmainternational.com';
        // $subject = 'Program Query on Langmainternational';
        // $from = $request->email;

        // To send HTML mail, the Content-type header must be set
        // $headers  = 'MIME-Version: 1.0' . "\r\n";
        // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        // $headers .= 'From: '.$from."\r\n".
        //     'Reply-To: '.$from."\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // Compose a simple HTML email message
        // $message = '<html><body>';
        // $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
        // $message .= '<p> <strong> Eamil </strong> - '.$request->email.'</p>';
        // $message .= '<p> <strong> Phone </strong> -'.$request->mobile.'</p>';
        // $message .= '<p> <strong> Company </strong> - '.$request->company.'</p>';
        // $message .= '<p> <strong> Language for </strong> - '.$request->language.'</p>';
        // $message .= '</body></html>';
        // mail($to, $subject, $message, $headers);

        // return redirect()->back()->with('success', 'Your request was sent successfully. Thanks');
         return redirect('/thank-you');
    }


    public function applySubmit(request $request){
        // $input = $request->all();
        // @dd($input);
        // @die();
       
         $this->validate($request,[
            "name" => "required",
            "email" => "required",
            'mobile' => 'required|unique:program_query',
            "language" => "required",
            "message" => "required",
            ]);
            
            // 
function getIPAddress() {
    //whether ip is from the share internet
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    //whether ip is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
     }
//whether ip is from the remote address
    else{
             $ip = $_SERVER['REMOTE_ADDR'];
     }
     return $ip;
}
$ip = getIPAddress();
// echo 'User Real IP Address - '.$ip;
            
           $ipaddress = $request->ip();
           
           $location = Location::get($ip);
        //   @dd($location->ip);
        //   @die();

          	 $item = new Program();
	         $item->name = $request->name;
	         $item->email = $request->email;
	         $item->mobile = $request->mobile;
	         $item->language = $request->language;
             $item->message = $request->message;
             $item->currenturl = $request->currenturl;
             
             $item->ip          = $location->ip;
             $item->countryName = $location->countryName;
             $item->countryCode = $location->countryCode;
             $item->regionCode = $location->regionCode;
             $item->regionName = $location->regionName;
             $item->cityName = $location->cityName;
             $item->zipCode = $location->zipCode;
             $item->isoCode = $location->isoCode;
             $item->postalCode = $location->postalCode;
             $item->metroCode = $location->metroCode;
             $item->latitude = $location->latitude;
             $item->longitude = $location->longitude;
             $item->areaCode = $location->areaCode;
             $item->timezone = $location->timezone;
	         $item->type = 2;
	       // dd($item);
	       //  @die();
	         $save = $item->save();
	         if($save){
	         return redirect('/thank-you');
	         }
	         else{
	         "fill form again";
	         }
	        
	             
	         
	         
	       //   $response = Http::get('https://media.smsgupshup.com/GatewayAPI/rest', [
        //          'method' => 'OPT_IN',
        //          'format' => 'json',
        //          'userid' => 2000201119,
        //          'password' => 'Uc4dB9c8l',
        //          'phone_number' => $request->mobile,
        //          'v' => 1.1,
        //          'auth_scheme' => 'plain',
        //          'channel' => 'WHATSAPP',
        //      ]);
              // return($response->collect());


	       // $to = 'info@langmainternational.com';// // 'langmaschool@gmail.com' 
	       // $subject = 'New Apply Request From Langma International';
	       // $from = $request->email;

	       // // To send HTML mail, the Content-type header must be set
	       // $headers  = 'MIME-Version: 1.0' . "\r\n";
	       // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	       // // Create email headers
	       // $headers .= 'From: '.$from."\r\n".
	       //     'Reply-To: '.$from."\r\n" .
	       //     'X-Mailer: PHP/' . phpversion();

	       // // Compose a simple HTML email message
	       // $message = '<html><body>';
	       // $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
	       // $message .= '<p> <strong> Eamil </strong> - '.$request->email.'</p>';
	       // $message .= '<p> <strong> Phone </strong> -'.$request->mobile.'</p>';
	       // $message .= '<p> <strong> Language for </strong> - '.$request->language.'</p>';
	       // $message .= '</body></html>';
	        
	       //$mail1 = mail( $to,  $subject, $message, $headers);
	    
	        
	        
	         //   user side mail
        //     $to1 = $request->email;//'info@langmainternational.com';
	       // $subject1 = 'Thank You for Applying From Langma International';
	       // $from1 = 'info@langmainternational.com';

	        // To send HTML mail, the Content-type header must be set
	       // $headers1  = 'MIME-Version: 1.0' . "\r\n";
	       // $headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	        // Create email headers
	       // $headers1 .= 'From: '.$from1."\r\n".
	       //     'Reply-To: '.$from1."\r\n" .
	       //     'X-Mailer: PHP/' . phpversion();

	        // Compose a simple HTML email message
	       // $message1 = '<html><body>';
	       // $message1 .= '<center><img src="https://langmainternational.com/normal_images/1589034655.png"</center>';
	       // $message1 .= '<h1> <center><strong>THANK YOU OUR TEAM WILL GET BACK TO YOU SOON! </strong></center></h1>';
	       // $message1 .= '<h1> <center><strong>Learn Foreign Languages</strong></center></h1>';
	       // $message1 .= '<h1> <center><strong> For More Information Visit Our Website</strong></center></h1>';
	       // $message1 .= '<center><strong><a href="Tel:+91-9810338044">+91-9810338044</a></strong></center>';
	       // $message1 .= '<h3><strong><center><a href="https://langmainternational.com/apply-now">langmainternational.com</a></center></strong></h3>';
	       // $message1 .= '</body></html>';
	        
	       
	       // $mail2 = mail( $to1,  $subject1, $message1, $headers1);
	       // if ($mail1 && $mail2) {
        //     return Redirect::to('/thank-you');
        //   } 
          
	   }
  
     public function leads(Request $request)
    {
        //  $input = $request->all();
        //  @dd($input);
        
                 $this->validate($request,[
                        "name" => "required",
                        "email" => "required",
                        "mobile" => "required",
                        "language" => "required",
                        "message" => "required",
                  ]);
                  
                  function getIPAddress() {
                    //whether ip is from the share internet
                     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
                                $ip = $_SERVER['HTTP_CLIENT_IP'];
                        }
                    //whether ip is from the proxy
                    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                     }
                //whether ip is from the remote address
                    else{
                             $ip = $_SERVER['REMOTE_ADDR'];
                     }
                     return $ip;
                }
                $ip = getIPAddress();
        
          	 $item = new Program();
	         $item->name = $request->name;
	         $item->email = $request->email;
	         $item->mobile = $request->mobile;
	         $item->language = $request->language;
             $item->message = $request->message;
             $item->currenturl = $request->currenturl;
             
             $ipaddress = $request->ip();
             $location = Location::get($ip);
            //  $location = Location::get($ipaddress);
             $item->ip          = $location->ip;
             $item->countryName = $location->countryName;
             $item->countryCode = $location->countryCode;
             $item->regionCode = $location->regionCode;
             $item->regionName = $location->regionName;
             $item->cityName = $location->cityName;
             $item->zipCode = $location->zipCode;
             $item->isoCode = $location->isoCode;
             $item->postalCode = $location->postalCode;
             $item->latitude = $location->latitude;
             $item->longitude = $location->longitude;
             $item->metroCode = $location->metroCode;
             $item->areaCode = $location->areaCode;
             $item->timezone = $location->timezone;
	         $item->type = 2;
	         $item->save();
             return redirect('/thank-you');

	       //   $response = Http::get('https://media.smsgupshup.com/GatewayAPI/rest', [
        //          'method' => 'OPT_IN',
        //          'format' => 'json',
        //          'userid' => 2000201119,
        //          'password' => 'Uc4dB9c8l',
        //          'phone_number' => $request->mobile,
        //          'v' => 1.1,
        //          'auth_scheme' => 'plain',
        //          'channel' => 'WHATSAPP',
        //      ]);


        //       $to = 'info@langmainternational.com';
	       // $subject = 'New Apply Request From Langma International';
	       // $from = $request->email;

	       // // To send HTML mail, the Content-type header must be set
	       // $headers  = 'MIME-Version: 1.0' . "\r\n";
	       // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	       // // Create email headers
	       // $headers .= 'From: '.$from."\r\n".
	       //     'Reply-To: '.$from."\r\n" .
	       //     'X-Mailer: PHP/' . phpversion();

	       // // Compose a simple HTML email message
	       // $message = '<html><body>';
	       // $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
	       // $message .= '<p> <strong> Eamil </strong> - '.$request->email.'</p>';
	       // $message .= '<p> <strong> Phone </strong> -'.$request->mobile.'</p>';
	       // $message .= '<p> <strong> Language for </strong> - '.$request->language.'</p>';
	       // $message .= '</body></html>';

        //   if (mail( $to,  $subject, $message, $headers)) {

        //     return redirect()->back()->with('success', 'Thankyou for your message. It has been sent');

        //   } else {

        //     return redirect()->back()->withErrors(["Mail could not send please contact administrator"])->withInput();
        //   }



    }



}
