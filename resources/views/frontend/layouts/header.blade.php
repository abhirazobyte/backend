@php
$setting = "\App\Models\Setting"::first()
@endphp
<!-- Topbar Start -->
<div class="container-fluid " style="box-shadow: 0px 0px 4px grey; background-color:#296166  !important; color:#fff;  border-bottom: 1px solid #8080802e;">
    <!--#4197A2-->
    <div class="row gx-0 ">
        <div class="col-lg-5 col-md-5 col-sm-5 px-5 text-start d-lg-flex d-none">
            <!--d-none-->
            <div class="h-100 d-inline-flex align-items-center me-4">
            <!--<div id="google_translate_element"></div>-->
<!--            <script type="text/javascript">-->
<!--function googleTranslateElementInit() {-->
<!--  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');-->
<!--}-->
<!--</script>-->

<!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
             
            </div>
            <!--<div class="h-100 d-inline-flex align-items-center">-->
            <!--</div>-->
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 px-1 text-end">
            <div class="h-100 d-inline-flex align-items-end mx-n2">
                <a href="tel:+91-9810117094" style="color: #fff; text-decoration: none; z-index: 2;"> <i class="fa-solid fa-phone"></i></span>+91-9810117094</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg  navbar-light bg-light sticky-top p-0">
     <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center py-2 px-4 px-lg-5"><img src="{{ asset('frontend/css/langma-components/img/langma-logo.webp ') }}" alt="langma Logo" width="160"  height="46"></a>
 
    <button type="button" class="navbar-toggler me-4 bg-light border border-0" aria-label="Aria Toggle" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Languages Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row g-5 d-flex justify-content-center">

<div class="col-10 ms-3">
<div class="row">
    
               <div class="col-12 mt-3" style="color:#4a97a2;">
               <span style="color:#296166; font-size:18px;"><b>Top Foreign Languages to Learn</b></span> 
            </div>
              <div class="col-md-5 col-lg-4">
                    <p><a  href="{{ url('arabic-language-online-course') }}" style="font-size:15px; font-weight: 400;"> Arabic language</a></p>
                   <p><a  href="{{ url('online-balkan-languages') }}" style="font-size:15px; font-weight: 400;"> Balkan language</a></p>
                   <p><a  href="{{ url('online-chinese-language-course') }}" style="font-size:15px; font-weight: 400;"> Chinese language</a></p>
                   <p><a  href="{{ url('online-english-language-course') }}" style="font-size:15px; font-weight: 400;"> English language </a></p>
                   <p> <a  href="{{ url('online-french-language-course') }}" style="font-size:15px; font-weight: 400;"> French language</a></p>
        
              
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-5 col-lg-4">
                    <p><a href="{{ url('online-german-language-course') }}" style="font-size:15px; font-weight: 400;"> German  language</a></p>
                        <p><a href="{{ url('hindi-language-classes') }}" style="font-size:15px; font-weight: 400;">Hindi Language </a></p>
                  <p><a  href="{{ url('online-italian-language-course') }}" style="font-size:15px; font-weight: 400;"> Italian language</a></p>
                  <p><a  href="{{ url('online-japanese-language-course') }}" style="font-size:15px; font-weight: 400;"> Japanese language</a></p>
                  <p><a  href="{{ url('online-korean-language-courses') }}" style="font-size:15px; font-weight: 400;"> Korean language</a></p>
 
              </div>

   <div class="col-md-5 col-lg-4">
       
                <p><a href="{{ url('online-russian-language-course') }}" style="font-size:15px; font-weight: 400;"> Russian language</a></p>
                  <p><a  href="{{ url('online-persian-language-course') }}" style="font-size:15px; font-weight: 400;">Persian language</a></p>
                  <p><a  href="{{ url('polish-language-course') }}" style="font-size:15px; font-weight: 400;">Polish language</a></p>
                              <p><a href="{{ url('online-spanish-language-courses') }}" style="font-size:15px; font-weight: 400;">Spanish language </a></p>
                  <p><a  href="{{ url('best-sanskrit-language-institute') }}" style="font-size:15px; font-weight: 400;">Sanskrit language</a></p>
    
       <p class="text-center">  <a class="" href="https://langmainternational.com/#all-langauges">View All<i class="fa-solid fa-arrow-right"></i></a></p>
       
              </div>
              
