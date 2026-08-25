@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp

@section('title','Contact Us - Langma School of Languages in Delhi India')
@section('description', 'Langma School of Languages is one of the best foreign language institute in Delhi, India. We offer 50+ foreign languages courses and classes such as German, Spanish, French, Chinese, Japanese and many more.')
@section('keywords', 'Contact, Langma School of Language in Delhi NCR, Langma International')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
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
     <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/1647432892552.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height:500px;">
            <div class="container py-5">
                 <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">Contact-us</h5> 

            </div>
        </div>
        
@endsection

@section('content')



      <section class="section">
            <div class="container-sm mt-5">
                <div class="shadow-lg mb-5 bg-body rounded-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="p-4 p-lg-3">
                                <div class="p-lg-4">    
                                    <div class="text-center">
                                        <!--<img src="https://langmainternational.com/frontend/css/langma-components/img/langma-logo.webp" alt="langma Logo" width="160" height="46">-->
                                        <h3 class="heading1" style="color: #296166; font-family: 'Poppins', sans-serif;">Let's Get Connected</h3>
                                        <p class="mt-3" style="font-family: inherit; color:#000; font-weight: 600;">If You Have Any Query, Please Contact Us</p>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <form action="{{ url('/contact-lead') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-user" style="color:#00000082;"></i></span>
                                                        <input type="text" name="name" class="form-control border-0 rounded-5" placeholder="Enter Your Name" required>
                                                    </div>

                                                </div>
                                                <div class=" mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5 ">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-envelope" style="color:#00000082;"></i></span>
                                                        <input type="email" name="email" class="form-control border-0 rounded-5" placeholder="Enter Your Email" required>
                                                    </div>

                                                </div>
                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <!--<span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-address-book"></i></span>-->
                                                        <input type="tel" class="form-control border-0 rounded-5" placeholder="Enter Your Contact No" name="mobile" id="phone" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" required>
                                                    </div>

                                                </div>

                                    
                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <!--<span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-user "></i></span>-->
                                                        <textarea class="form-control bg-light border-0" name="message" placeholder="Describe Your Requirement" id="message" required style="border-radius: 14px;"></textarea>
                                                    </div>

                                                </div>
                                             <input type="hidden" id="currenturl" name="type" value="contact"/>


                                                <button type="text " class="btn  w-100 rounded-5 text-light" style="background: #296166; font-weight: 600;">Submit</button>
                                            </form>

                                        </div>

                              
                                    </div>

                                </div>

                            </div>



                        </div>

                        <div class="col-lg-6">
                             <!--<div class="w-100  rounded-end" style="background: linear-gradient(#d6338494, rgb(220 53 69 / 85%)), url(https://langmainternational.com/frontend/css/langma-components/img/website-business-photo.webp) center center no-repeat; height: 100%;">-->
                            <div class="w-100  rounded-end">
                                <div class="text-center">
                              <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.9911491113417!2d77.2186580154943!3d28.570028493657162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25dba89c087%3A0x6b74c7356d18b11a!2sLangma%20School%20of%20Languages!5e0!3m2!1sen!2sin!4v1667464930320!5m2!1sen!2sin" frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
<!--<div class="container-xxl py-5">-->
    
    
<!--        <div class="container">-->
<!--            <div class="row g-5">-->
<!--                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">-->
<!--                    <p class="fs-5 fw-bold text-primary">Contact Us</p>-->
<!--                    <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>-->
<!--                    <p class="mb-4">-->
<!--                        Fill up the form and our team will get back to you soon.-->
<!--                        </p>-->
<!--                    <form action="{{ url('/contact-lead') }}" method="post">-->
<!--                         @csrf-->
<!--                        <div class="row g-3">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="form-floating">-->
<!--                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>-->
<!--                                    <label for="name">Your Name</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="form-floating">-->
<!--                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>-->
<!--                                    <label for="email">Your Email</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-12">-->
<!--                                <div class="form-floating">-->
                                    <!--<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Subject" required>-->
<!--                                    <input type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" name="mobile" id="phone" class="form-control required" placeholder="Mobile No" title="Plase enter your valid Mobile No">-->
                                    <!--<label for="subject">Mobile No</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-12">-->
<!--                                <div class="form-floating">-->
<!--                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px" required></textarea>-->
<!--                                    <label for="message">Message</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                             <input type="hidden" id="currenturl" name="type" value="contact"/>-->
<!--                            <div class="col-12">-->
<!--                                <button class="btn btn-primary py-3 px-4" name="submit" type="submit">Send Message</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">-->
<!--                    <div class="position-relative rounded overflow-hidden h-100">-->
<!--                            <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.9911491113417!2d77.2186580154943!3d28.570028493657162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25dba89c087%3A0x6b74c7356d18b11a!2sLangma%20School%20of%20Languages!5e0!3m2!1sen!2sin!4v1667464930320!5m2!1sen!2sin" frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
   
@endsection
