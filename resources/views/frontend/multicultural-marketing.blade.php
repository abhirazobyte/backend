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
        <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/multicultural-marketing.webp) center center no-repeat; background-size: cover;  height: 500px;">
            <!--background-attachment: fixed;-->
            <div class="container py-5">
                 <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">Multicultural Marketing</h5> 
            </div>
        </div>
	 
	 <!--  	============================================= -->
  <!--      <section id="page-title" class="page-title-parallax page-title-dark include-header skrollable skrollable-between" style="padding: 500px 0px; background-image: url(&quot;{{ asset('normal_images/multicultural-marketing.webp') }}&quot;); background-size: cover; background-position: 0px -2.84322px; margin-top: -102px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">-->
  <!--          {{-- <div class="video-overlay" style="background: rgba(175, 16, 16, 0.315); z-index: 1"></div> --}}-->

		<!--	<div class="container clearfix">-->
		<!--		<h1>multicultural-marketing</h1>-->
		<!--		<span>Everything you need to know about our Company</span>-->
		<!--		<ol class="breadcrumb">-->
		<!--			<li class="breadcrumb-item"><a href="/">Home</a></li>-->
		<!--			{{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}-->
		<!--			<li class="breadcrumb-item active" aria-current="page">multicultural-marketing</li>-->
		<!--		</ol>-->
		<!--	</div>-->
		<!--</section>-->
		<!-- #page-title end -->
@endsection

@section('content')
    <!-- Content
         ============================================= -->
                          
 <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <!--<div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">-->
                    <!--    <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{asset('normal_images/mission-vission-one.webp') }} ">-->
                    <!--</div>-->
                    <div class="col-lg-9 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-uppercase fw-bold" style="font-size:17px; color: #4a97a2;">MULTICULTURAL MARKETING</div>
<!--                        <div class="py-2 text-uppercase fw-bold" style="font-size:14px; font-weight: bold;">These are the terms & conditions governed and adopted at Langma School of Languages that bind the student and school when a student enrolls in a programme.-->
<!--</div>-->

                        <!--<div class="fw-bold text-uppercase py-1" style="font-size:17px;">-->
                        <!--    <span class="py-3" style="color:#4a97a2;;">OUR MISSION</span>-->
                        <!--</div>-->
                        <div class="" style="text-align: justify;">Langma School of Languagesoffers specialised multicultural marketing localization solutions.We optimise the marketing mix for your brand that resonates with the ethnic market and amplifies global market reach. Our top marketing linguists are highly experienced in creating, optimising and translating content that addresses the cultural nuances of the targeted audience. Our expert copywriters and marketing linguists are specialised in offering overall marketing localisation services on various media platforms.</div>
                        
                <div class="text-uppercase  mb-2 py-2" style="font-size:17px; letter-spacing: 1px;">
                    <span style="border-left: double; text-align: start;">
                        <b class="ms-2">MULTICULTURAL MARKETING Subjects:</b>
                    </span>
                </div>
                    <ol style="font-size:15px;">
                    <li>Mobile</li>
                    <li>Radio</li>
                    <li>Print</li>
                    <li>Television</li>
                    <li>Web</li>
                    <li>Digital</li>
                    </ol>
                        <div class="text-uppercase  mb-2 py-2" style="font-size:20px; letter-spacing: 1px;  text-align: justify;"> <span style="border-left: double;"><b class="ms-2">What do we do? </b></span></div>
                        <p style="text-align: justify;">
                              We offer targeted content creation, localisation and transcreation services with the help of quality software, modern technology tools and an experienced team of in-house marketing linguists. We deliver culturally relevant content and appropriate deliverables for personalised branding and amplified market outreach. Creating innovative content in the source language and translating it using culturally relevant jargon and specific brand glossary requires expertise and extensive knowledge about ethnic marketing vocabulary and keyword localization. We offer insightful marketing solutions with personalised branding ideas to reach maximum inclusive audiences.
                            </p>
                            
                             <p style="text-align: justify;">
                             Technical Content Services - Access quality multilingual communication with the help of our expert technical writers and qualified linguists. We help you create highly specialised and targeted content that is abreast with cross-cultural marketing research and localisation. Financial Reports, clinical manuals, specialised web content,marketing documents and other technical documents are formulated by our trained marketing linguists and writers to cater for the specific needs andrequirements of our clients.
                            </p>
                             <p style="text-align: justify;">
                              Image Consultation – Images are a powerful communication tool that can be used to signal action and address specific cultural nuances. Our culture experts and consultants are well-versed with colour psychology and they collaborate together with our experienced team of graphic designers to create culturally relevant deliverables. With the advent of digitalisation, the digital art industry has seen a recent boom. We understand the importance of pictures and symbols and the power it holds in culture-specific brand campaigns. We incorporate digital models, diagrams and flows and present a visual treat for our clients. 
                            </p>
                            
                            <p style="text-align: justify;">
                                Transcreation andCopy Adaptation - Amplify global market reach and content effectiveness with specialized translations and transcreations.  The final text produced is targeted towards multicultural marketing that retains the specific language nuances, concepts and meanings. Our specialized team members have an established background in advertising and marketing with linguistic expertise. We offer translation/transcreation services for translating complex culturally loaded terms and jargon such aspuns, idioms, subtexts, euphemisms and rhymes. We prefer a collaborative process that reflects the brand's idea and vision. 
                                  </p>
                                  
                              <p style="text-align: justify;">
                                  Cultural Consulting - The international markets have numerous market sizes and they heavily depend on multicultural marketing solutions to amplify a global reach for individual brands. Our experienced culture experts have a brilliant research background and therefore can infer important insights in developing cultural campaigns. Itis a highly creative process that requires expertise in different cultures and their nuances. We offer unique and customised cultural consultation services to influence personal branding and create specialised marketing solutions. Our team will work on specific regions and provide ample information about targeted areas such as colours, sounds, media and images. 
                            </p>
                            
                             <p style="text-align: justify;">
                            We are a team of dedicated and specialised professionals, language experts and marketing linguists at your service. We pride ourselves on providing quality customer services and a transparent working atmosphere for brand collaborations. If you wish to enhance your global market outreach then avail the multiculturalmarketing services from Langma School of languages and bring customisedsolutions onboard.
                             </p>
                    </div>
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
                                    <form id="leads" action="{{url('apply-submit')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fitness-form-name" class="fw-bold py-2">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-email" class="fw-bold py-2">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control required"  placeholder="Enter your Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-phone" class="fw-bold py-2">Phone:</label>
                                            <input type="tel" name="mobile" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" name="phone" id="phone" class="form-control required" placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no.">
                                        </div>

                                        <div class="form-group">
                                             <label for="language" class="fw-bold py-2">Language:</label>
                                            <select name="language" id="nameido" class="w-100 border-0" >
                                                <option value="">Select your country</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="German">German</option>
                                                <option value="Balkan">Balkan</option>
                                                <option value="Baltic">Baltic</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Nordic">Nordic</option>
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
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-sgpb" style="width: 100%;">

                                            </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="message" class="fw-bold py-2">Message:</label>
                                            <textarea name="message" class="form-control required" placeholder="Your Message Here..." style="height:90px;"></textarea>
                                        </div>
                                           <input type="hidden"  name="currenturl" value="{{ url()->current() }}">
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
        </div>
    <!-- #content end -->
@endsection
