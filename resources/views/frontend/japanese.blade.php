<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Heebo:400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="frontend/style.css" type="text/css" />
	<link rel="stylesheet" href="frontend/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="frontend/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="frontend/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="frontend/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="frontend/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="frontend/css/components/daterangepicker.css" type="text/css" />
	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="frontend/css/components/ion.rangeslider.css" type="text/css" />

	<!--  Demo cleaner Specific Stylesheet -->
	<link rel="stylesheet" href="frontend/css/colors.php?color=335EEE" type="text/css" /> <!-- Cleaner Theme Color -->
	<link rel="stylesheet" href="frontend/css/fonts.css" type="text/css" /> <!-- Cleaner Theme Font -->
	<link rel="stylesheet" href="frontend/css/cleaner.css" type="text/css" /> <!-- Cleaner Theme Custom CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>japanese</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-md border-0" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container-fluid pe-0">
					<div class="header-row">
						<!-- Logo
						============================================= -->
						<div id="logo" class="col col-sm-auto">
							<a href="#" class="standard-logo"><img src="https://langmainternational.com/normal_images/1589034655.png" alt="Canvas Logo"></a>
							<a href="#" class="retina-logo"><img src="https://langmainternational.com/normal_images/1589034655.png" alt="Canvas Logo"></a>
						</div>
						<!-- #logo end -->
						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>
					</div>
				</div>
			</div>

			<div class="header-wrap-clone"></div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element" style="background: url({{ asset('normal_images/japanese-home.jpg') }}); center center no-repeat; background-size: cover; height: 843px">
			<div class="vertical-middle">
				<div class="container">
					<div class="row py-5">
						<div class="col-xl-6 col-lg-5 col-md-2"></div>
						<div class="col-xl-6 col-lg-7 col-md-10">
							<div class="slider-title dark">
								<h1 class="">Change Your Language and You Change Your Thoughts</h1>
								<p>Langma Helps individuals in achieving proficiency goals in more than 150+ languages since 2012. To Know more about Japanese Language Enrol Now.</p>
							</div>
							<div class="card border-0 p-3 shadow-lg" style="background-color: rgba(255,255,255,0.85)">
								<div class="form-widget card-body"  data-alert-type="inline">
									<div class="form-result"></div>
									<form id="leads" method="post" class="row form-cleaning mb-0">
									     @csrf
                                            <div class="alert alert-danger text-center" id="error" style="display: none; padding: 2px 2px 2px 2px; margin-top: -27px;"></div>
									    
										<div class="form-process">
											<div class="form-cleaning-loader css3-spinner" style="position: absolute;">
												<div class="css3-spinner-double-bounce1"></div>
												<div class="css3-spinner-double-bounce2"></div>
											</div>
										</div>
										
										<div class="col-sm-12">
											<div class="input-group form-group">
												<span class="input-group-text bg-color text-white"><i class="icon-line2-map"></i></span>
												<input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
											</div>
										</div>
										
											<div class="col-sm-6">
											<div class="input-group form-group">
												<span class="input-group-text bg-color text-white"><i class="icon-line2-envelope-letter"></i></span>
												<input type="email" name="email" id="email" class="form-control required"  placeholder="Your Email">
											</div>
										</div>
										
										
											<div class="col-sm-6">
											<div class="input-group">
													<span class="input-group-text bg-color text-white"><i class="icon-line2-call-out"></i></span>
												<input type="tel" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57"  minlength="10" maxlength="10" name="phone" id="phone" class="form-control required" value="" placeholder="mobile">
											</div>
										</div>

											<div class="col-sm-12">
											<div class="input-group">
											<span class="input-group-text bg-color text-white"><i class="icon-line2-layers"></i></span>
												<textarea name="message" id="message" class="form-control required" value="" placeholder="Your Message Here..."></textarea>
											 
											</div>
										</div>

										 <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
										 <input type="hidden" id="languages" name="languages" value="japanese" />
									
										
											  <div class="col-12 d-flex justify-content-end align-items-center">
                                            <div class="spinner-border text-success" role="status" style="display: none;" id="preload">
                                              <span  class="visually-hidden">Loading...</span>
                                             </div>
                                                            <button type="submit" name="submit" id="leads-submit" class="btn btn-lg bg-color text-white fw-semibold w-100 mt-2">SUBMIT</button>
                                            </div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="svg-separator">
				<div>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2273 390" fill="#FFF"><path d="M0,211.28s373-254,1119-205,765,173,1154,0v384H0Z"/></svg>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pt-4 pb-0">

				<div class="container">
				     
					<div class="heading-block center mx-auto" style="max-width: 700px">
						<h2 class="mb-2 nott ls0">ABOUT JAPANESE LANGUAGE</h2>
						<!--<span>Objectively actualize process-centric infomediaries via ethical niche markets. Professionally plagiarize leading-edge potentialities.</span>-->
					</div>
					<div class="row justify-content-center col-mb-50">
						<div class="col-md-4">
							<div class="feature-box mx-0 fbox-small fbox-center border-0">
								<div class="fbox-img position-relative">
									<img src="demos/cleaner/images/icons/book.svg" alt="Book Icon" height="160">
								</div>
								<h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>1.</span>Learn Japanese Languages</h2>
								<p>Japanese Language is actually called 'NIHONGO'. While most people outside Japan refer to the language as 'Japanese,' native speakers actually call it 'Nihongo.' This is the same with the name 'Japan,' which is referred to as 'Nihon' or 'Nippon' in the native dialect.</p>
								<!--<a href="#" class="btn second-bg-color px-3 fw-semibold">Get Started <i class="icon-line-arrow-right"></i></a>-->
							</div>
						</div>

						<div class="col-md-4">
							<div class="feature-box mx-0 fbox-small fbox-center border-0">
								<div class="fbox-img position-relative">
									<img src="demos/cleaner/images/icons/confirm3.svg" alt="Confirm Icon" height="160">
								</div>
								<h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>2.</span>Why Choose Us?</h2>
								<p>Langma is Equipped with highly experienced expertise,and excellence is providing language classes.Providing development and culture programs to groups and individuals.Learning Japanese Language provides training through history,literature ,culture,movies and other interactive activities.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="feature-box mx-0 fbox-small fbox-center border-0">
								<div class="fbox-img position-relative">
									<img src="demos/cleaner/images/icons/enjoy.svg" alt="Relax Icon" height="160">
								</div>
								<h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>3.</span>Facts About Japanese Language</h2>
								<p>Japanese is one of the most fast-paced spoken languages in the world. Interestingly enough, Japan has a spoken syllable rate of nearly eight syllables per second. That beats out Spanish, French and Italian.Japanese is considered one of the most unique languages in the world.
