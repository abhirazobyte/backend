@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Localization Services, Localisation Solutions Provider Company in Delhi India')
@section('description', 'We offer localization services, localization company, localisation services, localization agency, content localization services, localization solutions, professional localization service in Delhi, India.')
@section('keywords', 'Localization Services, localization solutions, content localization services, professional localization service, localization agency')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
<style>
    p{
        text-align: justify;
    }
    b{
        color:grey;
    }
</style>

                <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/Localization.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">localization</h5> 
            </div>
        </div>
@endsection

@section('content')
    <!-- Content
                          ============================================= -->
                          <section id="content">
                            <div class="content-wrap">
                                <div class="container clearfix">

                                    <div class="row gutter-40 col-mb-80">
                                        <!-- Post Content
                                        ============================================= -->
                                        <div class="postcontent col-lg-9">
                                            <div class="text-uppercase fw-bold py-2" style="font-size:17px; color:#4a97a2;">LOCALIZATION</div>
                                            <p class="MsoNormal page_speed_1136949250" style="font-size:15px;">Globalization has changed the way of doing business! People from different parts of the world have started doing their investments in different parts of the world. Are you looking to expand your business overseas? Do you want to make your website, brochure, or marketing content available for business people all around the world? Then, translation is a must for your websites & other marketing materials based on the language of the country that you want to target. Here comes the importance of hiring localization services.</p>
                                            <p class="MsoNormal page_speed_1136949250" style="font-size:15px;">Instead of putting your time and effort into translating the content, take help from a professional localization service-providing company. If you require localization services for your business, then contact us at Langma International with your requirements.</p>
                                            <p class="MsoNormal page_speed_1136949250" style="font-size:15px;">Our team of experienced and professionally skilled experts understands the scope of the localization work and will do the work at their best. Our talented localizers will analyze your content and find out the ways how to make your content tailored to your international audience in mind.</p>
                                         <p class="MsoNormal page_speed_1136949250" style="font-size:15px;">With a team of professional speakers and a facility equipped with all the latest techniques, we extend our localization services for websites, apps, video games, and other digital platforms.</p>

                                         <div class="text-uppercase  mb-2 py-2" style="font-size:17px; color: #4a97a2;"> <span style="border-left: double;"><b class="ms-2">WE OFFER LOCALIZATION SERVICES FOR:</b></span></div>

                                         <ol style="font-size:15px;"><li><span class="page_speed_124702413 page_speed_271613688">Websites</span></li>
                                            <li><span class="page_speed_124702413 page_speed_271613688">Softwares</span></li>
                                            <li><span class="page_speed_124702413 page_speed_271613688">Online Applications</span></li>
                                            <li><span class="page_speed_124702413 page_speed_271613688">e-Learning Software</span></li>
                                            <li><span class="page_speed_124702413 page_speed_271613688">Multimedia Content</span></li>
                                            <li><span class="page_speed_124702413 page_speed_271613688">Training and Study Materials</span></li><li>
                                                <span class="page_speed_124702413 page_speed_271613688">Subtitles and Graphics</span></li></ol>
                                                <p style="font-size:15px;"><b>&nbsp;</b><span class="page_speed_665685252" style="color: rgb(68, 68, 68);"><b>Contact our experts today!</b></span></p>
                                            <p class="MsoNormal page_speed_1136949250" style="font-size:15px;"><span class="page_speed_1907905560">Langma International can provide localization services in all major languages of the world which includes German, Arabic, Spanish, etc. Whether you are looking to enter the Chinese market or the developing market of South America or the developed markets of Europe, our team of translators is here to help you in localizing your business!</p>
                                            Are you ready to get started to hit the global market? Get your website content localized by our linguistic team and attracts the local audience! Please feel free to contact us at any time with your request!</p>
                                           </div>
                                        <!-- .postcontent end -->

                                        <!-- Sidebar
                                        ============================================= -->
                                              <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div style="background:#fff; box-shadow: 0px 0px 2px 0px grey; border-radius: 10px;">
                            <div class="col-12 col-sm-6 col-lg-12 p-4">
                                <div style="font-size:12px; letter-spacing:1px;"><b>ENQUIRE NOW</b></div>

                                @if (\Session::has('success'))
                                <div class="alert alert-success">
                                
                                    <ul>
                                        <li style="font-size:14px;">{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                                <div class="">
                                   <form action="{{url('contact-lead')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fitness-form-name" class="fw-bold py-2">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Full Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-email" class="fw-bold py-2">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control"  placeholder="Enter your Email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-phone" class="fw-bold py-2">Phone:</label>
                                            <input type="tel" name="mobile" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" class="form-control" placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no." required>
                                        </div>


                                        <div class="form-group">
                                            <label for="message" class="fw-bold py-2">Message:</label>
                                            <textarea name="message" class="form-control" placeholder="Your Message Here..." style="height:90px;" required></textarea>
                                        </div>
                                        
                                           <input type="hidden"  name="service" value="localization">
                                           <input type="hidden"  name="type"    value="service">
                                        <div class="text-center py-2 mt-2">
                                              <input class="btn text-light" type="submit" style="background: #296166; font-weight: 600;">
                                        </div>

                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>






                    </div>

                </div>
                                        <!-- .sidebar end -->
                                    </div>

                                </div>
                            </div>
                        </section>

    <!-- #content end -->
@endsection
