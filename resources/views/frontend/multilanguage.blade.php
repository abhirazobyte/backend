@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Multi Language Services, Multi lingual Translation, Multiple Language Support in Delhi India')
@section('description', 'Get multi language services, multi lingual translation, multiple language support from the best Multilanguage services company in Delhi, India.')
@section('keywords', 'Multi Language Services, Multi Lingual Translation, Multiple Language Support')
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
        font-size:15px;
        text-align: justify;
    }
</style>

            <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/Multilanguages.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;"> Multilanguages</h5> 

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
                                            <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">MULTILANGUAGE</div>

                                            <p  style="text-align:justify">Connect with the world using Multilanguage interpretation services!</p>
                                             <p  style="text-align:justify">At Langma International, we work with a motto that language shouldn’t be a barrier to business growth. We are proud to have a large team of qualified language professionals who are trained and excelled in providing interpreting and translating services for the medical, educational, legal, and business industries.
                                            </p>
                                                <p>Whatever your requirements are, we are here to do the best for you! At Langma International, our professionals are knowledgeable and supportive and offer timely support. What separates Langma from others is the expertise and experience of our translators and interpreters. We are having hands-on experience in all the fields which they offer. We provide Multilanguage Interpretation services that ensure 100% accuracy and a clear understanding of the topic, which results in the most accurate results and excellent customer satisfaction.</p>
                                                <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">MULTILANGUAGE SERVICES WE PROVIDE</div>
                                          <p>We provide multilingual interpretation services for contents of all formats including – Website, audio, video, images, etc. Whether you want to transcribe an audio or video in English, Spanish or Chinese, or any other language, we have a team of professional transcriptionists who are experienced and fluent in that language and will provide the most accurate transaction. It doesn’t matter whether the volume is large or small, our team will tailor the perfect transcription services to meet your needs as well as deadlines.</p>

                                          <p>
                                            We extend our services to various industries and are being recognized as a certified language interpretation service provider. With a team of highly skilled professionals who possess outstanding translating skills. Before submitting the project, we used to do stringent quality checks to ensure 100% accuracy. Also, we assure you that we will comply with the confidentiality of all your original and transcribed documents. Along with that, we will promise that we will not disclose any of your information or the document content to any of the third parties. <p>

                                            <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">WHY DO YOU NEED TO HIRE MULTILINGUAL INTERPRETATION SERVICES?</div>
                                        <p>Do you need an interpreter? Absolutely, Yes!</p>
                                        <p>Imagine a real-time example: You are going to sign a new deal and the company has been involved in lengthy conversations regarding the terms and conditions. What happens in the case, your clients don’t know your language and you don’t know about their language? In this situation what would you do?</p>
                                    <p>Yes, we can understand that these situations can be extremely stressful. But on the other hand, it can be easily prevented by arranging for a multilingual expert in advance. We provide multilingual services depending on your unique needs, ranging from medical, legal, and conferences, and more.</p>
                                 
                                    <p class="mt-1"><b>Get help from us!</b> If you are looking for professional interpretation services, reach out to us. With a team of multilingual experts, we assure you that all our work will be delivered with high quality & flawless precision!</p>
                                <p>Are you facing issues in understanding your client’s language or your client is unable to understand what you are saying? Both issues can be resolved by hiring a professional multi-linguistic expert!</P>
                               <p>If you are looking for a professional multilingual expert, then do reach out to us! We assure you that all our work will be delivered with high quality and error-free results!</p>
                            <p>You send us the documents; we’ll take care of the rest. Get a free quote today!</p>
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
                                        
                                           <input type="hidden"  name="service" value="multilanguage">
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
