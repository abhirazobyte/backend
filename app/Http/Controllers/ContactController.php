<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Stevebauman\Location\Facades\Location;

class ContactController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //

        // return \App\User::with( 'comments', 'userreplies' )->with( 'profile' )->get();
        //
        // Session::put( 'employee', 'Employee session started' );

        $datas = Contact::orderBy( 'id', 'desc' )->get();
        return view( 'backend.Contact.list', compact( 'datas' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
        return view( 'backend.Contact.create' );

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $this->validate( $request, [
            'title' => 'required',
            'price' => 'required',
            'class' => 'required',
        ] );

        $item = new Contact();
        $item->title = $request->title;
        $item->price = $request->price;
        $item->class = $request->class;
        $item->save();
        // redirect
        return redirect()->back()->with( 'success', 'New Item create successfully' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Contact  $blog
    * @return \Illuminate\Http\Response
    */

    public function show( Request $request ) {
        //
        $datas = Contact::orderBy( 'id', 'desc' )->get();
        return view( 'backend.Contact', compact( 'datas' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function edit( Request $request, $id ) {
        //
        $item = Contact::find( $id );
        return view( 'backend.Contact.create', compact( 'item' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
        $this->validate( $request, [
            'title' => 'required',
            'price' => 'required',
            'class' => 'required',
        ] );

        $item = Contact::find( $id );

        $item->title = $request->title;
        $item->price = $request->price;
        $item->class = $request->class;
        $item->status = $request->status ? 1 :0;
        $item->save();

        return redirect()->back()->with( 'success', 'Item updated successfully' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //

        $item = Contact::find( $id );
        $normal_images = public_path( '/normal_images' );
        if ( file_exists( $normal_images.'/'.$item->image ) ) {
            unlink( $normal_images.'/'.$item->image );

        }
        $item->delete();
        return redirect()->back()->with( 'success', 'Item deleted successfully' );

    }

 public function thank_you_form()
    {
        $item = Page::where('type', 1)->first();
        return view('frontend.thank-you-form', compact('item'));
    }


    public function contactLead( Request $request ) {
        //   $input = $request->all();
        //   @dd($input);

            $this->validate( $request, [
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required|max:15',
                'message' => 'required'
            ] );
            // 'services' => 'required',
            // $enquiry_type = '';

            $item = new Contact();
            $item->name = $request->name;
            $item->email = $request->email;
            $item->mobile = $request->mobile;
            $item->message = $request->message;
            $item->type =  $request->type;
            $item->service = $request->service;
            $item->company = $request->company;
            $item->language = $request->language;
        
         $ipaddress = $request->ip();
         $location = Location::get($ipaddress);
        // @dd($location->ip);
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
    
         $item->save();
         return Redirect::to('/thank-you-form');

       // $to = 'info@langmainternational.com';
        // $subject = $request->services;
        // $subject = 'Contact Form Langmainternational.com';
        // $from = $request->email;

        // // To send HTML mail, the Content-type header must be set
        // $headers  = 'MIME-Version: 1.0' . '\r\n';
        // $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

        // // Create email headers
        // $headers .= 'From: '.$from.'\r\n'.
        // 'Reply-To: '.$from.'\r\n' .
        // 'X-Mailer: PHP/' . phpversion();

        // // Compose a simple HTML email message
        // $message = '<html><body>';
        // $message .= '<p> <strong> Name </strong> - '.$request->name.'</p>';
        // $message .= '<p> <strong> Email </strong> - '.$request->email.'</p>';
        // $message .= '<p> <strong> Phone </strong> -'.$request->mobile.'</p>';
        // $message .= '<p> <strong> Message </strong> - '.$request->message.'</p>';
        // $message .= '<p> <strong> Service </strong> - '.$request->services.'</p>';
        // $message .= '</body></html>';
      
        // $mail1 = mail( $to,  $subject, $message, $headers);
    	   // if ($mail1) {return Redirect::to('/thank-you-form'); } 

    
    }

    public function apiContactLead( Request $request ) {
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required|max:15',
            'message' => 'required'
        ] );

        $item = new Contact();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->mobile = $request->mobile;
        $item->message = $request->message;
        $item->type =  $request->type;
        $item->service = $request->service;
        $item->company = $request->company;
        $item->language = $request->language;
    
        $ipaddress = $request->ip();
        $location = Location::get($ipaddress);
        
        if($location) {
            $item->ip          = $location->ip;
            $item->countryName = $location->countryName;
            $item->countryCode = $location->countryCode;
            $item->regionCode  = $location->regionCode;
            $item->regionName  = $location->regionName;
            $item->cityName    = $location->cityName;
            $item->zipCode     = $location->zipCode;
            $item->isoCode     = $location->isoCode;
            $item->postalCode  = $location->postalCode;
            $item->latitude    = $location->latitude;
            $item->longitude   = $location->longitude;
            $item->metroCode   = $location->metroCode;
            $item->areaCode    = $location->areaCode;
            $item->timezone    = $location->timezone;
        }

        $item->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Lead captured successfully'
        ], 200);
    }
}
