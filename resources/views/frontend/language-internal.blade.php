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
            <style>
    p{
        font-size:15px;
        text-align: justify;
    }
li{
        text-align: justify;
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
        /*    margin-top: -70px;*/
        /*}*/
         .owl-prev,
        .owl-next {
            position: absolute;
            top: 45%;
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

@media screen and (max-width: 600px) {
    .gallery-header{
        height: 210px !important;

    }
    .display-3{
        font-size: 20px !important;
        margin-top: 10px !important;
        }
    
}

</style>
                    
        <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url({{ asset('normal_images/' . $bg_banner) }})  center center no-repeat; background-size: cover; height: 500px;">
            <!--background-attachment: fixed;-->
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">{{ $item->title}}</h5> 
            </div>
        </div>
        
        
<!--              <div class="container-fluid jap-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(87, 92, 90, .60), rgba(206, 212, 218, .65)), url({{ asset('normal_images/' . $bg_banner) }}) center center no-repeat; background-size: cover; background-attachment: fixed; height:500px;">-->
<!--           <div class="container mt-2 mt-lg-5 p-4 p-lg-5">-->
          
<!--<div class="mt-0 mt-lg-5">-->
<!--       {!! $item-> tag_line  !!}-->

<!--</div>-->
<!--           </div>-->
<!--       </div>-->
@endsection

@section('content')
<div class="container">

<div class="row">
          <div class="col-lg-8 col-12">
            <div class="entry-content">
            <div class="text-uppercase fw-bold  container"><h3 style="color:#4a97a2; font-size: 20px;">{!! $item->title !!}</h3></div>    
                
                {!! $item->content !!}
        </div>
          </div>
          <div class="col-lg-4 col-12">
              @if(url()->current() === 'https://langmainternational.com/173/tamil-language-course' || url()->current() === 'https://langmainternational.com/173/tamil-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/TAMIL.png" class="w-100">
            </div>
               @endif
               
                     @if(url()->current() === 'https://langmainternational.com/177/assamese-language-course' || url()->current() === 'https://langmainternational.com/177/assamese-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/ASSAM.png" class="w-100">
            </div>
               @endif
               
                 @if(url()->current() === 'https://langmainternational.com/170/marathi-language-course' || url()->current() === 'https://langmainternational.com/170/marathi-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/MARATHI.png" class="w-100">
            </div>
               @endif
     
      @if(url()->current() === 'https://langmainternational.com/180/kashmiri-language-course' || url()->current() === 'https://langmainternational.com/180/kashmiri-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/KASHMIRI.png" class="w-100">
            </div>
               @endif
               
                @if(url()->current() === 'https://langmainternational.com/172/gujrati-language-course' || url()->current() === 'https://langmainternational.com/172/gujrati-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/GUJRATI.png" class="w-100">
            </div>
               @endif
              
     
     
               
                 @if(url()->current() === 'https://langmainternational.com/178/punjabi-language-course' || url()->current() === 'https://langmainternational.com/178/punjabi-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/PUNJAB.png" class="w-100">
            </div>
               @endif
               
                        @if(url()->current() === 'https://langmainternational.com/181/konkani-language-programme-language-program' || url()->current() === 'https://langmainternational.com/181/konkani-language-programme-language-program')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/KONKANI.png" class="w-100">
            </div>
               @endif
               
           @if(url()->current() === 'https://langmainternational.com/175/telugu-language-course' || url()->current() === 'https://langmainternational.com/175/telugu-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/TELEGU.png" class="w-100">
            </div>
               @endif
               
                  @if(url()->current() === 'https://langmainternational.com/174/maithali-language-course' || url()->current() === 'https://langmainternational.com/174/maithali-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/MATHELI.png" class="w-100">
            </div>
               @endif
            @if(url()->current() === 'https://langmainternational.com/179/malayalam-language-course' || url()->current() === 'https://langmainternational.com/179/malayalam-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/MALAYALAM.png" class="w-100">
            </div>
               @endif
              @if(url()->current() === 'https://langmainternational.com/171/bengali-language-course' || url()->current() === 'https://langmainternational.com/171/bengali-language-course')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/BENGALI.png" class="w-100">
            </div>
               @endif
      
                           @if(url()->current() === 'https://langmainternational.com/176/oriya-language-programme-language-program' || url()->current() === 'https://langmainternational.com/176/oriya-language-programme-language-program')
            <div class="py-3">
                  <img src="https://langmainternational.com/frontend/css/langma-components/img/ODIYA.png" class="w-100">
            </div>
               @endif
               
               
               
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
      
      
<style>
    .product {
        position: relative;
        /* transform: translate(-50%, -50%); */
        width: 100%;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
        border-radius: 14px;
        background: #296166;
        height: 251px;
        overflow: hidden
    }
    
    .product .imgbox {
        height: 100%;
        box-sizing: border-box
    }
    
    .product .imgbox img {
        display: block;
        width: 100%;
    }
    
    .specifies {
        position: absolute;
        width: 100%;
        bottom: -161px;
        background: #296166;
        padding: 10px;
        box-sizing: border-box;
        transition: .5s
    }
    

    
    .specifies h2 {
        margin: 0;
        padding: 0;
        font-size: 17px;
        width: 100%
    }
    
    .specifies h2 span {
        font-size: 15px;
        color: #fff;
        font-weight: normal
    }
    
    .specifies .price {
        position: absolute;
        top: 12px;
        right: 25px;
        font-weight: bold;
        color: #fff;
        font-size: 30px
    }
    

    
    .specifies p {
        list-style: none;
        margin: 10px 0 0;
        font-size: 15px;
        font-style: normal;
        color: #fff;
    }
    

    .specifies p {
        list-style: none;
        margin: 5px 5px 0;
        font-size: 15px;
        font-style: normal;
        color: #fff;
    }
    
    .specifies p:first-child {
        margin-left: 0
    }
    
    .specifies p {
        height: 150px
    }
</style>


        
     <div class="owl-carousel owl-theme py-3" style="margin-bottom: 90px;">
           @foreach($internals as $internal)
            <div class="item">
            <div class="product">
                <div class="imgbox">
                   <a href="{{url($internal->id.'/'.$internal->slug)}}"><img src="{{asset('normal_images/'.$internal->image)}}" alt="{{$internal->title}}"></a>
                </div>
                <div class="specifies text-center">
                    <h2 class="text-white text-center p-3 mb-2" style="font-size: 18px font-weight: 600 !important;"><a href="{{url($internal->id.'/'.$internal->slug)}}" class="text-white">{{ (strlen($internal->title) > 20) ? substr($internal->title,0,20).'...' : $internal->title }}</a></h2>
                   <p class="text-center"></p>
                </div>
            </div>    
            </div>
       @endforeach
    </div>
</div>       


<script>
        $(document).ready(function() {
 $('.owl-carousel').owlCarousel({
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
                0: { // For mobile screens (0px and up)
            items: 1
        },
        480: { // For screens above 480px
            items: 1
        },
        600: { // For screens above 600px
            items: 2
        },
        1000: { // For screens above 1000px
            items: 3
        }
            }
        });
        
    $(".owl-prev").css("background", "#4a97a2");    
      $(".owl-next").css("background", "#4a97a2");   
    });
</script>
@endsection
