@extends('frontend.layouts.app')
@section('content')



<header>
    <style>
        .page-header {
    padding: 0;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: 50%;
}
.min-vh-50 {
    min-height: 50vh!important;
}
.bg-gradient-dark {
    /*background-image: linear-gradient(310deg,#141727,#3a416f);*/
}
.mask {
    position: absolute;
    background-size: cover;
    background-position: 50%;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .8;
}
.page-header .container {
    z-index: 1;
  
}
p{
 text-align: justify;
}
.select2-selection__rendered{
        margin-top: 5px;
}

.elementskit-section-subtitle {
    color: #FFF;
    font-family: "Rubik",Sans-serif;
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin: 0 0 10px 0;
}

.elementskit-style-border::before {
    content: "";
    width: 40px;
    height: 3px;
    background-color: #d7d7d7;
    display: inline-block;
    vertical-align: middle;
}

.elementskit-style-border::before {
    background-color: #296166;
    width: 30px;
}

.elementskit-style-border::before {
    margin-right: 15px;
}

.elementskit-style-border {

    vertical-align: middle;
}

.elementskit-section-title {
    color: #fff;
    margin: 0 0 0 0;
    font-family: "Poppins",Sans-serif;
    font-size: 40px;
    font-weight: 600;
    line-height: 1.3em;
}

.elementor-widget-container {
    margin: 20px 0 0 0;
}
.ekit_creative_button {
    padding: 10px 30px 10px 30px;
    font-family: "Poppins",Sans-serif;
    font-size: 13px;
    font-weight: 500;
    text-transform: uppercase;
    border-radius: 50px 50px 50px 50px;
}

.ekit_creative_button:not(.ekit_tamaya) {
  background-color: #296166;
    font-weight: 600;
}
.ekit_creative_button_text {
    color: #FFF;
}
.elementskit-style-border::before {
    content: "";
    width: 40px;
    height: 3px;

    display: inline-block;
      vertical-align: inherit;
}

.elementor-widget-wrap{
 padding: 57px;
}

