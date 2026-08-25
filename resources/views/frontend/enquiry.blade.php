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
                   
                <h3>WHY LANGMA</h3>
               <p><b>Langma School of Languages</b> has experience of more than a decade in imparting knowledge of global languages. Langma is the world’s premier destination with a presence in Americas, Oceania, Europe, Asia and Africa.</p>
               <p>Post globalization, the demand for linguists has increased manifold. Even today, the increased presence of <b>MultiNational Corporations (MNCs)</b> have always ensured the high demand for speakers of global languages.</p>
               <p>Acquisition of a new language can be intimidating, but Langma International comes here to your rescue!</p>
               <p>We provide you easy-to-understand methods to learn the language as effectively as possible. Our native and experienced teachers with state-of-the-art facilities will make you skilled in major parameters of any language- <b>including Listening, Reading, Speaking</b> and <b>Writing.</b></p>
               <p>Our global environment is further emphasized by the fact that we have imparted training in languages in major parts of the world, from students to professional, teachers to government officials.</p>
               <p>Even in this unprecedented situation, we have ensured that our tradition of imparting knowledge does not stop. With our Online classes, we have pioneered new ways to secure the learning outcome of our students, even over the screen! One can access all our products in every language over <b>online classes</b> as well!</p>
               <img src="https://langmainternational.com/normal_images/leran foreign language.png">
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
                                <a href="#" target="_blank" rel="noreferrer" class="social-icon si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="https://www.instagram.com/officiallangma" target="_blank" rel="noreferrer" class="social-icon si-borderless si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/langmaschool" target="_blank" rel="noreferrer" class="social-icon si-borderless si-linkedin">
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

                                                <input type="tel" name="phone" id="phone" class="form-control required" placeholder="Your 10 Digit Contact Number">
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
           <div class=" col-lg-5">
            <h4><b>SCOPE OF FOREIGN LANGUAGES</b></h4>
               <ol>
                   <li>Work in Embassies or Consulates</li>
                   <li>Translation/Interpretation</li>
                   <li>Foreign Language Tutoring</li>
                   <li>Hospitality/ Tourism</li>
                   <li>Digital Media Management in MNCs</li>
                   <li>Content Optimization with Social Media Giants</li>
                   <li>Major demand for linguists in Cybersecurity (to curb fake news)</li>
                   <li>Software Development</li>
                   <li>Transnational Corporations</li>
                   <li>Corporate Trainers</li>
                    <li>Freelance in any of above fields</li>
                    <li>Employment in Non English speaking nations, like South Korea</li>
               </ol>
                
           </div>
           <div class="col-lg-4">
               <h4><b>GUARANTEED LEARNING PROGRAMME</b></h4>
           <p><b>Guaranteed Learning Programme (GSP)</b> is what makes us different from others!</p>
           <p>Under this, we put students’ satisfaction at the highest level. We make sure that you get full functional knowledge of your chosen level of the language, before you move on to the next level.</p>
           <p>For instance, if you are preparing for A1 level of the <b>Spanish language</b>, but you end up scoring unsatisfactorily, then you can retake the A1 session with us, without any extra cost! </p>
           </div>
          
          </div>
          
          <div class="postcontent col-lg-9">

							<div class="row">
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/Arabic Language.jpg') }}" class="img-thumbnail w-100 d-block">

								</a>
								 
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/CAMBRIDGE.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/CILS.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/CNaVT.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/ECl.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/English trinity.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/HSK ACC.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/IELTS.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/SIELE.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/Spanish language.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/TORFL.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
								<a href="#">
								  <img   src="{{ asset('normal_images/UNIR.jpg') }}" class="img-thumbnail w-100 d-block">
								</a>
							  </div>
							  
							</div>

						 
						</div>

        
				 
            <div class="postcontent col-lg-9">
                
          <iframe width="100%" height="40" src="https://www.youtube.com/embed/v5s3TOZWb_g" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              
           <div class="postcontent col-lg-9">
                <div class="section footer-stick bg-white">
					<h3 class="center">Upcoming Batches</h3>
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="2000" data-items-xs="3" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/French Landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/German landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/spanish landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/uk landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/japanese landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/French Landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/German landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/spanish landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/uk landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/japanese landing.png') }}" alt="Brands"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/French Landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/German landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/spanish landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/uk landing.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/japanese landing.png') }}" alt="Brands"></a></div>
						 
						 
					</div>
				</div>
				 </div>
				   
             <!-- .sidebar end -->
             
                          
        </div>
        
    </div>
    
</section>

<!-- #content end -->
@endsection