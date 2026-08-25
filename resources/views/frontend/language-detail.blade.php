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
@if(url()->current() === 'https://langmainternational.com/hindi-language-classes' || url()->current() === 'https://www.langmainternational.com/hindi-language-classes')
<div class="video-container mb-3">
       <iframe class="banner-img1"  src="https://www.youtube.com/embed/4z9IwfHZ_zY?playsinline=1&autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;playsinline; clipboard-write; encrypted-media; gyroscope; picture-in-picture" playsinline  allowfullscreen></iframe>
      </div>
       @elseif(url()->current() === 'https://langmainternational.com/online-chinese-language-course' || url()->current() === 'https://www.langmainternational.com/online-chinese-language-course')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/7l1UThkQE7Q?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       @elseif(url()->current() === 'https://langmainternational.com/armenia-language-program' || url()->current() === 'https://www.langmainternational.com/armenia-language-program')
       <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/t30BUvyX2IQ?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
       @elseif(url()->current() === 'https://langmainternational.com/best-sanskrit-language-institute' || url()->current() === 'https://www.langmainternational.com/best-sanskrit-language-institute')
       <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/fqEA12oolxI?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       @elseif(url()->current() === 'https://langmainternational.com/online-french-language-course' || url()->current() === 'https://www.langmainternational.com/online-french-language-course')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/Ozno_WzanbA?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
        @elseif(url()->current() === 'https://langmainternational.com/online-german-language-course' || url()->current() === 'https://www.langmainternational.com/online-german-language-course')
       <div class="video-container">
           
       <iframe class="banner-img1" src="https://www.youtube.com/embed/3jLYn-kb1dc?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
        @elseif(url()->current() === 'https://langmainternational.com/online-spanish-language-courses' || url()->current() === 'https://www.langmainternational.com/online-spanish-language-courses')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/D_ElgPxipPs?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      @elseif(url()->current() === 'https://langmainternational.com/dutch-language-course' || url()->current() === 'https://www.langmainternational.com/online-dutch-language-courses')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/_z-uqlNWaJg?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      @elseif(url()->current() === 'https://langmainternational.com/online-italian-language-course')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/g_kSeQKIKx0?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
       @elseif(url()->current() === 'https://langmainternational.com/online-korean-language-courses' || url()->current() === 'https://www.langmainternational.com/online-korean-language-courses')
      <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/N5Dq5xcyLwU?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @elseif(url()->current() === 'https://langmainternational.com/online-russian-language-course' || url()->current() === 'https://www.langmainternational.com/online-russian-language-course')
       <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/kb5TFp1Fu7g?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @elseif(url()->current() === 'https://langmainternational.com/online-japanese-language-course' || url()->current() === 'https://www.langmainternational.com/online-japanese-language-course')
        <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/4qc1OfroRe4?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
        @elseif(url()->current() === 'https://langmainternational.com/arabic-language-online-course' || url()->current() === 'https://www.langmainternational.com/arabic-language-online-course')
        <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/1ERvssWs49s?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @elseif(url()->current() === 'https://langmainternational.com/vietnamese-language-courses' || url()->current() === 'https://www.langmainternational.com/vietnamese-language-courses')
        <div class="video-container">
       <iframe class="banner-img1" src="https://www.youtube.com/embed/htcAnHR8dOs?autoplay=1&amp;mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      
      
       @else
       
        <?php 
            $bannerPadding = '';
            if(url()->current() === 'https://langmainternational.com/hebrew-language-course'){
                $bannerPadding = 'padding-bottom: 200px !important;';
            }
        ?>
        


       <!--<div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url({{ asset('normal_images/' . $bg_banner) }}) center center no-repeat; background-attachment: fixed; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; background-size: cover !important;">-->
       <!--<div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="min-height:550px; background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url({{ asset('normal_images/' . $bg_banner) }}) no-repeat; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">-->
       <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="min-height:550px; background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url({{ asset('normal_images/' . $bg_banner) }}) no-repeat; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; background-size: cover !important;">
            <div class="container py-5">
                 <h5 class="display-3 mt-5 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui;">{{ $item->title }}</h5> 
            </div>
        </div>
       @endif

       @endsection



       @section('content')
       <style>
#owl-demo-6 .owl-nav [class*=owl-] {
            color: #a56363;
            font-size: 17px;
            padding: 5px;
            margin-top:25px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50px;
            border: 0px;
            margin-top: -24px;
        }
        
        
      .select2-container--default .select2-selection--single {
           background-color: #fff;
           border: 1px solid #aaaaaa2e;
           border-radius: 6px;
           height: 40px;
           box-shadow: 0px 0px 2px grey;
       }

       .select2-container .select2-selection--single .select2-selection__rendered {
           display: block;
           padding-left: 10px;
           padding-top: 5px;
           padding-right: 20px;
           overflow: hidden;
           text-overflow: ellipsis;
           white-space: nowrap;
           text-align: start;
       }

   .form-control {
       display: block;
       width: 100%;
       padding: 0.375rem 0.75rem;
       font-size: 12px;
       font-weight: 400;
       line-height: 1.5;
       color: #212529;
       background-color: #fff;
       background-clip: padding-box;
       border: 1px solid #ced4da;
       -webkit-appearance: none;
       appearance: none;
       transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
       border-radius: 3px;
       height: 35px;
   }

   input,
   button,
   select,
   optgroup,
   textarea {
       margin: 0;
   }

   .form-group label {
       font-size: 13px;
   }

   p{
      font-size: 15px;
      line-height: 24px;
      text-align: justify;
     font-family: poppins,sans-serif;
   }

   .haeding-color{
       color:#000000b8;
   }
   .haeding-color:hover{
       color:#1ABC9C;
   }
 h3 div{
     font-size: 15px;
    font-weight: 100;
    line-height: 25px;
 }
   
