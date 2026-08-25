@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $seo_item->logo);
use Illuminate\Support\Str;
@endphp
@section('title', $seo_item->seo_title)
@section('description', $seo_item->seo_description)
@section('keywords', $seo_item->seo_keyword)
@section('url', url()->current())
@section('type', 'website')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')

@section('slider')
    @include('frontend.layouts.slider')
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
            <!--<div class="container clearfix">-->
     <!--           <div class="si-sticky">-->
     <!--               <a href="tel:+91-9810338044" class="social-icon si-colored si-dwolla" data-animate="bounceInLeft" data-delay="600">-->
					<!--		<i class="icon-call"></i>-->
					<!--		<i class="icon-call"></i>-->
					<!--	</a>-->
					<!--		<a href="mailto:info@langmainternational.com" class="social-icon si-colored si-email3" data-animate="bounceInLeft" data-delay="700">-->
					<!--		<i class="icon-email3"></i>-->
					<!--		<i class="icon-email3"></i>-->
					<!--	</a>-->
					<!--		<a href="https://wa.me/9810338044?text=Hi%2C%20I%20would%20like%20to%20know%20about%20foreign%20languages%20you%20offered%20at%20your%20center" class="social-icon si-colored si-whatsapp" data-animate="bounceInLeft" data-delay="400">-->
					<!--		<i class="icon-whatsapp"></i>-->
					<!--		<i class="icon-whatsapp"></i>-->
					<!--	</a>-->
					<!--	<a href="https://www.facebook.com/officiallangma" class="social-icon si-colored si-facebook" data-animate="bounceInLeft">-->
					<!--		<i class="icon-facebook"></i>-->
					<!--		<i class="icon-facebook"></i>-->
					<!--	</a>-->
					<!--	<a href="https://twitter.com/official_langma" class="social-icon si-colored si-twitter" data-animate="bounceInLeft" data-delay="100">-->
					<!--		<i class="icon-twitter"></i>-->
					<!--		<i class="icon-twitter"></i>-->
					<!--	</a>-->
					<!--	<a href="https://www.youtube.com/user/langmaschool" class="social-icon si-colored si-youtube" data-animate="bounceInLeft" data-delay="200">-->
					<!--		<i class="icon-youtube"></i>-->
					<!--		<i class="icon-youtube"></i>-->
					<!--	</a>-->
					<!--	<a href="https://www.linkedin.com/school/langma-international" class="social-icon si-colored si-linkedin" data-animate="bounceInLeft" data-delay="300">-->
					<!--		<i class="icon-linkedin"></i>-->
					<!--		<i class="icon-linkedin"></i>-->
					<!--	</a>-->
					
					<!--	<a href="https://www.instagram.com/officiallangma" class="social-icon si-colored si-instagram" data-animate="bounceInLeft" data-delay="500">-->
					<!--		<i class="icon-instagram"></i>-->
					<!--		<i class="icon-instagram"></i>-->
					<!--	</a>-->
						
						
					
					<!--</div>-->
                <div class="mx-auto center clearfix col-12 col-sx-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-6">
                    <h2 class="text-black text-rotater mb-4" data-separator="," data-rotate="fadeIn" data-speed="3500">
                        New Language,
                        <span class="t-rotate text-green d-inline-block">
                            New Vision,
                            New Culture,
                            New Careers,
                            New Connections,
                            New Experience,
                            New Thinking
                        </span>
                    </h2>
                    <form>
                        @csrf
                        <div class="input-group mx-auto">
                            <!-- class="form-control select-1 form-select  required" style="width:100%;"-->
                            <!--class="form-select required valid"-->
                            <select class="form-control select-1 form-select  required" name="country" id="country" aria-invalid="false">
                                <!--style="color:red; background-color:black; width:100%;"-->
                                <option value="">Which Language You Want To Learn?</option>
                                @foreach ($languages as $language)
                                    <option value="{{ url('/' . $language->url) }}">{{ $language->title }}</option>
                                @endforeach
                            </select>
                            <!--<button class="btn btn-success" name="country-submit" id="country-submit" type="submit">Select Language</button>-->
                        </div>
                    </form>

                </div>
                

  
                 <div class="container clearfix">
                <div class="row align-items-center gutter-40 col-mb-50 ">
                    <div class="col-md-12" style="text-align: justify;">
                        <div class="line" style="margin: 2rem 0;"></div>
                        <div class="center">
                            <h2>Welcome to Langma School of Languages!</h2>
                        </div>
                        <span>The acquisition of new language at <b>Langma</b> would offer you a deeper insight to the language; give
                            you a chance of immersing and experiencing a new culture. <b>The Institution</b> offers tailored
                            programme (intensive or extensive) to cater the need of students or corporate houses. <b>Langma
                                School of Languages</b> has been a pioneer in the field of imparting knowledge of foreign
                            languages since its inception in <b>2007</b> and we are the only institution to offer courses in
                            above <b>50+ International</b> and <b>Regional languages.</b> Some of our remarkable
                            initiatives like <b>distance learning programmes</b> and <b>languages for academics</b>
                            distinguish us from others.
                        </span>
                        
                    </div>
                </div>

            

            </div>
            
                <div class="line"></div>
 <!--               <div class="section footer-stick" style="background-color: #fff; padding: 0px 0;">-->

	<!--			  <h3 class="center text-uppercase">Choose the Right Foreign Langauge</h3>-->
	<!--	<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="1000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="7" autoplay="true" data-loop="true">-->
	<!--	 @foreach ($languages as $language)-->
	<!--	<div class="oc-item text-center">-->
	<!--	   <a href="{{ url('/' . $language->url) }}"><img src="{{ asset('normal_images/' . $language->image) }}" alt="{{ $language->title }}" class="mt-5"></a> -->
 <!--        <p class="text-primary fw-normal  text-wrap text-break fw-bold">-->
 <!--         <span>-->
 <!--        <a href="{{ url('/' . $language->url) }}" style="font-size:13px;">{{ $language->title }}</a></span>-->
 <!--         </p>-->
	<!--	</div>-->
	<!--@endforeach		-->
	<!--	</div>-->
 <!--    	</div>-->
     <div class="container-fluid clearfix">
                    <div class="heading-block center mb-0">
                        <h2>Choose the Right Foreign Langauge</h2>
                    </div>
                      
             <div class="row content-wrap ">
                @foreach ($languages as $language)
                <div class="img-fluid col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 col-xxl-1 mx-auto">
                  <a target="_blank" href="{{ url('/' . $language->url) }}">
                    <img srcset="{{ asset('normal_images/' . $language->image) }}"  src="{{ asset('normal_images/' . $language->image) }}" loading="lazy" alt="{{ $language->title }}" class="img-thumbnail w-100 h-auto mw-100 rounded-5 border border-1 border-warning" width="127" height="84">
                  </a>
                  <p class="text-primary fw-normal center text-wrap text-break fw-bold"><span>
                    <a target="_blank" href="{{ url('/' . $language->url) }}" style="font-size:13px;">{{ $language->title }}</a>
                    </span></p>
                </div>
                @endforeach
              </div>
                </div>
           
                <div class="line"></div>

   <div class="container clearfix">
       
                <div class="mx-auto center clearfix" style="max-width: 900px; text-align: justify;">
                    {{-- <img class="bottommargin" src="{{ asset('normal_images/' . $seo_item->logo) }}" alt="website logo"> --}}
                    {{-- <h1>Welcome! To <span>Langma International</span>.</h1> --}}
                    <h2><span> LANGMA</span> has been providing individuals, businesses, NGO’s and Government Agencies
                        <span>achieving their language proficiency goals</span> in more than&nbsp; <span>50+
                            languages Since 2012.</span>
                    </h2>
                </div>

                <div class="line"></div>







                <div class="row grid-container has-init-isotope" data-layout="masonry"
                    style="overflow: visible; position: relative; height: 529px;">

                    <div class="col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
                        <div class="flip-card text-center">
                            <div class="flip-card-front dark"
                                style="background-image: url('normal_images/personalization.webp')">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0 text-center">
                                        <div class="card-body">
                                            <i class="icon-line2-check h1"></i>
                                            <h3 class="card-title">Personalization</h3>
                                            <p class="card-text fw-normal">The language courses in Langma International can be
                                                personalized based on the requirement of the candidate.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back bg-danger no-after">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">We provide customized programs based on the purpose of study
                                        and convenient time period or duration (academic, examination, business or
                                        employment) if it is an employed individual, we further customize the program according to the
                                        industry, including vocabulary from the respective field.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 0px;">
                        <div class="flip-card text-center top-to-bottom">
                            <div class="flip-card-front dark"
                                style="background-image: url('normal_images/flexible.webp');">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0 text-center">
                                        <div class="card-body">
                                            <i class="icon-line2-check h1"></i>
                                            <h3 class="card-title">Flexible</h3>
                                            <p class="card-text fw-normal">Candidate is able to select the timings and mode
                                                for the language classes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back"
                                style="background-image: url('normal_images/flexible.webp');">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">Online and offline modes are available for all languages, and
                                        for students connecting via internet, the suitable time slot can be offered that
                                        aligns with the country’s timings. Also the option of taking individual or group
                                        classes is made available for candidates.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4" style="position: absolute; left: 66.6667%; top: 0px;">
                        <div class="flip-card text-center">
                            <div class="flip-card-front dark" data-height-xl="505"
                                style="background-image: url(&quot;normal_images/study-material.webp&quot;); height: 505px;">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0 text-center">
                                        <div class="card-body">
                                            <i class="icon-line2-check h1"></i>
                                            <h3 class="card-title">50+ Certification Diploma Programs</h3>
                                            <p class="card-text fw-normal">Langma provides its learners with Certified Training Programs. We have over 50+ Diploma Courses to choose from. Spearhead your career with fast-paced learning and growth-oriented approach.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="505"
                                style="background-image: url(&quot;normal_images/study-material.webp&quot;); height: 505px;">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">
                                        Escalate your career prospects with Langma's Certified Diploma Courses and gear up your professional skills by assimilating assets and growth-oriented approach. Level-up your skills by enrolling in our Certified Diploma Courses and choose from 50+ options.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4" style="position: absolute; left: 0%; top: 304px;">
                        <div class="flip-card text-center top-to-bottom">
                            <div class="flip-card-front bg-info dark" data-height-xl="200" style="height: 200px;">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0 text-center">
                                        <div class="card-body">
                                            <i class="icon-line2-check h1"></i>
                                            <h3 class="card-title">Placement Opportunity</h3>
                                            <p class="card-text fw-normal">Upon completion of the foreign language courses,
                                                students will be offered placements or internships</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="200"
                                style="background-image: url(&quot;normal_images/placement.webp&quot;); height: 200px;">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">within our network of partners who hire candidates for
                                        linguistic skills. Our clients are from different industries and students can select
                                        according to their preferences.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 304px;">
                        <div class="flip-card top-to-bottom">
                            <div class="flip-card-front dark" data-height-xl="200"
                                style="background-image: url(&quot;normal_images/with-industry-mentor.webp&quot;); height: 200px;">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h3 class="card-title mb-0">1:1 sessions with Industry Mentors</h3>
                                            <span class="fst-italic">Providing Live one - to - one Sessions with Personalized Training</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="200"
                                style="background-image: url(&quot;normal_images/with-industry-mentor.webp&quot;); height: 200px;">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">
                                        Langma provides integrated customised curriculum with personalized training sessions and individual attention. Fostering a growth-oriented and accessible environemnt to boost critical thinking.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
                
                 <div class="row clearfix align-items-stretch bottommargin-lg">

					<div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #515875;">
						<i class="i-plain i-xlarge mx-auto icon-flag"></i>
						<div class="counter counter-lined"><span data-from="0" data-to="50" data-refresh-interval="30" data-speed="2000"></span>+</div>
						<h5>LANGUAGES</h5>
					</div>

					<div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #576F9E;">
						<i class="i-plain i-xlarge mx-auto icon-chalkboard-teacher"></i>
						<div class="counter counter-lined"><span data-from="0" data-to="300" data-refresh-interval="100" data-speed="2500"></span>+</div>
						<h5>TRAINERS</h5>
					</div>

					<div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #6697B9;">
						<i class="i-plain i-xlarge mx-auto icon-suitcase"></i>
						<div class="counter counter-lined"><span data-from="0" data-to="50" data-refresh-interval="25" data-speed="3500"></span>K+</div>
						<h5>JOBS</h5>
					</div>

					<div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #88C3D8;">
						<i class="i-plain i-xlarge mx-auto icon-users group"></i>
						<div class="counter counter-lined"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="2700"></span>K+</div>
						<h5>STUDENTS TAUGHT</h5>
					</div>

				</div>

            </div>

            <div class="clear"></div>

            <div class="section mt-0 border-0 mb-0">
            <!--    <div class="container clearfix">-->
            <!--        <div class="heading-block center mb-0">-->
            <!--            <h2>Explore Our Top 31 Languages</h2>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
             <!--<div class="row content-wrap ">-->
             <!--   @foreach ($languages as $language)-->
             <!--   <div class="img-fluid col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 col-xxl-1 mx-auto">-->
             <!--     <a href="{{ url('/' . $language->url) }}">-->
             <!--       <img srcset="{{ asset('normal_images/' . $language->image) }}"  src="{{ asset('normal_images/' . $language->image) }}" loading="lazy" alt="{{ $language->title }}" class="img-thumbnail w-100 h-auto mw-100" width="127" height="84">-->
             <!--     </a>-->
             <!--     <p class="text-primary fw-normal center text-wrap text-break"><span>-->
             <!--       <a href="{{ url('/' . $language->url) }}">{{ $language->title }}</a>-->
             <!--       </span></p>-->
             <!--   </div>-->
             <!--   @endforeach-->
             <!-- </div>-->