The Japanese language relies on not one but three different alphabets - hiragana, katakana and kanji - which are differentiated both by their distinct appearances and by their use.
</p>
							</div>
						</div>
						
					</div>
				</div>

				<div class="clear"></div>

				<div class="center dark hero-diagonal topmargin-lg bottommargin-lg" style="padding: 170px 0">
					<div class="container" style="max-width: 760px">
						<h2 class="mb-4 h1 fw-normal">We Build People</h2>
						<span class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, mollitia, quam modi necessitatibus placeat dolores laudantium. Laudantium, eveniet, possimus.</span>
					</div>
				</div>

				<div class="clear"></div>

				<div class="container topmargin bottommargin-lg">
					<div class="heading-block center mx-auto" style="max-width: 700px">
						<h2 class="mb-2 nott ls0">TYPES OF TRAINING</h2>
						<span>Authoritatively create performance based web services for exceptional products. Dynamically disseminate customized.</span>
					</div>
					<div class="clear"></div>
					<div class="row col-mb-50 mt-3">

						<div class="col-lg-4 center order-lg-last">
							<img src="normal_images/cartoon-image.webp" alt="Cleaner" width="340">
							<!--<small class="d-block tright"><a href="http://www.freepik.com" style="color: #DDD">Designed by macrovector / Freepik</a></small>-->
						</div>

						<div class="col-lg-4 col-md-6 pb-0">

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/cleaner-man.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott fw-semibold ls0">GROUP TRAINING</h3>
									<p>Group Training is delivered to a group of 8 to 10 students per batch at Elementary Level. Whereas, Pre-Intermediate, Intermediate and Advanced classes tend to be smaller with around 6-8 students on average.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/cleaning-man.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott fw-semibold ls0">ONE-TO-ONE TRAINING</h3>
									<p>One-to-One Training is for learners who require individual tutoring.Individual training focuses on exact learning needs and can be customized as per the learner's requirement.</p>
								</div>
							</div>

							<!--<div class="feature-box fbox-plain bottommargin">-->
							<!--	<div class="fbox-icon">-->
							<!--		<img src="demos/cleaner/images/icons/guarantee.svg" alt="Cleaner Icon">-->
							<!--	</div>-->
							<!--	<div class="fbox-content">-->
							<!--		<h3 class="nott fw-semibold ls0">Satisfaction Guarantee</h3>-->
							<!--		<p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>-->
							<!--	</div>-->
							<!--</div>-->

						</div>

						<div class="col-lg-4 col-md-6">

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/product.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott fw-semibold ls0">PRIVATE GROUP TRAINING</h3>
									<p>Private group training is available for a group of a certain level who wish to study together privately.</p>
								</div>
							</div>

							<div class="feature-box fbox-plain bottommargin">
								<div class="fbox-icon">
									<img src="demos/cleaner/images/icons/time.svg" alt="Cleaner Icon">
								</div>
								<div class="fbox-content">
									<h3 class="nott fw-semibold ls0">CORPORATE TRAINING</h3>
									<p>Corporate Training is delivered in companies and corporate houses with specific business needs, schedule, sector and budget for the employees of their organization.</p>
								</div>
							</div>

							<!--<div class="feature-box fbox-plain bottommargin">-->
							<!--	<div class="fbox-icon">-->
							<!--		<img src="demos/cleaner/images/icons/price.svg" alt="Cleaner Icon">-->
							<!--	</div>-->
							<!--	<div class="fbox-content">-->
							<!--		<h3 class="nott fw-semibold ls0">Flat Rate Price</h3>-->
							<!--		<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>-->
							<!--	</div>-->
							<!--</div>-->

						</div>

					</div>
				</div>

				<div class="clear"></div>

				<div id="section-price" class="section mb-0 topmargin-lg" style="padding-bottom: 100px; overflow: visible">
					<div class="svg-separator top">
						<div>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2273 390" fill="#F9F9F9"><path d="M0,211.28s373-254,1119-205,765,173,1154,0v384H0Z"/></svg>
						</div>
					</div>
				 
				</div>

				<div class="section m-0 dark" style="background: linear-gradient(rgba(51,94,238,0.8), rgba(51,94,238,0.8)), url('demos/cleaner/images/section2.jpg') center center no-repeat; background-size: cover; padding: 80px 0 230px">
					<div class="container">
						<div class="heading-block center mx-auto" style="max-width: 700px">
							<h5 class="fw-normal text-uppercase ls2">High Rated Cleaners</h5>
							<h2 class="mb-2 nott ls0">820+ Over Cleaners Completed their Jobs.</h2>
							<span>Authoritatively create performance based web services for exceptional products. Dynamically disseminate customized.</span>
						</div>
					</div>
				</div>

				<div class="negetive-margin">
					<div class="container">
						<div id="cleaner-carousel" class="owl-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="4">
							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/1.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Penny Tool</h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>

							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/2.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Sue Shei</h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>

							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/3.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Benjamin Evalent </h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>

							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/4.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Malcolm Function</h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>

							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/5.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Alan Fresco </h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>

							<div class="card border-0 shadow-sm">
								<img src="demos/cleaner/images/cleaners/6.jpg" class="card-img-top" alt="...">
								<div class="card-body second-bg-color rounded-bottom p-4">
									<h4 class="card-title">Justin Case</h4>
									<p class="card-text">Some quick example text to build on the card title.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent">
					<div class="container">
						<div class="row justify-content-between align-items-center">

							<div class="col-md-5 center">
								<img src="demos/cleaner/images/icons/reviews.svg" alt="Review Image" width="400">
								<div class="row mt-5">
									<div class="col-6">
										<h3 class="color fw-normal h1 mb-3">1100+</h3>
										<h5 class="text-muted fw-normal">Jobs Done, consectetur adipisicing elit. Eveniet, sunt.</h5>
									</div>

									<div class="col-6">
										<h3 class="color fw-normal h1 mb-3">4.9/5.0</h3>
										<h5 class="text-muted fw-normal">Average review across all of our company Service lines.</h5>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-7">
								<div class="heading-block">
									<h2 class="mb-2 nott ls0">More than <span>12000+</span> Customers Reviews</h2>
									<span>Objectively actualize process-centric infomediaries via ethical niche markets. Professionally plagiarize leading-edge potentialities.</span>
								</div>

								<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="10" data-nav="false" data-pagi="true" data-items="1" data-autoplay="5000" data-loop="true">
									<div class="oc-item">
										<div class="testimonial bg-transparent p-4 shadow-sm">
											<div class="testi-image">
												<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<h4 class="fw-normal">Synergistically pontificate scalable manufactured products after worldwide customer service. Phosfluorescently harness open-source relationships rather than competitive internal or "organic" sources. Globally.</h4>
												<div class="testi-meta"> John Doe<span>XYZ Inc.</span></div>
											</div>
										</div>
									</div>
									<div class="oc-item">
										<div class="testimonial bg-transparent p-4 shadow-sm">
											<div class="testi-image">
												<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
											</div>
											<div class="testi-content">
												<h4 class="fw-normal">Progressively scale front-end models whereas standardized technology. Collaboratively disintermediate user friendly communities vis-a-vis cross-platform results. Completely productize client-centric benefits vis-a-vis optimal.</h4>
												<div class="testi-meta"> Bailey Wonger<span>Apple Inc.</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section center mb-0" style="padding: 120px 0; background-color: rgba(51,94,238,0.08);">
					<div class="container" style="max-width: 700px">
						<img src="demos/cleaner/images/icons/apply.svg" alt="Apply Icon" height="200" class="mb-4">
						<h2 style="font-size: 38px">Try out now &amp; Apply for Cleaner</h2>
						<p class="mb-5" style="font-size: 1.125rem;">Dynamically predominate B2B resources whereas interdependent strategic theme areas. Completely underwhelm out-of-the-box functionalities for worldwide e-tailers. Dynamically restore fully researched architectures.</p>
						<!--<a href="#" class="btn btn-lg bg-color text-white fw-semibold px-4">Get Started</a>-->
						<!--<a href="#" class="btn btn-lg bg-white fw-semibold color px-4 ms-2">Contact us</a>-->
					</div>
				</div>

			</div>

		</section>
		<!-- #content end -->

		<div class="position-relative"  style="background-color: rgba(51,94,238,0.08);">
			<svg class="svg-separator" viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
				<path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="#335EEE"></path>
			</svg>
		</div>

	 

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle bg-color h-bg-dark"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="frontend/js/jquery.js"></script>
	<script src="frontend/js/plugins.min.js"></script>

	<!-- DatePicker JS -->
	<script src="frontend/js/components/moment.js"></script>
	<script src="frontend/js/components/daterangepicker.js"></script>

	<!-- Range Slider Plugin -->
	<script src="frontend/js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="frontend/js/functions.js"></script>

	<script>

		jQuery(document).ready(function() {

			jQuery('.cleaning-date').daterangepicker({
				"buttonClasses": "button button-rounded button-mini nott ls0 fw-semibold",
				"applyClass": "button-color m-0 ms-1",
				"cancelClass": "bg-danger m-0 text-light",
				singleDatePicker: true,
				startDate: moment().startOf('hour'),
				minDate: moment().startOf('date'),
				timePicker: true,
				timePickerSeconds: false,
				locale: {
					format: 'DD/MM/YYYY h:mm a',
				},
				timePickerIncrement: 10
			});

			jQuery('.cleaning-date').val('Select Date & Time');

			jQuery('.form-cleaning').on( 'formSubmitSuccess', function(){
				jQuery('.cleaning-date').val('Select Date & Time');
			});

			// Calculator
			var pricingAREA = 0,
				pricingROOMS = 0,
				pricingBATHROOMS = 0,
				pricingLIVINGROOMS = 0,
				pricingOTHERS = 0,
				elementAREA = $(".clean-area"),
				elementROOMS = $(".clean-rooms"),
				elementBATHROOMS = $(".clean-bathrooms"),
				elementLIVINGROOMS = $(".clean-livingrooms"),
				elementOTHERS = $("input[name='clean-form-others[]']"),
				elementPRICE = $("#clean-form-price");

			elementAREA.ionRangeSlider({
				min: 0,
				max: 5000,
				from: 0,
				step: 10,
				max_postfix: "sqft.",
				onStart: function(data){
					pricingAREA = data.from;
				}
			});

			elementAREA.on( 'change', function(){
				pricingAREA = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingROOMS = data.from;
				}
			});

			elementROOMS.on( 'onStart change', function(){
				pricingROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementBATHROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingBATHROOMS = data.from;
				}
			});

			elementBATHROOMS.on( 'onStart change', function(){
				pricingBATHROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementLIVINGROOMS.ionRangeSlider({
				min: 0,
				max: 5,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingLIVINGROOMS = data.from;
				}
			});

			elementLIVINGROOMS.on( 'onStart change', function(){
				pricingLIVINGROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementOTHERS.change(function(){
				var pricingOTHERS = 0;
				elementOTHERS.each(function(){
					if($(this).is(':checked')){
						pricingOTHERS += parseFloat($(this).attr('data-price'));
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					} else {
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					}
				});
			});

			calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );

			function calculatePrice( area, rooms, bathrooms, livingrooms, extra ) {
				var TotalPriceValue = ( Number(area) * .2 ) + ( Number(rooms) * 4 ) + ( Number(bathrooms) * 3 ) + ( Number(livingrooms) * 5 ) + ( Number(extra) );
				jQuery('.total-price').html( '$'+TotalPriceValue );
				elementPRICE.val( TotalPriceValue ).change();
			}

		});

	</script>
	<script>
	$(document).ready(function(){
        // save add form starts... #leads-submi
        $(document).on("click", "#leads-submit", function(e) {
            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            //alert('success');
            let name = $("#name").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let languages = $("#languages").val();
            let message = $("#message").val();
            let currenturl = $("#currenturl").val();
            //let _token = $("input[name = _token]").val();

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('languages', languages);
            formData.append('message', message);
            formData.append('currenturl', currenturl);
            //formData.append('token', token);
         
        //       $("#name").on("click",function(){
        //         $("#name").css("border","green solid 1px"); 
        //      });
        //           $("#email").on("click",function(){
        //         $("#email").css("border","green solid 1px"); 
        //      });
        //       $("#phone").on("click",function(){
        //         $("#phone").css("border","green solid 1px"); 
        //      });
        //       $("#message").on("click",function(){
        //         $("#message").css("border","green solid 1px"); 
        //      });


        //      if(!name){
        //          $("#name").css("border","red solid 1px"); 
                  
        //      }else{
        //       $("#name").css("border","green solid 1px"); 
        //      }
        //   if(!email){
        //          $("#email").css("border","red solid 1px"); 
        //      }else{
        //       $("#email").css("border","green solid 1px"); 
        //      }
            
        //      if(!phone){
        //          $("#phone").css("border","red solid 1px"); 
        //      }else{
        //       $("#phone").css("border","green solid 1px"); 
        //      }
        //      if(!message){
        //          $("#message").css("border","red solid 1px"); 
        //      }else{
        //       $("#message").css("border","green solid 1px"); 
        //      }
            
  
            if (name == '' || email == '' || phone == '' || phone.length < 10 || phone.length > 10 || languages == '' || message == '' || currenturl == '') {
               
                //  $("#name").css("border","red solid 1px");
                //  $("#email").css("border","red solid 1px");
              //$("#phone").css("border","red solid 1px");
                //  $("#message").css("border","red solid 1px");
                
                 
                 
                   // alert("Fill All The Form with 10 digit contact number");
                   $("#error").show();
                  $("#error").css("font-size","10px");
                $("#error").text("Fill All The Form Inputs with 10 digit contact number");
            } else {
                
                
                let jqXHR = $.ajax({
                    url: "/leads",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    //data: { somefield: country, _token: '' },
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                    beforeSend: function( xhr ) {
                        $("#error").hide();
                        $("#preload").show();
                        $("#leads-submit").hide();
                   }
                });

                jqXHR.done(function(data, textStatus, jqXHR) {
                    $("#show").show();//.fadeOut( 5000 )
                    $("#leads").trigger("reset");
                     $("#preload").hide();
                    window.location = "https://langmainternational.com/thank-you";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                    alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                });
            }

        });

    });
    // save add form ends here..... </script>

</body>
</html>