</div>
</div>

   <!--<div class="col-md-5 col-lg-3">-->
   <!--             <ul class="nav flex-column">-->
   <!--             <li class="nav-item">-->
   <!--               <a class="nav-link" href="{{ url('dutch-language-course') }}"> dutch language</a>-->
   <!--             </li>-->
   <!--             <li class="nav-item">-->
   <!--               <a class="nav-link" href="{{ url('dari-pashto-language-online-course') }}"> dari/pashto language</a>-->

   <!--             </li>-->
   <!--             <li class="nav-item">-->
   <!--               <a class="nav-link" href="{{ url('vietnamese-language-courses') }}"> vietnamese language</a>-->
   <!--             </li>-->
   <!--             <li class="nav-item">-->
   <!--               <a class="nav-link" href="{{ url('thai-language-courses') }}"> thai language </a>-->
   <!--             </li>-->
   <!--             <li class="nav-item">-->
   <!--              <a class="nav-link" href="{{ url('swahili-language-courses') }}">swahili language</a>-->
   <!--            </li>-->
               
             
   <!--              <a class="nav-link text-end" href="https://langmainternational.com/#all-langauges">View All <i class="fa-solid fa-arrow-right"></i></a>-->
     
               
   <!--           </ul>-->
   <!--           </div>-->
              
            </div>
          </div>



        </div>
      </li>