<!--<div class="container clearfix">-->

<!--                    <div class="heading-block center">-->
<!--                        <h3>30 EXCELLENT CAREER<span>OPTIONS FOR FOREIGN</span> LANGUAGE LEARNERS</h3>-->
<!--                    </div>-->

<!--                    <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">-->

<!--                        <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                                
<!--                                    <i class="icon-globe" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">TOURISM</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
                        
<!--                         <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                             
<!--                                <i class="icon-graduation-cap" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">EDUCATION</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
                        
<!--                         <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                                
<!--                                    <i class="icon-hospital" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">HEALTH CARE</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                         <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                                
<!--                                    <i class="icon-users" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">BUSINESS & ADMIN</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                         <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                                
<!--                                   <i class="icon-building" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">POLITICS & GOVERNMENT</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                         <div class="portfolio-item text-center">-->
<!--                            <div class="portfolio-image">-->
                                
<!--                                     <i class="icon-building" style="font-size:100px;color:#0d6efd"></i>-->
<!--                            </div>-->
<!--                            <div class="portfolio-desc">-->
<!--                                <h3><a href="portfolio-single.html">MNCs</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->

                       

<!--                    </div>-->
<!--                </div>-->
                
            <div class="container clearfix">
                <div class="row align-items-center gutter-40 col-mb-50">
                    <div class="col-md-12" style="text-align: justify;">
                        <div class="heading-block center mt-5">
                            <h2>We bridge the communication barrier!</h2>
                        </div>
                        <span>Our dedicated team of Linguists help you to attain a global reach, who can offer quality
                            services for <b>Transcription, Translation, Voice-over, Subtitling, Interpretation, Content
                                Moderator, Voice Dubbing and Language training, Language Analyst, Language Auditors.</b> Our
                            competitive services are reliable and efficient which would unleash your potential for
                            international business. We work with a wide array of clients from many sectors, industries, and
                            government bodies.
                        </span>
                    </div>
                </div>

                <div class="line"></div>

            </div>

            <div class="row bottommargin-lg align-items-stretch">
                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
                    <div style="text-align: justify;">
                        <h3 class="text-uppercase" style="font-weight: 600;">Why choose Us</h3>
                        <p style="line-height: 1.8;"><b>Langma School of Languages’</b>
                            vision is to offer students, opportunities to create better lives for themselves and others
                            surrounding by introducing them to other cultures and enriching their experiences, both locally and
                            globally.
                        </p>
                        <a aria-label="click here" href="{{ url('our-vision') }}"
                            class="button button-border button-light button-rounded text-uppercase m-0">our vision
                            </a>
                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
                    <div style="text-align: justify;">
                        <h3 class="text-uppercase" style="font-weight: 600;">Our Mission</h3>
                        <p style="line-height: 1.8;">Langma School of Languages was founded with a vision of imparting
                            knowledge of languages (International & Regional). However, since its establishment, it has
                            evolved and expanded its horizons. Langma School of Languages</p>
                        <a aria-label="click here" href="{{ url('about-us') }}"
                            class="button button-border button-light button-rounded text-uppercase m-0">about us</a>
                        <i class="icon-cog bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
                    <div style="text-align: justify;">
                        <h3 class="text-uppercase" style="font-weight: 600;">What you get</h3>
                        <p style="line-height: 1.8;">
                            Langma School of languages works on various international platforms to enhance individuals’ minds and skill-set competencies. In the present time, individuals have become extremely conscious about language learning given the vast range of global opportunities.
                            </p>
                        <a aria-label="click here" href="{{ url('what-we-get') }}"
                            class="button button-border button-light button-rounded text-uppercase m-0">More Info</a>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>

                <div class="clear"></div>

            </div>

    <!-- Content
		============================================= -->
		<section id="content1">
			<div class="content-wrap" >
				<div class="container clearfix">
					<div class="form-widget">
						<div class="form-result"></div>
						<div class="row shadow bg-light border">
							<div class="col-lg-4 dark" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0,0,0,.2)), url({{ asset('normal_images/home-page.webp') }}) center center / cover; min-height: 400px;">
								 <!--<h3 class="center mt-5 text-warning" style="font-weight: bold; text-shadow: 0 0 15px black;">Learn Foreign Languages</h3>-->
							 
							</div>



							<div class="col-lg-8 p-2">
							   
								<form class="row mb-0 ms-2" id="leads" action="/leads" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="alert alert-danger text-center" id="error" style="display: none;"></div>
                                    <div class="style-msg successmsg">
                                        <div class="sb-msg text-center" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully submitted this Form.</div>
                                    </div>
                                   
                                  
                                   
									 <div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div> 
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="name">Name:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="email">Email:</label>
											</div>
											<div class="col-sm-10">
												<input type="email" name="email" id="email" class="form-control required"   placeholder="Enter your Email">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="phone">Phone:</label>
											</div>
											<div class="col-sm-10">
												<input type="number" minlength="10" maxlength="10" name="phone" id="phone" class="form-control required" placeholder="Enter Your 10 Digit Contact No.">
											</div>
										</div>
									</div>

                                    <div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="languages">Language:</label>
											</div>
											<div class="col-sm-10">
                                                <select name="languages" id="languages" class="form-control select-1 form-select  required" style="width:100%;">
                                                     
                                                    <option value="English" selected="selected">English</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="German">German</option>
                                                    <option value="French">French</option>
                                                    <option value="Spanish">Spanish</option>
                                                    <option value="Arabic">Arabic</option>
                                                    <option value="Japanese">Japanese</option>
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="Burmese">Burmese</option>
                                                    <option value="Indonesian">Indonesian</option>
                                                    <option value="Italian">Italian</option>
                                                    <option value="Mongolian">Mongolian</option>
                                                    <option value="Dutch">Dutch</option>
                                                    <option value="Portuguese">Portuguese</option>
                                                    <option value="Russian">Russian</option>
                                                    <option value="Sinhala">Sinhala</option>
                                                    <option value="Swahili">Swahili</option>
                                                    <option value="Thai">Thai</option>
                                                    <option value="Vietnamese">Vietnamese</option>
                                                    <option value="Korean">Korean</option>
                                                    <option value="Dari/Pashto">Dari/Pashto</option>
                                                    <option value="Persian">Persian</option>
                                                    <option value="IELTS">IELTS</option>
                                                    <option value="TOEFL">TOEFL</option>
                                                    <option value="HSK EXAM">HSK EXAM</option>
                                                    <option value="Indian Regional Languages">Indian Regional Languages</option>
                                                    <option value="Akan">Akan</option>
                                                    <option value="Amharic">Amharic</option>
                                                    <option value="Armenian">Armenian</option>
                                                    <option value="Assamese">Assamese</option>
                                                    <option value="Awadhi">Awadhi</option>
                                                    <option value="Azerbaijani">Azerbaijani</option>
                                                    <option value="Balochi">Balochi</option>
                                                    <option value="Belarusian">Belarusian</option>
                                                    <option value="Bengali">Bengali(Bangla)</option>
                                                    <option value="Bhojpuri">Bhojpuri</option>
                                                    <option value="Bodo">Bodo</option>
                                                    <option value="Cebuano">Cebuano(Visayan)</option>
                                                    <option value="Chewa">Chewa</option>
                                                    <option value="Chhattisgarhi">Chhattisgarhi</option>
                                                    <option value="Chittagonian">Chittagonian</option>
                                                    <option value="Czech">Czech</option>
                                                    <option value="Deccan">Deccan</option>
                                                    <option value="Dhundhari">Dhundhari</option>
                                                    <option value="Dogri">Dogri</option>
                                                    <option value="Eastern Min">Eastern Min(inc.Fuzhou dialect)</option>
                                                    <option value="English">English</option>
                                                    <option value="Fula">Fula</option>
                                                    <option value="Gan">Gan</option>
                                                    <option value="Greek">Greek</option>
                                                    <option value="Gujarati">Gujarati</option>
                                                    <option value="Haitian Creole">Haitian Creole</option>
                                                    <option value="Hakka">Hakka</option>
                                                    <option value="Haryanvi">Haryanvi</option>
                                                    <option value="Hausa">Hausa</option>
                                                    <option value="Hiligaynon/Ilonggo">Hiligaynon/Ilonggo(Visayan)</option>
                                                    <option value="Hmong">Hmong</option>
                                                    <option value="Hungarian">Hungarian</option>
                                                    <option value="Igbo">Igbo</option>
                                                    <option value="Ilocano">Ilocano</option>
                                                    <option value="Javanese">Javanese</option>
                                                    <option value="Jin">Jin</option>
                                                    <option value="Kannada">Kannada</option>
                                                    <option value="Kashmiri">Kashmiri</option>
                                                    <option value="Kazakh">Kazakh</option>
                                                    <option value="Khmer">Khmer</option>
                                                    <option value="Kinyarwanda">Kinyarwanda</option>
                                                    <option value="Kirundi">Kirundi</option>
                                                    <option value="Konkani">Konkani</option>
                                                    <option value="Kurdish">Kurdish</option>
                                                    <option value="Madurese">Madurese</option>
                                                    <option value="Magahi">Magahi</option>
                                                    <option value="Maithili">Maithili</option>
                                                    <option value="Malagasy">Malagasy</option>
                                                    <option value="Malay">Malay(inc.Indonesian and Malaysian)</option>
                                                    <option value="Malayalam">Malayalam</option>
                                                    <option value="Mandarin">Mandarin(entire branch)</option>
                                                    <option value="Marathi">Marathi</option>
                                                    <option value="Marwari">Marwari</option>
                                                    <option value="Meitei">Meitei (Manipuri)</option>
                                                    <option value="Mossi">Mossi</option>
                                                    <option value="Nepali">Nepali</option>
                                                    <option value="Northern Min">Northern Min</option>
                                                    <option value="Odia">Odia(Oriya)</option>
                                                    <option value="Oromo">Oromo</option>
                                                    <option value="Polish">Polish</option>
                                                    <option value="Punjabi">Punjabi</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Romanian">Romanian</option>
                                                    <option value="Sanskrit">Sanskrit</option>
                                                    <option value="Santali">Santali</option>
                                                    <option value="Saraiki">Saraiki</option>
                                                    <option value="Serbo-Croatian">Serbo-Croatian</option>
                                                    <option value="Shona">Shona</option>
                                                    <option value="Sindhi">Sindhi</option>
                                                    <option value="Somali">Somali</option>
                                                    <option value="Southern Min">Southern Min</option>
                                                    <option value="Sundanese">Sundanese</option>
                                                    <option value="Swedish">Swedish</option>
                                                    <option value="Sylheti">Sylheti</option>
                                                    <option value="Tagalog">Tagalog(Filipino)</option>
                                                    <option value="Tamil">Tamil</option>
                                                    <option value="Telugu">Telugu</option>
                                                    <option value="Turkish">Turkish</option>
                                                    <option value="Turkmen">Turkmen</option>
                                                    <option value="Urdu">Urdu</option>
                                                    <option value="Ukrainian">Ukrainian</option>
                                                    <option value="Uyghur">Uyghur</option>
                                                    <option value="Uzbek">Uzbek</option>
                                                    <option value="Wu">Wu(inc.Shanghainese)</option>
                                                    <option value="Xhosa">Xhosa</option>
                                                    <option value="Xiang">Xiang</option>
                                                    <option value="Yoruba">Yoruba</option>
                                                    <option value="Yue">Yue(inc.Cantonese)</option>
                                                    <option value="Zhuang">Zhuang</option>
                                                    <option value="Zulu">Zulu</option>
                                                    <option value="Other Languages">Other Languages</option>
                                                </select>
                                            </div>
										</div>
									</div>

                                    <div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="message">Message:</label>
											</div>
											<div class="col-sm-10">
												<textarea name="message" id="message" class="form-control required" placeholder="Your Message Here..."></textarea>
											</div>
										</div>
									</div>

									<div class="col-12 form-group">
										<input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
									</div>
									<div class="col-12 d-flex justify-content-end align-items-center">
									    <div class="spinner-border text-success" role="status" style="display: none;" id="preload">
                                <span  class="visually-hidden">Loading...</span>
                                </div>
										<button type="submit" name="submit" id="leads-submit" class="btn btn-success ms-2">Submit</button>
										
									</div>
								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- #content end -->

            <!--<div class="container clearfix">-->

            <!--    <div class="row col-mb-50">-->
            <!--        <div class="col-lg-8 p-5">-->
            <!--            <div class="fancy-title title-border">-->
            <!--                <h4>Recent Posts</h4>-->
            <!--            </div>-->

            <!--            <div class="row posts-md col-mb-30">-->
            <!--                <div class="entry col-md-6">-->
            <!--                    <div class="grid-inner">-->
            <!--                        <div class="entry-image">-->
            <!--                            <a href="#"><img src="normal_images/scope-of-global-languages.webp" loading="lazy" width="400"-->
            <!--                                    height="300" alt="scope-of-global-languages"></a>-->
            <!--                        </div>-->
            <!--                        <div class="entry-title title-sm nott">-->
            <!--                            <h3><a href="blog/scope-of-foreign-languages">Scope of Global Languages</a></h3>-->
            <!--                        </div>-->
            <!--                        <div class="entry-meta">-->
            <!--                            <ul>-->
            <!--                                <li><i class="icon-calendar3"></i> 10th Sep 2021</li>-->

            <!--                            </ul>-->
            <!--                        </div>-->
            <!--                        <div class="entry-content">-->
            <!--                            <p>Globalisation has brought a tectonic shift in communication flow and the way the-->
            <!--                                world transacts.</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->

            <!--                <div class="entry col-md-6">-->
            <!--                    <div class="grid-inner">-->
            <!--                        <div class="entry-image">-->
            <!--                            <a href="#"><img src="normal_images/why-learn-japanese.webp" loading="lazy" width="400"-->
            <!--                                    height="300" alt="why-learn-japanese"></a>-->
            <!--                        </div>-->
            <!--                        <div class="entry-title title-sm nott">-->
            <!--                            <h3><a href="blog/why-learn-japanese:-part-1">Why Learn japanese?</a></h3>-->
            <!--                        </div>-->
            <!--                        <div class="entry-meta">-->
            <!--                            <ul>-->
            <!--                                <li><i class="icon-calendar3"></i> 07th Sep 2021</li>-->

            <!--                            </ul>-->
            <!--                        </div>-->
            <!--                        <div class="entry-content">-->
            <!--                            <p>Have you decided to add skill on your CV?</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div class="col-lg-4 p-5">-->
            <!--            <div class="fancy-title title-border">-->
            <!--                <h4>Client Testimonials</h4>-->
            <!--            </div>-->

            <!--            <div class="fslider testimonial p-0 border-0 shadow-none" data-animation="slide"-->
            <!--                data-arrows="false">-->
            <!--                <div class="flexslider">-->
            <!--                    <div class="slider-wrap">-->
            <!--                        <div class="slide">-->

            <!--                            <div class="testi-content">-->
            <!--                                <p>It has been a great pleasure studying in Langma as I learnt a lot from-->
            <!--                                    everyone and the staff is fantastic in terms of its friendliness and-->
            <!--                                    approach in dealing with problems. I am extremely happy and satisfied with-->
            <!--                                    the study environment. The teachers are extremely knowledgeable in their-->
            <!--                                    subject matter and I got tonnes of support and guidance from them in every-->
            <!--                                    step of the way. I truly recommend Langma to my friends and peers.</p>-->
            <!--                                <div class="testi-meta">-->
            <!--                                    Ravish Rawat-->

            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="slide">-->

            <!--                            <div class="testi-content">-->
            <!--                                <p>Langma school of languages is the best language school for learning German.-->
            <!--                                    Mr. Tarun Dhall is the best Trainer because He teaches very good. Thank you-->
            <!--                                    Tarun and Institute.</p>-->
            <!--                                <div class="testi-meta">-->
            <!--                                    Nayala Saddi-->

            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="slide">-->

            <!--                            <div class="testi-content">-->
            <!--                                <p>I would like to Thank you Langma for the wonderful training. I have completed-->
            <!--                                    b2 and now i am working with IBM.-->
            <!--                                    It was a great experience.</p>-->
            <!--                                <div class="testi-meta">-->
            <!--                                    Harshita Bounthiyal-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="card topmargin overflow-hidden">-->
            <!--                <div class="card-body">-->
            <!--                    <h4>Opening Hours</h4>-->
                                <!--<p>We offer intensive and extensive courses of 150+ Languages.</p>-->
            <!--                    <ul class="iconlist mb-0">-->
            <!--                        <li><i class="icon-time color"></i> <strong>Monday-Saturday: </strong> &nbsp;10AM to 7PM-->
            <!--                        </li>-->

            <!--                        <li><i class="icon-time text-danger"></i> <strong>Sunday:</strong> 	&nbsp;Closed</li>-->
            <!--                    </ul>-->

            <!--                    <i class="icon-time bgicon"></i>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

 <div class="heading-block center mb-0">
                <h4>langma is associated with the best</h4>
            </div>
            <!--bg-transparent-->
        <!--     <div id="oc-clients" class="section  mt-0 owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3"-->
        <!--        data-items-md="4" data-items-lg="5" data-items-xl="6">-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/university-of-delhi.webp" src="normal_images/university-of-delhi.webp"  alt="university-of-delhi" loading="lazy" style="width:56%; height:88px;"/></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/bhinneka-tunggal-ika.webp" src="normal_images/bhinneka-tunggal-ika.webp" alt="bhinneka-tunggal-ika" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/yamaha.webp" src="normal_images/yamaha.webp" alt="yamaha" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/andrade-gutierrez.webp" src="normal_images/andrade-gutierrez.webp" alt="andrade-gutierrez" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/samsung.webp" src="normal_images/samsung.webp" alt="samsung" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/accenture.webp" src="normal_images/accenture.webp" alt="accenture" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/dubai.webp" src="normal_images/dubai.webp" alt="dubai" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--        <div class="oc-item">-->
        <!--            <a href="#"><img srcset="normal_images/genpact.webp" src="normal_images/genpact.webp" alt="genpact" loading="lazy" style="width:56%; height:88px;" /></a>-->
        <!--        </div>-->
        <!--    </div>-->
            
            
        <!--</div>-->
        
        
        
        
        <div id="oc-clients" class="section mt-0 owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget owl-loaded owl-drag" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                
                
                
                
                
                
                
                
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2644px, 0px, 0px); transition: all 0.25s ease 0s; width: 6610px;"><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/yamaha.webp" src="normal_images/yamaha.webp" alt="yamaha" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right:0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/andrade-gutierrez.webp" src="normal_images/andrade-gutierrez.webp" alt="andrade-gutierrez" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/samsung.webp" src="normal_images/samsung.webp" alt="samsung" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/accenture.webp" src="normal_images/accenture.webp" alt="accenture" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/dubai.webp" src="normal_images/dubai.webp" alt="dubai" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/genpact.webp" src="normal_images/genpact.webp" alt="genpact" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/university-of-delhi.webp" src="normal_images/university-of-delhi.webp" alt="university-of-delhi" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item" style="width: 250.5px; margin-right: 80px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/bhinneka-tunggal-ika.webp" src="normal_images/bhinneka-tunggal-ika.webp" alt="bhinneka-tunggal-ika" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/yamaha.webp" src="normal_images/yamaha.webp" alt="yamaha" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/andrade-gutierrez.webp" src="normal_images/andrade-gutierrez.webp" alt="andrade-gutierrez" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/samsung.webp" src="normal_images/samsung.webp" alt="samsung" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/accenture.webp" src="normal_images/accenture.webp" alt="accenture" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/dubai.webp" src="normal_images/dubai.webp" alt="dubai" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item active" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/genpact.webp" src="normal_images/genpact.webp" alt="genpact" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/university-of-delhi.webp" src="normal_images/university-of-delhi.webp" alt="university-of-delhi" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/bhinneka-tunggal-ika.webp" src="normal_images/bhinneka-tunggal-ika.webp" alt="bhinneka-tunggal-ika" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/yamaha.webp" src="normal_images/yamaha.webp" alt="yamaha" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/andrade-gutierrez.webp" src="normal_images/andrade-gutierrez.webp" alt="andrade-gutierrez" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/samsung.webp" src="normal_images/samsung.webp" alt="samsung" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div><div class="owl-item cloned" style="width: 250.5px; margin-right: 0px;"><div class="oc-item">
                    <a href="#"><img srcset="normal_images/accenture.webp" src="normal_images/accenture.webp" alt="accenture" loading="lazy" style="width:56%; height:88px;"></a>
                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                
                
                
    </section>
    
    
    
				
		
		
                
@endsection
