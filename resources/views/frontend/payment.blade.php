@extends('frontend.layouts.app')
{{-- @php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title', $item->seo_title)
@section('description', $item->seo_description)
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '') --}}

@section('slider')
<!-- Page Title
              ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>payment</h1>
        {{-- <span>Forms Widget</span> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Widgets</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">payment</li>
        </ol>
    </div>
</section>
<!-- #page-title end -->
@endsection

@section('content')
<!-- Content
		============================================= -->
<section id="content" class="mb-5">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="form-widget">
                <div class="form-result"></div>
                <div class="row shadow bg-light border">
                    <div class="col-lg-4 dark" style="background: url({{ asset('normal_images/qr-code.png') }}) center center / cover; min-height:441px;">
                                <!--<h3 class="center mt-5">Learn Foreign Languages</h3>-->
								<!--<div class="calories-wrap center w-100 px-2">-->
								<!--	<span class="text-uppercase mb-0 ls2">Best Foreign languages institute in India</span>-->
								<!--	<h2 id="calories-count" class="calories display-3 mb-2 heading-block border-bottom-0 fw-semibold font-body py-2"></h2>-->
								<!--	<span class="text-uppercase h6 ls3">Langma School of Languages</span>-->
								<!--</div>-->
								<!--<small class="center m-0 position-absolute" style="bottom: 12px;">langmainternational.com</small>-->

                    </div>
                    <div class="col-lg-8 p-5">
                        <form class="row mb-0" id="payment" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="style-msg successmsg">
                                <div class="sb-msg" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully submitted this Form.</div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label mb-3">
                                        <label for="name">Name:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label mb-3">
                                        <label for="email">Email:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" id="email" class="form-control required" placeholder="Enter your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label mb-3">
                                        <label for="phone">Phone:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="number" minlength="10" name="phone" id="phone" class="form-control required"  placeholder="Enter Your 10 Digit Contact No.">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label mb-3">
                                        <label for="amount">Amount:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="number" minlength="1" name="amount" id="amount" class="form-control required"  placeholder="AMOUNT*">
                                    </div>
                                </div>
                            </div>



                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label mb-3">
                                        <label for="description">description:</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" class="form-control required" placeholder="Your description Here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <input type="hidden" id="product_id" name="product_id" value="1" />
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-center">
                                <button type="submit" name="submit" id="rzp-button" class="btn btn-success ms-2 mt-2">Submit</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

{{-- apply-payment --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $(document).on("click", "#rzp-button", function(e) {
    let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

     e.preventDefault();

     let name = $('#name').val();
     let phone = $('#phone').val();
     let email = $('#email').val();
     let amount = $('#amount').val();
     let product_id =  $('#product_id').val();
     let description =  $('#description').val();

            // let formData = new FormData();
            // formData.append('name', name);
            // formData.append('email', email);
            // formData.append('phone', phone);
            // formData.append('description', description);
            // formData.append('amount', amount);
            // formData.append('product_id', product_id);

      if(amount!='' && phone!='' && email!='' && name!='' && description!=''){
        let options = {
         "key": "rzp_live_k1Q4kKwidvbaAl",
        //   "key": "rzp_test_yDPq1hOhTk89u8",
          "amount": (amount*100), // 2000 paise = INR 20
          "currency": "INR",
          "name": "Langma School of Languages",
          "description": description,
          "image": "https://langmainternational.com/normal_images/1589034655.png",

          "handler": function (response){

            let jqXHR =   $.ajax({
                url: "/payment",
                type: 'post',
                dataType: 'json',
                // contentType: false,
                //processData: false,
                 cache: false,
                timeout: 800000,
                // data: formData,
                data: { name: name, phone: phone, email:email, amount : amount, description:description, product_id : product_id, payment_id: response.razorpay_payment_id
                },
                statusCode: {
                    200: function() {
                            $("#show").show().fadeOut( 5000 );
                                $("#payment").trigger("reset");
                                $("#payment")[0].reset();
                                window.location = "https://langmainternational.com/thank-you";
                    }
                }
                });
                jqXHR.done(function(data, textStatus, jqXHR) {
                  //  alert(data);
                $("#show").show().fadeOut( 5000 );
                $("#payment").trigger("reset");
                window.location = "https://langmainternational.com/thank-you";
               // $("#show").show().fadeOut( 5000 );
                //     $("#payment").trigger("reset");
                    $("#payment")[0].reset();
                    window.location.href = "https://langmainternational.com/thank-you";
                });
                // jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                // alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                // });

                //   success: function (msg,data) {
                //      alert(data);
                //     $("#show").show().fadeOut( 5000 );
                //     $("#payment").trigger("reset");
                //     $("#payment")[0].reset();
                //     window.location.href = "https://langmainternational.com/thank-you";
            },
    "prefill": {
        "name": (name),
        "email": (email),
         "contact": (phone),
    },


            "theme": {
              "color": "#528FF0"
            }
          };

          var rzp1 = new Razorpay(options);
          rzp1.open();
          e.preventDefault();

    } else {
alert('Field could not be empty');
}




});
    </script>
{{-- apply-payment ends here --}}

<!-- #content end -->
@endsection