.page-header{
  background-position-y: 50%;
  background: linear-gradient(rgb(15 66 41 / 54%), #2125295e), 
  url({{ asset('frontend/css/langma-components/img/rectangle-2911.webp') }}) no-repeat; background-attachment: fixed; background-size: cover;
  height: 500px;  
}

@media only screen and (max-width: 600px) {
.elementor-widget-wrap{
 padding: 10px;
}
.elementskit-section-title{
        font-size: 25px;
}
.col-auto{
     font-size: 14px;
}
.heading1{
    font-size: 17px;
    padding-right: 22px;
}

.page-header{
  background-position-y: 50%;
  background: linear-gradient(rgb(15 66 41 / 54%), #2125295e), 
  url({{ asset('frontend/css/langma-components/img/rectangle-2911.webp') }}) no-repeat; background-attachment: inherit;
  background-size: cover;
  height: 500px;  
  
}

}

 
    </style>



 <!--style="background-image: url(https://langmainternational.com/frontend/css/langma-components/img/dubai-langma.png); background-position-y: 50%;"-->
<div class="page-header min-vh-50">
<span class="mask bg-gradient-dark"></span>
<div class="container">
  
<div class="row mb-4">
 
<div class="col-lg-7 mx-auto text-white text-start">
   
   
   <div class="elementor-row">
       <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a28a838" data-id="a28a838" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
           <div class="elementor-column-wrap elementor-element-populated">
               <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-1cc707e elementor-widget elementor-widget-elementskit-heading" data-id="1cc707e" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-heading.default">
                       <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                            <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                           <h1 class="ekit-heading--title elementskit-section-title">Foreign Language Courses in Sharjah</h1>
                           </div>
                           </div>
                           </div>
                           </div>
                           <div class="elementor-element elementor-element-b013da1 elementor-widget elementor-widget-text-editor" data-id="b013da1" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="text-editor.default"><div class="elementor-widget-container">
                               <div class="elementor-text-editor elementor-clearfix">
                                   <div style="font-weight: bold;">Langma Institution offers tailored programme (intensive or extensive) to cater the need of students or corporate houses.</div>
                                   </div>
                                   </div>
                                   </div>
                                
                                            </div>
                                            </div>
                                            </div>
                                            </div>
   
</div>
<div class="col-lg-4">
  
</div>

</div>
</div>
</div>


</header>

  <section>
     <div style="background: #265054;" class="pt-4">
          <div class="container">
              <div>
                   <div class="owl-carousel owl-theme"  id="languages">
                @foreach ($languages as $language)
                <div class="item card-hover">
                    <div class="text-center">
                        <a target="_blank" href="{{ url('/' . $language->url) }}" rel="noopener">
                            <img srcset="{{ asset('normal_images/' . $language->image) }}"  src="{{ asset('normal_images/' . $language->image) }}"  alt="{{ $language->title }}" class="w-100 h-auto rounded rounded-3" loading="lazy">
                          </a>
                          <p class="fw-normal text-center text-wrap text-break fw-bold"><span>
                            <a target="_blank" href="{{ url('/' . $language->url) }}" style="color:#fff;" rel="noopener" >{{ $language->title }}</a>
                            </span>
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
                </div>
                
         
          </div>
     </div> 
  </section>
            



<section style="background: #fff;">
    <div class="container" style="padding-top: 51px;">
        <h4 class="heading1 mb-lg-5 text-lg-center ms-3 ms-lg-0" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;">WHY LEARN A NEW LANGUAGE WITH LANGMA</h4>
            <div class="row p-3" style="justify-content: center;">
          <div class="col-lg-7 mb-2">
              <div class="">
                 <p>Learning a foreign language is very easy. If you learn a foreign language, there are many new opportunities for you all over the world. At Langma School of Languages, you learn foreign
languages with experienced trainers who are not only masters of that language but also know how to
teach a foreign language easily. Learning a foreign language from Langma helps you to build your
fluency and confidence because you participate in dynamic group activities, and live group discussions
on a wide range of topics.</p> 
<p>Langma School of Languages is a leading foreign language institute in India. We offer foreign language
courses and classes for more than 50 foreign languages. Some of the main languages are German,
English, Spanish, French, Japanese, Korean, Chinese, Russian, Italian, and so on. We provide world-class
foreign language education in India, United Urban Emirates, Australia, Germany, the UK, the USA,
Canada, Sri Lanka, Russia, Japan, etc.</p>
</div>
          </div>
            <div class="col-lg-5">
               <img src="{{ asset('frontend/css/langma-components/img/group-1595.png') }}" class="w-100" alt="langma-group-1595" loading="lazy">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container" style="padding-top: 51px;">
        <h4 class="heading1 mb-5 text-center" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;     text-transform: uppercase;">Job opportunities for multilingual employees IN Sharjah</h4>
            <div class="row">
                 <div class="col-lg-4 mb-2">
                                 <img src="{{ asset('frontend/css/langma-components/img/Group-10595.png') }}" class="w-100" alt="langma-Group-10595" loading="lazy">
            </div>
          <div class="col-lg-7">
              <div class="">
                   <p>Are you living in Sharjah and looking for a foreign language institute to learn a foreign language online? If
yes then Langma is one of the best options for you. We are providing foreign language courses online
weekly and on weekend days. No matter whether you are a student or a working professional we will
teach you desired foreign language as per your time availability and flexibility. You can take one-to-one
classes or in groups.</p>
                   
         <h4 class="heading1 mb-2" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166; font-size: 17px ">PROFILES IN DEMAND ARE</h4>
         
         <ul>
             <li>Security Analyst.</li>
             <li>HR Manager.</li>
             <li>Legal Counsel. </li>
             <li>Petroleum Engineer.</li>
             <li>Mechanical Engineer.</li>
             <li>Marketing Manager.</li>
             <li>Registered Nurse. </li>
             <li>Teacher. Teachers, like nurses and other healthcare professionals, are always in demand throughout Sharjah and the UAE.</li>
         </ul>
         
 


 


              </div>
          </div>
           
        </div>
    </div>
</section>
<section style="background: #fff;">
    <div class="container" style="padding-top: 51px;">
        <h4 class="heading1 mb-5 text-center" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166; text-transform: uppercase;">Advantages of language courses in the United Arab Emirates</h4>
            <div class="row">
          <div class="col-lg-7 mb-2">
              <div class="">
            <ul>
                <li>Easy visa process. Citizens of some countries do not need to apply for a visa in advance — it will be issued directly at the airport. If the study period exceeds 30 days, language schools in the UAE fully accompany students in obtaining a student visa.</li>
                <li>English-speaking environment. Locals speak excellent English in Sharjah , where language schools are located. This provides many opportunities for foreign students to practice their language skills.</li>
                <li>Western teaching standards. Native speakers from the US, UK, Australia, and other English-speaking countries teach in the UAE. They conduct classes in accordance with Western standards and authentic materials.</li>
                     <li>Affordable education. Language courses in Sharjah  cost relatively little. The average cost at a private school is 210 USD per week. At American schools, analogous courses will cost around 430 USD per week.</li>
            </ul>
            

              </div>
          </div>
            <div class="col-lg-5 p-3">
                   <img src="{{ asset('frontend/css/langma-components/img/Group-42731293.png') }}" class="w-100" alt="langma-Group-10595" loading="lazy">
            </div>
        </div>
    </div>
</section>




<section class="mt-4">
    <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 p-lg-5 order-2 order-lg-1 mb-2">
              <div >
                 <h3></h3><h5 style="color:#4197A2;">LANGMA'S VIRTUAL CLASSROOM FEATURES</h5><p>Our virtual classes are real-time live streaming with native teachers who have years of experience teaching Arabic online. You will learn and practice Arabic at your convenience without stepping out from your home or office.</p><div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Face-to-face learning</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Interactive online whiteboard</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Interactive audio and video</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Messaging and conversation mode</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Private and group classes</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Classroom interaction features like hand raising and virtual ticks hand raising and virtual ticks</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;File and media sharing</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Custom branding</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Class review</div><div style="text-align:justify"><i class="fa-solid fa-check" style="background:#13bfab99;border-radius:50px;color:#fff"></i>&nbsp;Class recordings</div></div> 
           </div>
              </div>
           <div class="col-12 col-lg-4 order-1 order-lg-2">
                                                      <div class="shadow-lg mb-5 bg-body rounded-4">
                                                <div class="col-12 col-sm-6 col-lg-12 p-4">
                                                    <div class="mb-3" style="font-size:12px; letter-spacing:1px;"><b>ENQUIRE NOW</b></div>

                                                    @if (\Session::has('success'))
                                                    <div class="alert alert-success">
                                                        <ul>
                                                            <li style="font-size:14px;">{!! \Session::get('success') !!}</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                    <div>
                                   <form id="leads" action="{{url('apply-submit')}}" method="post" enctype="multipart/form-data">
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
                                                        <input type="tel" class="form-control border-0 rounded-5" placeholder="Enter Your Contact No" name="mobile" id="phone" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" required>
                                                    </div>
                                                </div>
                                                
                                                   <div class="mb-3 ">
                                                <div class="input-group mb-3 form-floating">
                                                <select name="language" id="nameido" class="w-100 border-0 required" required>
                                                <option value="" selected="selected">Language Interested in</option>
                                                
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="German">German</option>
                                                <option value="French">French</option>
                                                <option value="Balkan">Balkan</option>
                                                <option value="Baltic">Baltic</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Mongolian">Mongolian</option>
                                                 <option value="Nordic">Nordic</option>
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
                                                
                                                           <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <textarea class="form-control bg-light border-0"  name="message" placeholder="Your Message Here..." id="message" required style="border-radius: 14px; height: 61px;"></textarea>
                                                    </div>

                                                </div>
                                    
                                           <input type="hidden"  name="currenturl" value="{{ url()->current() }}">
                                        <div class="text-center py-2 mt-2">
                                          <button type="text " class="btn  w-100 rounded-5 text-light" style="background: #296166; font-weight: 600;">Submit</button>
                                        </div>

                                    </form>
                        </div>
                        
                               </div>
                            </div>
                            </div>
                            
        </div>
        
        </div>
        </section>

      <script>
             $(document).ready(function() {
        $('#languages').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            nav: false,
            autoplayHoverPause: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2.3
                },
                600: {
                    items: 2.3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    </script>
@endsection