h5{
      
        color:#4197A2;
          font-size: 25px;
   }
   
  
.langmalft:hover{
    margin-left:10px;
}


 .owl-carousel .owl-nav button.owl-next {
            background: #fff;
            box-shadow: 0px 0px 10px grey;
            float: right;
        }

        .owl-carousel .owl-nav button.owl-prev {
            background: #fff;
            box-shadow: 0px 0px 10px grey;
            float: right;
        }

        /*.owl-theme .owl-nav {*/
        /*    margin-top: 70px;*/
        /*}*/
        
         .owl-prev,
        .owl-next {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            border: 1px solid #512da8;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

         .owl-prev {
            left: -15px;
        }

        .owl-next {
            right: -15px;
        }

        .owl-dots{
            display:none;
        }

    .owl-theme .owl-nav .disabled {
    opacity: 0.5;
    cursor: default;
}

.video-container {
	position:relative;
	padding-bottom:35.25%;
	padding-top:30px;
	height:0;
	overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
}
   

    #more {
        display: none;
    }
    #row-con{
          width: 100%; 
        padding: 2px; 
        padding-left: 0px;
     
    }
    
    @media only screen and (min-width: 764px) {
        #row-con{   
          width: 96%; 
        padding-left: 179px;
        }
    }
 
.input-group .form-control:focus {
        border-color: #28a745;
           box-shadow: 0 0 0 0.0rem rgba(40, 167, 69, 0.25);
    } 
    
    .form-floating .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaaaaa2e;
    border-radius: 50px;
    height: 40px;
    box-shadow: 0px 0px 2px grey;
}



 #myBtn {
    color: #1e43df;
    z-index: 1;
    font-weight: 500;
    padding: 7px;
    position: relative;
    transition: .3s ease-in-out;
    display: inline-block;
    border:0px;
    color:#296166;
      background: transparent;
      font-variant-caps: inherit;
}

#myBtn::after {
    content: '';
    position: absolute;
    bottom: 0;
    height: 2px;
    z-index: -1;
    width: 100%;
    background: #296166;
    left: 0;
    transition: .3s ease-in-out;
}

#myBtn:hover{color:#fff;text-decoration:none}
#myBtn:hover::after{height:100%}

.select2-container--default .select2-selection--single .select2-selection__placeholder{
    font-size: 12px;
}
</style>
       
        <section class="mb-5">
            <div class="container-fluid mt-4">
             <div id="row-con">
              <div class="row">
                <div class="col-12 col-lg-7">
                <div class="p-2 mt-lg-2 pt-lg-1 mb-5">{!! $item->content !!}</div>
                <div class="owl-carousel owl-theme PY-5 mt-5" id="owl-demo-6">
                   @php
                   $languages = \App\Models\LanguageDetail::where('language_id',$item->id)->get();
                   @endphp
                     @if(!empty($languages))
                     @foreach($languages as $language)
                   <div class="item">
                   <div class="text-center">
                       <a target="_blank" href="{{url($language->id.'/'.$language->slug)}}" rel="noopener">
                           <img src="{{asset('normal_images/'.$language->image)}}" alt="{{ $language->title }}" width="360" height="169" style="border-radius: 15px;">
                       </a>
                   </div>
                   <div class="py-3 p-1">
                       <p class="text-wrap text-break fw-bold">
                           <span>
                           <a href="{{url($language->id.'/'.$language->slug)}}" style="font-family:system-ui; font-size: 18px;" class="haeding-color text-capitalize">{{ (strlen($language->title) > 20) ? substr($language->title,0,20).'...' : $language->title }}</a>
                       </span>
                       </p>
                       <span>
                           <a href="{{url($language->id.'/'.$language->slug)}}" style="font-family: sans-serif; color: grey; font-size: 14px;">{!! (strlen($language->content) > 60) ? substr(strip_tags($language->content),0,60).'...' : $language->content !!}</a>
                       </span>
                   </div>
                   </div>
                   @endforeach
                   @endif
               </div>
                   <div style="margin-top:100px;"><h3>{!! $item->content_2 !!} </h3></div>
            </div>
                    
                    
                    
                     
                    <div class="col-12 col-lg-5">
                       <div class="p-3">
                            {!! $item->content_img !!}
                       </div>
                        
                        <div class="row" style="justify-content: center;">
                            <div class="col-12 col-lg-7">
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
                                                        <textarea class="form-control bg-light border-0"  name="message" placeholder="Describe your requirement...*" id="message" required style="border-radius: 14px; height: 61px;"></textarea>
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
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
             </div>
            </div>
        </section>
        
<script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
<script>
        $(document).ready(function() {
 $('#owl-demo-6').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
              slideTransition: 'linear',
            nav: true,
          autoPlaySpeed: 5000,
            autoplayHoverPause: true,
            navText: ["<i class='fa fa-chevron-left text-light'></i>", "<i class='fa fa-chevron-right text-light'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3.1
                }
            }
        });
        
    $(".owl-prev").css("background", "#4a97a2");    
      $(".owl-next").css("background", "#4a97a2");   
    });
</script>
@endsection