</ul>
</div>
    <a href="{{ url('apply-now') }}" class="d-block d-lg-none nav-item nav-link{{ Request::is('program') ? 'active' : '' }}">Apply Now</a>

            <div class="nav-item dropdown position-relative d-block d-lg-none" style="position: static;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Languages Courses </a>
                <div class="dropdown-menu bg-light m-0">
                               <a class="dropdown-item" href="{{ url('arabic-language-online-course') }}">Arabic Language</a>
                 <a class="dropdown-item" href="{{ url('online-chinese-language-course') }}">Chinese Language</a>
                       <a class="dropdown-item" href="{{ url('online-english-language-course') }}">English Language</a>
                      <a class="dropdown-item" href="{{ url('online-french-language-course') }}">French language</a>
                      <a class="dropdown-item" href="{{ url('online-german-language-course') }}">German Language</a>
                      <a class="dropdown-item" href="{{ url('online-italian-language-course') }}">Italian Language</a>
                     <a class="dropdown-item" href="{{ url('online-japanese-language-course') }}">Japanese Language</a>
                     <a class="dropdown-item" href="{{ url('online-korean-language-courses') }}">Korean Language</a>
                       <a class="dropdown-item" href="{{ url('online-russian-language-course') }}">Russian language</a>
                     <a class="dropdown-item" href="{{ url('online-spanish-language-courses') }}">Spanish language </a>

                 
                </div>
            </div>
            
            <div class="nav-item dropdown position-relative{{ Request::is('about') ? 'active' : '' }}" style="position: static;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu bg-light m-0">
                    @foreach('App\Models\Page'::where('type', 1)->orderBy('position', 'asc')->get() as $about)
                    @if ($about->position == 3)

                <a class="dropdown-item" href="{{ url('gallery') }}">
                    <div>Gallery</div>
                </a>
            @endif
                <a class="dropdown-item" href="{{ url($about->url) }}">
                    <div>{{ $about->title }}</div>
                </a>
        @endforeach
                </div>
            </div>
            <!--<div class="nav-item dropdown position-relative{{ Request::is('service') ? 'active' : '' }}" style="position: static;">-->
            <!--    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Countries</a>-->
            <!--    <div class="dropdown-menu bg-light m-0" id="dropdown-item2">-->
            <!--        <a href="{{ url('foreign-language-courses-in-abu-dhabi') }}" class="dropdown-item">Abu Dhabi</a>-->
            <!--              <a href="{{ url('foreign-language-courses-in-australia') }}" class="dropdown-item">Australia</a>-->
            <!--                <a href="{{ url('foreign-language-courses-in-ajman') }}" class="dropdown-item">Ajman</a>-->
            <!--                   <a href="{{ url('foreign-language-courses-in-bangladesh') }}" class="dropdown-item">Bangladesh</a>-->
            <!--                <a href="{{ url('foreign-language-courses-in-dubai') }}" class="dropdown-item">Dubai</a>-->
            <!--                    <a href="{{ url('foreign-language-courses-in-fujairah') }}" class="dropdown-item">Fujairah</a>-->
            <!--                                 <a href="{{ url('foreign-language-courses-in-nepal') }}" class="dropdown-item">Nepal</a>-->
                    
            <!--        <a href="{{ url('foreign-language-courses-in-sharjah') }}" class="dropdown-item">Sharjah</a>-->
            <!--        <a href="{{ url('foreign-language-courses-in-sri-lanka') }}" class="dropdown-item">Sri Lanka</a>-->
       
                  
            <!--        <a href="{{ url('foreign-language-courses-in-singapore') }}" class="dropdown-item">Singapore</a>-->
            <!--            <a href="{{ url('foreign-language-courses-in-Umm Al Quwain') }}" class="dropdown-item">Umm Al Quwain</a>-->
            <!--        <a href="{{ url('foreign-language-courses-in-Uae') }}" class="dropdown-item">UAE</a>-->
              
            <!--    </div>-->
            <!--</div>-->
  <div class="nav-item dropdown position-relative{{ Request::is('service') ? 'active' : '' }}" style="position: static;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu bg-light m-0" id="dropdown-item2">
                    <a href="{{ url('transcription') }}" class="dropdown-item">Transcription</a>
                    <a href="{{ url('translation') }}" class="dropdown-item">Translation</a>
                    <a href="{{ url('localization') }}" class="dropdown-item">Localization Service</a>
                    <a href="{{ url('multilanguage') }}" class="dropdown-item">Multilanguage DTP</a>
                    <a href="{{ url('proofreading') }}" class="dropdown-item">Proofreading</a>
                    <a href="{{ url('voiceover') }}" class="dropdown-item">Voice Over Services</a>
                    
                    <a href="{{ url('content-modulation') }}" class="dropdown-item">Content Modulation</a>
                    <a href="{{ url('content-writing') }}" class="dropdown-item">Content Writing</a>
                    <a href="{{ url('dubbing') }}" class="dropdown-item">Dubbing</a>
                    <a href="{{ url('subtitle') }}" class="dropdown-item">Subtitle</a>
                     
                </div>
            </div>
             <a href="https://langmainternational.com/study-international" target="_blank" class="nav-item nav-link{{ Request::is('program') ? 'active' : '' }}">Study International</a>
             <a href="https://webbrains.com/" target="_blank" class="nav-item nav-link{{ Request::is('program') ? 'active' : '' }}">Langma in IT</a>
             <a href="https://langmaconsulting.com/" target="_blank" class="nav-item nav-link{{ Request::is('program') ? 'active' : '' }}">Langma Consulting</a>

            <a href="{{ url('program') }}" class="nav-item nav-link{{ Request::is('program') ? 'active' : '' }}">Corporate Training</a>

            <a href="{{ url('contact') }}" class="nav-item nav-link{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </div>
        {{-- <i class="fa fa-arrow-right ms-3"></i> --}}
        <div>
        <a href="{{ url('apply-now') }}" class="d-none  d-lg-block{{ Request::is('apply-now') ? 'active' : '' }}" style="background:#296166; border-radius: 50px; color: #fff;  text-align: center; opacity: .9; height: 40px;  line-height: 40px;  transition: all .3s ease,color .3s ease; font-weight:600; width:121px;">Apply Now</a>
   </div>
    </div>
</nav>
<!-- Navbar End -->
