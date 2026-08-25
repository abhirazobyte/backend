<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
//use Illuminate\Support\Str;
//use Illuminate\Support\Facades\Route;
//use Session;
//use Exception;
//use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;



class RazorpayPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return redirect()->back()->with('success', 'New Item create successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {

    //    $input = $request->all();
    //    @dd($input);

        $this->validate($request, [
            'name' => 'required',
            'email' =>'required',
            'phone' =>'required',
            'description' => 'required',
            'amount' =>'required'
        ]);


         $item = new Payment();
         $item->name = $request->name;
         $item->email = $request->email;
         $item->phone = $request->phone;
         $item->description = $request->description;
         $item->amount = $request->amount;
         $item->product_id = $request->product_id;
         $item->payment_id = $request->payment_id;
         //$item->user_id = 1;
         if( $item->save()){
              return redirect('thank-you');
             
    //     $to = $request->email;
    //     $subject = 'Course Payment to Langmainternational.com';
    //     $from = 'info@langmainternational.com';

    //     // To send HTML mail, the Content-type header must be set
    //     $headers  = 'MIME-Version: 1.0' . '\r\n';
    //     $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

    //     // Create email headers
    //     $headers .= 'From: '.$from.'\r\n'.
    //     'Reply-To: '.$from.'\r\n' .
    //     'X-Mailer: PHP/' . phpversion();

    //     // Compose a simple HTML email message
    //     $message = '<html><body>';
    //     $message .= '<p> <strong> Name </strong> - '.$item->name.'</p>';
    //     $message .= '<p> <strong> Email </strong> - '.$item->email.'</p>';
    //     $message .= '<p> <strong> Phone </strong> -'.$item->phone.'</p>';
    //     $message .= '<p> <strong> Message </strong> - '.$item->description.'</p>';
    //     $message .= '<p> <strong> Amount </strong> - '.$item->amount.'</p>';
    //     $message .= '<p> <strong>payment ID </strong> - '.$item->payment_id.'</p>';
    //  // $message .= '<p> <strong> Service </strong> - '.$request->services.'</p>';
    //     $message .= '</body></html>';
      
        // $mail1 = mail( $to,  $subject, $message, $headers);
    	   // if ($mail1) {
    	   //     return redirect('thank-you');
    	   //    // return Redirect::to('/thank-you'); 
    	   // }
    	   
    	 
         }

       



    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
