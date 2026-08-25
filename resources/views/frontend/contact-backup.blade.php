@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title', $item->seo_title)
@section('description', $item->seo_description)
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')

<style>
    label{
        font-weight: 600;
        padding: 4px;
        color: var(--bs-gray);
    }
    .nav-linkactive{
    margin-right: 35px;
    padding: 12px 0;
    color: black;
    font-size: 13px;
    font-weight: bold;
    outline: none;
    }
</style>
@section('slider')

      <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: linear-gradient(rgba(15, 66, 41, 0), rgba(15, 66, 41, 0.089)), url(https://langmainternational.com/normal_images/1647432892552.webp) center center no-repeat;  background-size: cover; background-attachment: fixed;  height: 400px;">
        <div class="container py-5">
            <!-- <h5 class="display-3  mb-4 animated slideInDown text-center" style="color: #ffff; font-family: system-ui;">Want to study Japanese in Japan? GaijinPot’s FREE Study service can help you!</h5> -->

        </div>
    </div>



@endsection

@section('content')
    <!-- Content
                                      ============================================= -->
                                      <section id="content">
                                        <div class="content-wrap">
                                            <div class="container clearfix">

                                                <div class="form-widget" style="background: #fff; box-shadow: 0px 0px 2px grey;">

                                                    <div class="form-result"></div>
                                                    <div class="row" style="padding: 29px;">
                                                        <div class="col-lg-12">
                                                             <div class="col-12">
                                                                <div class="text-uppercase  mb-2 py-4" style="font-size:17px; letter-spacing:1px; margin-top: 10px; color:#4a97a2;">
                                                                    <span style="border-left: double; text-align: start;"><b class="ms-2">ENQUIRE ABOUT OUR SERVICES</b></span>
                                                                </div>

                                                            </div>
                                                            <form class="row" id="servises" action="{{ url('/contact-lead') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                                                @csrf
                                                                 @if (\Session::has('success'))
                                                                <div class="alert alert-success">
                                                                    <ul>
                                                                        <li>{!! \Session::get('success') !!}</li>
                                                                    </ul>
                                                                </div>
                                                            @endif

                                                        
                                                                <div class="style-msg successmsg">
                                                                     <div class="sb-msg" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Thank you!</strong> You successfully submitted this Form.</div>
                                                                </div>

                                                                <div class="col-12 col-lg-6  form-group">
                                                                    <label>Full Name:</label>
                                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Full Name">
                                                                </div>

                                                                <div class="col-12 col-lg-6  form-group">
                                                                    <label>Email:</label>
                                                                    <input type="email" name="email" id="email" class="form-control"  placeholder="Enter your Email Address">
                                                                </div>

                                                                <div class="col-12 col-lg-6  form-group">
                                                                    <label>Contact:</label>
                                                                    <input type="tel" name="mobile" id="mobile" class="form-control"  placeholder="Enter your Contact No.">
                                                                </div>
                                                                <div class="col-12 col-lg-6 form-group">
                                                                    <label>City:</label>
                                                                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter your City">
                                                                </div>
                                                                <div class="col-12 col-lg-6  form-group">
                                                                    <label>Country:</label>
                                                                    <input type="text" name="country" id="country" class="form-control"  placeholder="Enter your Country">
                                                                </div>

                                                                <div class="col-12 col-lg-6 form-group">
                                                                    <label>Servises:</label>
                                                                    <select class="form-select" name="services" id="services">
                                                                        <option value="">-- SELECT SERVICES --</option>
                                                                        <option value="Translation">Translation </option>
                                                                        <option value="Interpretation">Interpretation </option>
                                                                        <option value="Voice-over">Voice-over </option>
                                                                        <option value="In-house training">In-house training </option>
                                                                        <option value="Language experts">Language experts </option>
                                                                        <option value="Home-tuition">Home-tuition </option>
                                                                        <option value="Voice Dubbing">Voice Dubbing </option>
                                                                        <option value="Subtitling">Subtitling </option>
                                                                        <option value="Content Moderator">Content Moderator </option>
                                                                        <option value="Audio Book Voices">Audio Book Voices </option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12">

                                                                    <div class="form-group">
                                                                        <label>Message:</label>
                                                                        <textarea name="message" id="message" class="form-control" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>

                                                                 <div class="col-12 d-none">
                                                                    <input type="text" id="currenturl" name="currenturl" value="{{ url()->current() }}">
                                                                </div>
                                                                <div class="col-12 text-end py-3">
                                                                    <button type="submit" name="submit" id="services-submit" class="btn btn-primary">submit</button>
                                                                </div>

                                                            </form>

                                                        {{-- <div class="col-lg-6 ps-lg-4">

                                                        </div> --}}

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>



    <!-- #content end -->


    {{-- services-submit --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // save add form starts... #homeleads-submit
            $(document).on("click", "#services-submit", function(e) {
                let token = $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                let name = $("#name").val();
                let email = $("#email").val();
                let mobile = $("#mobile").val();
                let city = $("#city").val();
                let country = $("#country").val();
                let services = $("#services").val();
                let message = $("#message").val();
                //let currenturl = $("#currenturl").val();
                //let _token = $("input[name = _token]").val();

                let formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('mobile', mobile);
                formData.append('city', city);
                formData.append('country', country);
                formData.append('services', services);
                formData.append('message', message);
                //formData.append('currenturl', currenturl);
                //formData.append('token', token);

                if (name == '' || email == '' || mobile == '' || mobile.length < 10 || mobile.length > 10 || city == '' || country == ''||  services == '' || message == '' || mobile.length != 10) {
                    alert("Fill All The Form fields with 10 Digit contact number ");//
                } else {
                    let jqXHR = $.ajax({
                        url: "/contact-lead",
                        method: "POST",
                        enctype: 'multipart/form-data',
                        data: formData,
                        dataType: 'text',
                        contentType: false,
                        processData: false,
                        cache: false,
                        timeout: 800000,
                    });

                    jqXHR.done(function(data, textStatus, jqXHR) {
                        $("#show").show().fadeOut( 5000 );
                        $("#servises").trigger("reset");
                        window.location = "https://langmainternational.com/thank-you";
                    });
                    jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                        alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                    });
                }

            });

        });
        // save add form ends here.....


    </script>
{{-- services-submit ends here --}}
@endsection
