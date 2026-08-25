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

@section('slider')
<!-- Page Title
============================================= -->
  <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" style="background: rgb(19, 23, 34); margin-top: 0px;" data-effect="fade" data-loop="true" data-speed="1000">
			<div class="swiper-container swiper-parent swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events">
				<div class="swiper-wrapper" id="swiper-wrapper-ee76ab81fb6796eb" aria-live="off" style="cursor: grab; transition-duration: 0ms;">
                    <div class="swiper-slide dark swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 1902px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);">
					</div>
					<div class="swiper-slide dark swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 1902px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1902px, 0px, 0px);">
						<div class="swiper-slide-bg" style="background-image: url({{ asset('normal_images/' . $bg_banner) }}); background-position: bottom center;"></div>
					</div>
                </div>
            </div>
		</section>
<!-- #page-title end -->
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
                   
                <h3>ABOUT TORFL</h3>
               <p><b>Langma School of Languages</b> is a reputed <b>Russian language institute</b> with 15 years of experience in <b>Russian language training.</b> We are proud to announce that we have successfully imparted Russian training to officials of the Government of India, whose credentials can be seen on our website.</p>
               <p>We are the only accredited exam center for conducting <b>TORFL (Test of Russian as Foreign Language).</b> We provide training for all levels of Russian (from beginner to advanced level). We also collaborate with Russian universities and are a preparation center for major Russian universities.</p>
               <p>Our strong suit is <b>the Guaranteed Learning Programme,</b> where we assure you knowledge of a particular level till the student is satisfied. For instance, we will provide you multiple training of A1 level until you are satisfied, before moving on to A2 level. What is more, all of this is available without paying extra fees!</p>
               <img src="https://langmainternational.com/normal_images/Russian Camp Image .png">
                </div>
                <!-- .postcontent end -->

                <!-- Sidebar
