<!--  Demo cleaner Specific Stylesheet -->
	<link rel="stylesheet" href="frontend/css/colors.php?color=335EEE" type="text/css" /> 
	<!-- Cleaner Theme Color -->
	<link rel="stylesheet" href="frontend/css/fonts.css" type="text/css" /> 
	<!-- Cleaner Theme Font -->
	<link rel="stylesheet" href="frontend/css/cleaner.css" type="text/css" />
	<!-- Cleaner Theme Custom CSS -->
	<!-- / -->
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
						<div class="swiper-slide-bg" style="background-image: url({{ asset('normal_images/japanese-landing.webp') }}); background-position: bottom center;"></div>
						<!--. $bg_banner-->
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
                   
                <h3>ABOUT JAPANESE</h3>
               <P>Langma School of Languages is the best foreign language institute offering Japanese language programmes globally. Our institute is a pioneer of Japanese language training. Our dedicated teachers help students to prepare “Japanese Language Proficiency Test” (JLPT) and NAT Test. JLPT is conducted by the Japanese Government throughout the world on the first Sunday of July and December every year. NAT Test is conducted by Senmon Kyouiku Publishing House, Tokyo.</P>
               <P>Our native teachers are proficient to help you succeed in the exams. Our institution has successfully helped thousands of students to attain their goals. Learning the Japanese language would open doors for you to various career options throughout the world. </P>
               <P>Japanese consist of three character sets- Kanji, Hiragana and Katakana. The language also can be written in two different ways: Western-style (horizontal row) and traditional Japanese style (vertical columns). Our Japanese language programme focuses on both styles.</P>
               <p>Langma School of Languages follows the levels ranging from N5 (beginner) to N1 (proficient). The learner of the Japanese language varies from students, businessmen, employees who wish to relocate to Japan. Japanese classes at Langma are based on all the four parameters of the language: reading, listening, writing, & speaking. </p>
               <p>Langma School of Languages is the best institution to learn Japanese since our teachers are native and have a sound knowledge of English. The programme of Japanese language includes plays, audio-visuals and workshops which can further enhance the accuracy and usage of the language. Our teachers ensure the classes are interactive and students get enough time to participate in any spoken task. </p>
               <p>Since its establishment, Langma School of languages offers an excellent platform where students can study and choose the programme at their own pace. Our teachers assist the students throughout the programme and help them to attain a certain level of proficiency.  </p>
               <!--<img src="https://langmainternational.com/normal_images/Russian Camp Image .png">-->
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
                                            <div class="alert alert-danger text-center" id="error" style="display: none;"></div>
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
                                                 <input type="tel" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57"  minlength="10" maxlength="10" name="phone" id="phone" class="form-control required"   placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no.">
                                            </div>

                                            <div class="form-group">
                                                <label for="language">Language:</label>
                                                <select name="languages" id="languages" class="form-control select-1 form-select  required" required="required" style="width:100%;">
                                                     <option value="Japanese" selected="selected">Japanese</option>
                                                     <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="German">German</option>
                                            <option value="French">French</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Arabic">Arabic</option>
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
                                            <option value="Ukrainian">Ukrainian</option>
                                            <option value="Urdu">Urdu</option>
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

                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea name="message" id="message" class="form-control required" value="" placeholder="Your Message Here..."></textarea>
                                            </div>

                                            <div class="col-12 form-group">
                                                <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
                                            </div>
                                            <div class="col-8 d-flex justify-content-end align-items-center">
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

                </div>
               
            </div>
   
				 
				 <!--<div class="row mt-n1">-->
     <!--      <div class="col-lg-4">-->
     <!--          <h4><b>ABOUT TORFL</b></h4>-->
     <!--          <p><b>TORFL</b> is a test of Russian language for the foreign citizens and offers an opportunity to evaluate the proficiency of a learner on various parameters including grammar, lexicon, ability to read and write and the communicative skills. The TORFL test is highly recommended for students who are looking forward to studying in Russian universities. This test is also helpful for people who are seeking jobs or are planning to run a business in collaboration with Russia partners.</p>-->
     <!--      </div>-->
     <!--      <div class="col-lg-5">-->
     <!--          <h4><b>BENEFITS OF RUSSIAN LANGUAGE</b></h4>-->
     <!--          <ol>-->
     <!--              <li>Spoken in 14 nations and beyond</li>-->
     <!--              <li>Relish world renowned Russian culture and literature</li>-->
     <!--              <li>Employment opportunities in countries like Ukraine and Poland</li>-->
     <!--              <li>Undertake scientific research in Russia</li>-->
     <!--              <li>Easy admissions in prominent Russian universities</li>-->
     <!--              <li>Jobs in East European Export businesses</li>-->
     <!--              <li>Employment in sectors like Oil Gas, Crude in India and abroad</li>-->
     <!--              <li>Preferred job candidate in Russian export houses</li>-->
     <!--              <li>Opens door to other Salvic languages like Polish</li>-->
     <!--              <li>Opens path to career options like Translation/Linguistics</li>-->

     <!--          </ol>-->
     <!--      </div>-->

     <!--     </div>-->
     <!--       <div class="postcontent col-lg-9">-->
     <!--     <iframe width="100%" height="40" src="https://www.youtube.com/embed/2R11aHKhvvk" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
     <!--       </div>-->
             <!-- .sidebar end -->
          <!--  <div class="postcontent col-lg-9">-->
    <!--            <div class="section footer-stick bg-white">-->
				<!--	<h3 class="center">Course Details</h3>-->
				<!--	<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="2000" data-items-xs="3" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 2 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 3 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 4 Russian.png') }}" alt="Brands"></a></div>-->
				<!--		<div class="oc-item"><a href="#"><img src="{{ asset('normal_images/Slider 1 russian (1).png') }}" alt="Brands"></a></div>-->
				<!--	</div>-->
				<!--</div>-->
				<!-- </div>-->
        </div>
    </div>
</section>

<!-- #content end -->
@endsection