============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-twitter-feed clearfix">

                            <h4>Share this Post:</h4>
                            <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                                <li></li>
                            </ul>


                            <div>
                                <a href="https://www.facebook.com/officiallangma" target="_blank" rel="noreferrer" class="social-icon si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/official_langma" target="_blank" rel="noreferrer" class="social-icon si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/user/langmaschool" target="_blank" rel="noreferrer" class="social-icon si-borderless si-youtube">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>
                                
                                <a href="https://www.instagram.com/officiallangma" target="_blank" rel="noreferrer" class="social-icon si-borderless si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/school/langma-international" target="_blank" rel="noreferrer" class="social-icon si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="https://wa.me/919810117094?text=Hi%2C%20I%20would%20like%20to%20know%20about%20foreign%20languages%20you%20offered%20at%20your%20center" target="_blank" rel="noreferrer" class="social-icon si-whatsapp">
                                    <i class="icon-whatsapp"></i>
                                    <i class="icon-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget clearfix">

                            <h4>Enquire Now</h4>
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="posts-sm row col-mb-30" id="post-list-sidebar">
                                <div class="entry col-12">
                                    <div class="grid-inner row g-0">

                                        <form id="leads" action="/leads" method="post" enctype="multipart/form-data" style="max-width: 25rem;">
                                            @csrf
                                            <div class="style-msg successmsg">
                                                <div class="sb-msg" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully submitted this Form.</div>
                                            </div>

                                            <div class="form-group">
                                                <label for="fitness-form-name">Name:</label>
                                                <input type="text" name="name" id="name" class="form-control required" value="" placeholder="Enter your Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="fitness-form-email">Email:</label>
                                                <input type="email" name="email" id="email" class="form-control required" value="" placeholder="Enter your Email">
                                            </div>
                                            <div class="form-group">

                                                <label for="fitness-form-phone">Phone:</label>

                                                <input type="tel" name="phone" id="phone" class="form-control required" pattern="[789][0-9]{9}" placeholder="Your 10 Digit Contact Number">
                                            </div>

                                            <div class="form-group">
                                                <label for="language">Language:</label>
                                                <select name="languages" id="languages" class="form-control select-1 form-select  required" required="required" style="width:100%;">
                                                    <option value="">Select Language</option>
                                                    <option value="ARABIC">ARABIC</option>
                                                    <option value="BALKAN">BALKAN</option>
                                                    <option value="BALTIC">BALTIC</option>
                                                    <option value="BURMESE">BURMESE</option>
                                                    <option value="DARI/PASHTO">DARI/PASHTO</option>
                                                    <option value="DUTCH">DUTCH</option>
                                                    <option value="ENGLISH">ENGLISH</option>
                                                    <option value="FRENCH">FRENCH</option>
                                                    <option value="GERMAN">GERMAN</option>
                                                    <option value="HEBREW">HEBREW</option>
                                                    <option value="HINDI">HINDI</option>
                                                    <option value="INDIAN REGIONAL">INDIAN REGIONAL</option>
                                                    <option value="INDONESIAN">INDONESIAN</option>
                                                    <option value="ITALIAN">ITALIAN</option>
                                                    <option value="JAPANESE">JAPANESE</option>
                                                    <option value="KOREAN">KOREAN</option>
                                                    <option value="MANDARIN">MANDARIN</option>
                                                    <option value="MONGOLIAN">MONGOLIAN</option>
                                                    <option value="NORDIC">NORDIC</option>
                                                    <option value="PERSIAN">PERSIAN</option>
                                                    <option value="POLISH">POLISH</option>
                                                    <option value="PORTUGUESE">PORTUGUESE</option>
                                                    <option value="RUSSIAN">RUSSIAN</option>
                                                    <option value="SANSKRIT">SANSKRIT</option>
                                                    <option value="SINHALA">SINHALA</option>
                                                    <option value="SPANISH">SPANISH</option>
                                                    <option value="SWAHILI">SWAHILI</option>
                                                    <option value="THAI">THAI</option>
                                                    <option value="URDU">URDU</option>
                                                    <option value="VIETNAMESE">VIETNAMESE</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea name="message" id="message" class="form-control required" value="" placeholder="Your Message Here..."></textarea>
                                            </div>

                                            <div class="col-12 form-group">
                                                <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
                                            </div>
                                            <div class="col-8 d-flex justify-content-end align-items-center">

                                                <button type="submit" name="submit" id="leads-submit" class="btn btn-success ms-2">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
               
            </div>
   
				 
				 <div class="row mt-n1">
           <div class="col-lg-4">
               <h4><b>ABOUT TORFL</b></h4>
               <p><b>TORFL</b> is a test of Russian language for the foreign citizens and offers an opportunity to evaluate the proficiency of a learner on various parameters including grammar, lexicon, ability to read and write and the communicative skills. The TORFL test is highly recommended for students who are looking forward to studying in Russian universities. This test is also helpful for people who are seeking jobs or are planning to run a business in collaboration with Russia partners.</p>
           </div>
           <div class="col-lg-5">
               <h4><b>BENEFITS OF RUSSIAN LANGUAGE</b></h4>
               <ol>
                   <li>Spoken in 14 nations and beyond</li>
                   <li>Relish world renowned Russian culture and literature</li>
                   <li>Employment opportunities in countries like Ukraine and Poland</li>
                   <li>Undertake scientific research in Russia</li>
                   <li>Easy admissions in prominent Russian universities</li>
                   <li>Jobs in East European Export businesses</li>
                   <li>Employment in sectors like Oil Gas, Crude in India and abroad</li>
                   <li>Preferred job candidate in Russian export houses</li>
                   <li>Opens door to other Salvic languages like Polish</li>
                   <li>Opens path to career options like Translation/Linguistics</li>

               </ol>
           </div>

          </div>
            <div class="postcontent col-lg-9">
          <iframe width="100%" height="40" src="https://www.youtube.com/embed/2R11aHKhvvk" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
             <!-- .sidebar end -->
                          <div class="postcontent col-lg-9">
                <div class="section footer-stick bg-white">
					<h3 class="center">Course Details</h3>
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="2000" data-items-xs="3" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>
					</div>
				</div>
				 </div>
        </div>
    </div>
</section>

<!-- #content end -->
@endsection