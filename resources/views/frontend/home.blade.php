
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
    
    .product:hover .specifies {
        bottom: 0;
        height: 100%;
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


<style>
.iti--allow-dropdown{
width: 100%;
}
        button {
            color: #FFF;
            background-color: #428BCA;
            border: 1px solid #357EBD;
        }

        button:hover {
            background-color: #3276B1;
            border-color: #285E8E;
            cursor: pointer;
        }

        #result {
            margin-bottom: 100px;
        }
          .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 10px;
            padding-top: 5px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            text-align: center;
        }

.section{
    margin-top:80px;
}

    </style>
<style>
         .goog-logo-link {
    display:none !important;
}
.goog-te-gadget{
    color: transparent !important;
}

        .text-center {
            text-align: center;
        }

        .color-white {
            color: #fff;
        }


        .box-item {
            position: relative;
            -webkit-backface-visibility: hidden;
            /*width: 415px;*/
            width:100%;
            margin-bottom: -18px;
            max-width: 100%;
        }

        .flip-box {
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            perspective: 1000px;
            -webkit-perspective: 1000px;
        }

        .flip-box-front,
        .flip-box-back {
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            min-height: 250px;
            -ms-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-box-front {
            -ms-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-front {
            -ms-transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            -ms-transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }


         .inner {
            position: absolute;
            left: 0;
            width: 100%;
         
            outline: 1px solid transparent;
          
            perspective: inherit;
            z-index: 2;
            top: 87%;
        }

        .flip-box-header {
            font-size: 21px;
        }

        .flip-box p {
            font-size: 14px;
            line-height: 1.5em;
        }

        .flip-box-img {
            margin-top: 25px;
        }

        .flip-box-button {
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 2px;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            margin-top: 25px;
            padding: 15px 20px;
            text-transform: uppercase;
        }

        .image-stack__item--top img {
            border: 10px solid #fff;
            -webkit-box-shadow: 0 15px 30px -18px rgb(0 0 0 / 20%);
            box-shadow: 0 15px 30px -18px rgb(0 0 0 / 20%);
        }

        .image-stack__item--bottom img {
            border: 10px solid #fff;
        }



        .owl-carousel .owl-nav button.owl-next {
            background: #ffff;
            box-shadow: 0px 0px 10px grey;
            float: right;
        }

        .owl-carousel .owl-nav button.owl-prev {
            background: #fff;
            box-shadow: 0px 0px 10px grey;
            float: right;
        }

        .owl-theme .owl-nav {
            margin-top: -70px;
        }

        .owl-theme .owl-nav [class*=owl-] {
            color: #a56363;
            font-size: 17px;
            padding: 5px;
            background: #d6d6d67a;
            display: inline-block;
            cursor: pointer;
            border-radius: 50px;
            border: 0px;
        }

 #owl-demo-5 .owl-nav [class*=owl-] {
            color: #a56363;
            font-size: 17px;
            padding: 5px;
            margin-top:25px;
            background: #d6d6d67a;
            display: inline-block;
            cursor: pointer;
            border-radius: 50px;
            border: 0px;
        }

        #owl-demo-1 .owl-item img {
            display: block;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 0px 7px grey;
        }


        .owl-carousel .owl-item img:hover {
            width: 100%;
            border-radius: 10px;
      border: 1px solid #fff;
            /*transform: translate3d(0px, 2px, 0px);*/
        }

        .flip-box-img {
            width: 30px;
            box-shadow: 0px 0px 7px grey;
            border-radius: 50px;

        }

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


.goog-te-gadget .goog-te-combo {
    margin: 4px 0;
    width: 134px;
}


#langma-pool {
      background: linear-gradient(rgb(0 0 0 ), rgb(85 85 94 / 16%)), url({{ asset('frontend/css/langma-components/img/website-growth.webp') }}) center center no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

  
h2{
    font-size:24px;
}
.effective{
    display: none;
}
.navbar-brand img{
 width:170px;
height: auto;
}

.langma-hii img{
    width:100%;
    height:auto;
}



@media only screen and (max-width: 768px) {

 .intl-tel-input .country-list {
     white-space: normal;
            }


        .slider-title {
    position: absolute;
      top: -140px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

        

        p{
            font-size:13px;
            padding: 0px;
        }


h2{
    font-size:18px;
}
    #changeText {
    text-transform: uppercase;
    background-image: linear-gradient( -225deg, #f2f8f8 0%, #ffc837 29%, #ff136159 67%, #fff800 100%);
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: none;
    animation: none;
   display: inline-flex;
    font-weight: bold;
    font-family: system-ui;
    font-size:18px;
       margin-top: 0px;
}

.new-language{
    margin-top:-10px;
}

.effective{
    display: block;
    font-size:20px;
    font-weight: 700;
}




    .flip-box-front,
        .flip-box-back {
            background-size: cover;
            background-position: center;
            border-radius: 8px;


            -ms-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
   .flip-box .inner {
    position: absolute;
    left: 0;
    width: 100%;
    padding: 2px;
    outline: 1px solid transparent;
    -webkit-perspective: inherit;
    perspective: inherit;
    z-index: 2;
    transform: translateY(-50%) translateZ(60px) scale(.94);
    -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
    -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
    top: 50%;
}

.flip-box p {
    font-size: 19px;
    line-height: 1.5em;

}

.flip-box-header {
    font-size: 22px;
}

.navbar-brand img{
 width:100px;
height: auto;
}
}

@media only screen and (max-width: 668px) {
    .slider-title {
    position: absolute;
      top: -49px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height:84%;
}
}


/*@media (0px <= width <= 359px) {
.slider-title {
    position: absolute;
      top: -49px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
}

@media (359px <= width <= 464px) {
.slider-title {
    position: absolute;
      top: -68px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 66%;
}
}*/


.service-item .service-text .btn-one {
    width: 31px;
    height: 31px;
    display: inline-flex;
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    transition: .3s;
}

.service-item .service-text2 .btn-one {
    width: 31px;
    height: 31px;
    display: inline-flex;
    align-items: center;

    white-space: nowrap;
    overflow: hidden;
    transition: .3s;
}

.service-item .service-text3 .btn-one {
    width: 31px;
    height: 31px;
    display: inline-flex;
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    transition: .3s;
}

.service-item:hover .service-text .btn-one {
    width: 112px;
}
.service-item:hover .service-text2 .btn-one {
    width: 112px;
}
.service-item:hover .service-text3 .btn-one {
    width: 122px;
}
.btn-one{
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
  color: #000;
    background: #fff;
}


.submit{
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    text-decoration: none;
    text-align: center;
 vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    background-color: #157347;
}

.btn-sm, .btn-group-sm>.btn-one  {
    padding: 0.25rem 0.5rem;
    font-size: .875rem;
    border-radius: 4px;
}

.card.card-img-scale img {
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-transform: scale(1.001);
          transform: scale(1.001);
}
.card.card-img-scale:hover img {
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
}
.read-more{
color:#9D2F58;
}
.read-more:hover{
        background: #296166;
        color:#fff;
}

.form-floating .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaaaaa2e;
    border-radius: 50px;
    height: 40px;
    box-shadow: 0px 0px 2px grey;
    width: 100%;
}
  .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.0rem rgba(40, 167, 69, 0.25);
        }
        
        
         .owl-carousel .tour-item {
            opacity: 0.4;
        }
        
        .owl-carousel .center .tour-item {
            opacity: 1;
        }
        
        .tour-item img.tm-people {
            width: 60px;
            height: 60px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            -o-object-fit: cover;
            object-fit: cover;
            max-width: none;
        }
        
        .fa-quote-left {
            color: #ffc107;
        }
        
        .fa-quote-right {
            color: #ffc107;
        }
        
        .fa-star {
            color: #ffc107;
        }
       
           #owl-video .owl-item img:hover {
                width: 60px;
    height: 60px;
        border-radius: 50%;
            object-fit: cover;
    max-width: none;
        } 
        
        .levalint{
         font-size: 42px;
        }
        .levalplus{
               font-size: 42px;
        }
        @media only screen and (max-width: 600px) {
                .levalint{
         font-size: 24px;
        }
        .levalplus{
               font-size: 30px;
        }
        
         .levalplus span{
               font-size: 24px;
        }
        
        }
        
        
     </style>

<!-- Top Feature Start -->

<div>

    <div class="new-language py-5">
         <!--<p class="effective text-center mb-4">Language made simple and effective</p>-->
        <div class="container-xxl mt-0">
            <div class="container">
                <div class="row justify-content-center align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="mt-5">
                            <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;"><span style="font-size: 18px; font-weight:normal; color:#000;">Welcome To</span><br>Langma School of Languages</h2>
                            <p data-aos="fade-up" data-aos-delay="200" style="text-align: justify;">The acquisition of a new language at Langma would offer you a deeper insight into the language; give you a chance of immersing and experiencing a new culture. The Institution offers tailored programmes (intensive or extensive) to cater to the need of students or corporate houses. Langma is one of the best foreign language institutes inthe world. Langma School of Languages has been a pioneer in the field of imparting knowledge of foreign languages since its inception in 2007 and we are the only foreign language institution to offer foreign language courses in above 50+ International and Regional languages. Some of our remarkable initiatives like distance learning programmes and languages for academics distinguish us from others.</p>
                            <p class="my-4 text-end" data-aos="fade-up" data-aos-delay="300" style="text-align: justify;">
                           <a href="{{ url('about-us') }}" class="read-more" style="box-shadow: 0px 0px 5px #343a4047; border:0px solid; border-radius: 3px;">Know More  <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                          </div>
                      </div>

                      <div class="col-lg-6  mt-5 mb-lg-0 ">
                          <div class="langma-hii">
                          <img src="{{ asset('frontend/css/langma-components/img/langma-hii.webp') }}" width="600"  height="400" class="medium py-2" title="langma-hii" alt="langma-hii.webp" loading="lazy">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    

        <div class="container-fluid" id="all-langauges">
            <div class="text-center">
                <h2 style="font-family: 'Poppins', sans-serif;" class="text-black text-rotater mb-3">New Language, <span id="changeText2" style="color:#9D2F58;"> New Vision</span></h2>
            </div>

            <div class="row justify-content-center mb-2">
                <div class="col-lg-8" id="salect-one">
                    <select title="country" id="nameid" class="w-100">
                             <option value="">Select your country</option>
                        @foreach ($languages as $language)
                                    <option value="{{ url('/' . $language->url) }}">{{ $language->title }}</option>
                                @endforeach
                     </select>
                </div>
            </div>
            <script>
                var textt = ["New Culture", "New Careers", " New Connections", "New Experience", "New Thinking"];
                var counterr = 0;
                var elemm = document.getElementById("changeText2");
                var inst = setInterval(change, 3000);

                function change() {
                    elemm.innerHTML = textt[counterr];
                    counterr++;
                    if (counterr >= textt.length) {
                        counterr = 0;
                        // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
                    }
                }
            </script>

        </div>

        <div class="section">
     <div class="container-fluid">
        <div class="container">
            <div class="text-center mb-5">
             
                <h2 class="heading1 mb-3" style="font-family: 'Poppins', sans-serif; color:#296166;">CHOOSE THE RIGHT FOREIGN LANGAUGE</h2>
            </div>
            <div class="owl-carousel owl-theme"  id="owl-demo-1">

                @foreach ($languages as $language)
                <div class="item">
                    <div class="text-center">
                        <a target="_blank" href="{{ url('/' . $language->url) }}" rel="noopener">
                            <img srcset="{{ asset('normal_images/' . $language->image) }}"  src="{{ asset('normal_images/' . $language->image) }}"  alt="{{ $language->title }}" class="w-100 h-auto" loading="lazy">
                          </a>
                          <p class="fw-normal center text-wrap text-break fw-bold"><span>
                            <a target="_blank" href="{{ url('/' . $language->url) }}" style="color:#9D2F58;" rel="noopener" >{{ $language->title }}</a>
                            </span></p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        </div>
      
        
      <div class="section">
        <div class="container-fluid facts my-5" id="example1">
            <div class="container py-5">
                <div class="row g-5 p-lg-5">
                    <div class="col-12 col-lg-12 text-center wow fadeIn p-lg-5" data-wow-delay="0.1s">
                        <h3 style="color: #fff; font-family: sans-serif;   border-radius: 17px; font-size: 29px;     line-height: 39px;"> Langma has been providing individuals, businesses, NGO’s and Government Agencies achieving their language proficiency goals in more than 50+
                            languages Since 2012.
                        </h3>
                    </div>

                </div>
            </div>
        </div>
              </div>
              
                 <div class="section">
          <div class="container-lxx">
            <div class="container mb-5">
<div class="mb-2 py-2">
 <!--    <h3 class="text-capitalize text-center"  style="font-family:system-ui; color:#2A6165; font-size:20px;">WE PREPARE YOU FOR</h3>-->
 <!--<h3 class="text-capitalize text-center" style="font-family:system-ui; color: #000; font-size:27px;">INTERNATIONAL EXAM</h3>-->
 <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;"><span style="font-size: 18px; font-weight:normal; color:#000;">We Prepare You For</span><br>International Exam</h2>
</div>

                <div class="owl-carousel owl-theme"  id="owl-demo-5">
                       
               @foreach($exams as $exam)

                    <div class="item">
                        <div>
                            
                                <img class="img-responsive  rounded-3" src="{{asset('normal_images/'.$exam->image)}}"
                                    title="{{$exam->title}}" alt="{{$exam->title}}" width="200" height="1" style="height:auto;">
                        </div>

                    </div>
               @endforeach
      
                </div>

            </div>
        </div>
           </div>
           
           <div class="container">
    <div class="container">
        <div class="mb-2 py-2">
 <!--    <h3 class="text-capitalize text-center"  style="font-family:system-ui; color:#2A6165; font-size:20px;">WE PREPARE YOU FOR</h3>-->
 <!--<h3 class="text-capitalize text-center" style="font-family:system-ui; color: #000; font-size:27px;">INTERNATIONAL EXAM</h3>-->
 <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;"><span style="font-size: 18px; font-weight:normal; color:#000;">Why you Should</span><br>Learn From Langma</h2>
</div>

        <div class="row g-5">

            <div class="col-lg-8 mb-4">
                <div class="row g-5">
                    <div class="col-lg-6">
                  
                            <div class="product">
                                <div class="imgbox">
                                    <img src="https://langmainternational.com/normal_images/personalization-.webp" alt="personalization" class="w-100">
                                </div>

                                <div class="specifies text-center">
                                    <h2 class="text-white text-white p-3 mb-2" style="font-size: 18px font-weight: 600 !important;">Personalized Courses</h2>
                                    <p>We provide customized courses for individuals, employed person according to the requirement of the candidate.Also customize the program according to the industry’s requirement. </p>
                                </div>
                            </div>

                  
                    </div>
                    <div class="col-lg-6">
                       
                            <div class="product">
                                <div class="imgbox">
                                    <img src="https://langmainternational.com/normal_images/flexible-time.webp" alt="flexible-time" class="w-100">
                                </div>

                                <div class="specifies text-center">
                                    <h2 class="text-white text-white p-3 mb-2" style="font-size: 18px font-weight: 600 !important;">Flexible Timing</h2>
                                    <p>Online and offline modes are available for all languages, and for students connecting via internet, the suitable time slot can be offered that aligns with the country’s timings.
                                    </p>
                                </div>
                            </div>

                    </div>
                    <div class="col-lg-6">
                
                            <div class="product">
                                <div class="imgbox">
                                    <img src="https://langmainternational.com/normal_images/placement-opportunities.webp
                                    " alt="placement-opportunities" class="w-100">
                                </div>

                                <div class="specifies text-center">
                                    <h2 class="text-white text-white p-3 mb-2" style="font-size: 18px font-weight: 600 !important;">Placement Opportunity</h2>


                                    <p>Upon completion of the foreign language courses, students will be offered placements or internships. Our network of partners hire candidates for linguistic skills.
                                    </p>
                                </div>
                            </div>
                      
                    </div>
                    <div class="col-lg-6">
                            <div class="product">
                                <div class="imgbox">
                                    <img src="https://langmainternational.com/normal_images/one-to-one.webp" alt="one-to-one" class="w-100">
                                </div>

                                <div class="specifies text-center">
                                    <h2 class="text-white text-white p-3 mb-2" style="font-size: 18px font-weight: 600 !important;">One-One Sessions</h2>
                                    <p>Langma provides One-One personalized training sessions with industry mentors. Fostering a growth-oriented and accessible environemnt to boost critical thinking. </p>
                                </div>
                            </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-4">
               <div class="box-item">
                  
                            <div class="">
                                
                                <div loading="lazy" class="flip-box-front text-center filter- w-100" style="background-image:url('https://langmainternational.com/normal_images/close-up-graduation-diploma.webp'); height: 552px;">
                                    
                                    <div class="inner color-white">
<div style="background: #296166; height: 72px; border-radius: 0px 0px 10px 10px;" class="p-3">
        <h3 class="flip-box-header" style="font-size: 18px;">50+ Certification Diploma Programs</h3>
</div>
                                    
                                    
                                    </div>
                    
                                  
                                    
                                    
                                    
                                   
                                </div>
                             
                            </div>
                      
                            
                        </div>
                        
                                    
            </div>

        </div>
    </div>
</div>
           
           
       <!--       <div class="section">-->
       <!--<div class="container">-->
       <!--     <div class="box-container">-->
       <!--         <div class="row g-2 d-flex justify-content-center">-->
       <!--             <div class="col-lg-8 col-md-12">-->
       <!--                 <div class="row">-->
       <!--                     <div class="col-lg-12 col-12">-->
       <!--                         <div class="row g-2 d-flex justify-content-center">-->
       <!--                             <div class="col-lg-6  col-md-6  mb-4 col-12">-->
       <!--                                 <div class="box-item">-->
       <!--                                     <div class="flip-box">-->
       <!--                                         <div class="flip-box-front text-center" style="background: linear-gradient(rgb(82 83 104 / 99%), var(--bs-gray-dark));">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <img src="{{ asset('frontend/css/langma-components/img/right.webp') }}" alt="cta-arrow" width="30" height="30" class="flip-box-img">-->
       <!--                                                 <h3 class="flip-box-header">Personalization</h3>-->
       <!--                                                 <p class="card-text fw-normal">The language courses in Langma School can be personalized based on the requirement of the candidate.</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                         <div class="flip-box-back text-center" style="background:linear-gradient( rgb(185, 62, 74) 100%, rgba(220, 53, 69)100%);">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <p class="mb-2 text-white">We provide customized programs based on the purpose of study and convenient time period or duration (academic, examination, business or employment) if it is an employed individual, we further customize-->
       <!--                                                     the program according to the industry, including vocabulary from the respective field.</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                     </div>-->
       <!--                                 </div>-->
       <!--                             </div>-->

       <!--                             <div class="col-lg-6  col-md-6 mb-4 col-12">-->
       <!--                                 <div class="box-item">-->
       <!--                                     <div class="flip-box">-->
       <!--                                         <div class="flip-box-front text-center" style="background:#2A6165;">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <img src="{{ asset('frontend/css/langma-components/img/right.webp') }}" alt="" class="flip-box-img"  width="30" height="30">-->
       <!--                                                 <h3 class="flip-box-header">Flexible</h3>-->
       <!--                                                 <p class="card-text fw-normal">Candidate is able to select the timings and mode for the language classes.</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                         <div class="flip-box-back text-center" style="background:linear-gradient( rgba(0, 0, 0, 0.603) 100%, rgba(0, 0, 0, 0.6)100%),url('{{ asset('normal_images/flexible.webp') }}');">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <p class="mb-2 text-white">Online and offline modes are available for all languages, and for students connecting via internet, the suitable time slot can be offered that aligns with the country’s timings. Also the option of-->
       <!--                                                     taking individual or group classes is made available for candidates.</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                     </div>-->
       <!--                                 </div>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                     <div class="col-lg-12 col-12">-->
       <!--                         <div class="row g-1 d-flex justify-content-center">-->
       <!--                             <div class="col-lg-6 col-md-6  mb-4">-->
       <!--                                 <div class="box-item">-->
       <!--                                     <div class="flip-box">-->
       <!--                                         <div class="flip-box-front text-center" style="background-color: rgb(128, 128, 240); z-index: 289;">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <img src="{{ asset('frontend/css/langma-components/img/right.webp') }}" alt="right-arrow" class="flip-box-img"  width="30" height="30" loading="lazy">-->
       <!--                                                 <h3 class="flip-box-header">Placement Opportunity</h3>-->
       <!--                                                 <p class="card-text fw-normal">Upon completion of the foreign language courses, students will be offered placements or internships</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->

       <!--                                         <div  class="lazy flip-box-back text-center" style="background-image:linear-gradient( rgba(0, 0, 0, 0.603) 100%, rgba(0, 0, 0, 0.6)100%),url('{{ asset('normal_images/placement.webp') }}');">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <p class="mb-2 text-white">within our network of partners who hire candidates for linguistic skills. Our clients are from different industries and students can select according to their preferences.</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                     </div>-->
       <!--                                 </div>-->
       <!--                             </div>-->

       <!--                             <div class="col-lg-6  col-md-6 mb-4">-->
       <!--                                 <div class="box-item">-->
       <!--                                     <div class="flip-box">-->
       <!--                                         <div loading="lazy" class="flip-box-front text-center" style="background: linear-gradient(rgb(82 83 104 / 99%), var(--bs-gray-dark));">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <img src="{{ asset('frontend/css/langma-components/img/right.webp') }}" alt="right-arrow" class="flip-box-img"  width="30" height="30">-->
       <!--                                                 <h3 class="flip-box-header">1:1 sessions with Industry Mentors</h3>-->
       <!--                                                 <p>Providing Live one - to - one Sessions with Personalized Training</p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->

       <!--                                         <div loading="lazy" class="flip-box-back text-center" style="background-image:linear-gradient( rgba(0, 0, 0, 0.603) 100%, rgba(0, 0, 0, 0.6)100%),url('{{ asset('normal_images/with-industry-mentor.webp') }}');">-->
       <!--                                             <div class="inner color-white">-->
       <!--                                                 <p class="mb-2 text-white">-->
       <!--                                                     Langma provides integrated customised curriculum with personalized training sessions and individual attention. Fostering a growth-oriented and accessible environemnt to boost critical thinking.-->
       <!--                                                 </p>-->
       <!--                                             </div>-->
       <!--                                         </div>-->
       <!--                                     </div>-->
       <!--                                 </div>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                 </div>-->
       <!--             </div>-->
       <!--             <div class="col-lg-4 col-12">-->
       <!--                 <div class="box-item">-->
       <!--                     <div class="flip-box">-->
       <!--                         <div loading="lazy" class="flip-box-front text-center filter-" style="background:#3b5998; height: 505px;">-->
       <!--                             <div class="inner color-white">-->
       <!--                                 <img src="{{ asset('frontend/css/langma-components/img/right.webp') }}" alt="cta-arrow" class="flip-box-img" width="30" height="30" loading="lazy">-->
       <!--                                 <h3 class="flip-box-header">50+ Certification Diploma Programs</h3>-->
       <!--                                 <p class="card-text fw-normal">Langma provides its learners with Certified Training Programs. We have over 50+ Diploma Courses to choose from. Spearhead your career with fast-paced learning and growth-oriented approach.</p>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div loading="lazy" class="flip-box-back text-center" style="background:linear-gradient(rgb(82 83 104 / 99%), var(--bs-gray-dark)); height: 505px;">-->
       <!--                             <div class="inner color-white">-->
       <!--                                 <p class="mb-2 text-white">-->
       <!--                                     Escalate your career prospects with Langma's Certified Diploma Courses and gear up your professional skills by assimilating assets and growth-oriented approach. Level-up your skills by enrolling in our Certified Diploma Courses and choose from 50+ options.-->
       <!--                                 </p>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                 </div>-->
       <!--             </div>-->
       <!--         </div>-->
       <!--     </div>-->
       <!-- </div>-->
       <!-- </div>-->

        
   <!-- Facts Start -->
      <div class="section d-none d-lg-block">
           <div class="container-fluid  my-5" id="langma-pool">
            <div class="container p-3 p-lg-5 ">
                <div class="row g-5 p-lg-5">
                    <!--<div class="text-light fw-bold fs-4 text-center">Langma's pool includes </div>-->
                    <div class="col-6 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <div><img src="{{ asset('frontend/css/langma-components/img/icon/report.webp') }}" style="width:14%; margin-left: 10px;" alt="report" class="img-fluid" loading="lazy" height="40" width="40"></div>
                        <div><span class="fw-bold text-light levalplus" style="position: absolute; margin-left: 26px;  margin-top: -10px;">+</span>
                            <div class="levalint display-4 text-white fw-bold" data-toggle="counter-up">50</div>
                            <span class="fs-4 fw-semi-bold text-light">LANGUAGES</span></div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.4s">
                        <div><img src="{{ asset('frontend/css/langma-components/img/icon/teacher1.webp') }}" style="width:14%; margin-left: 10px;" alt="teacher" class="img-fluid" loading="lazy" height="40" width="40"></div>
                        <span class="fw-bold text-light levalplus" style="position: absolute; margin-left: 39px;  margin-top: -10px;">+</span>
                        <div class="display-4 text-white fw-bold levalint" data-toggle="counter-up">300</div>
                        <p class="fs-4 fw-semi-bold text-light">TRAINERS</p>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.6s">
                        <div><img src="{{ asset('frontend/css/langma-components/img/icon/job-search1.webp') }}" style="width:14%; margin-left: 10px;" alt="job-search" class="img-fluid" loading="lazy" height="40" width="40"></div>
                        <span class="fw-bold text-light levalplus" style="position: absolute; margin-left: 26px; margin-top: -10px;"> <span >K</span>+</span>
                        <div class="levalint display-4 text-white fw-bold" data-toggle="counter-up">50</div>
                        <span class="fs-4 fw-semi-bold text-light">JOBS</span>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.8s">
                        <div><img src="{{ asset('frontend/css/langma-components/img/icon/presentation1.webp') }}" style="width:14%; margin-left: 10px;" alt="presentation" class="img-fluid" loading="lazy" height="40" width="40"></div>
                        <span class="fw-bold text-light levalplus" style="position: absolute; margin-left: 36px;  margin-top: -10px;"><span >K</span>+</span>
                        <div class="levalint display-4 text-white fw-bold" data-toggle="counter-up">100</div>
                        <span class="fs-4 fw-semi-bold text-light ms-4">STUDENTS TAUGHT</span>
                    </div>
                </div>
            </div>
        </div>
 </div>
        <!-- Facts End -->



        
    <!-- Service Start -->
     <div class="section">
            <div class="container-xxl py-5">
                <div class="container-fluid">
    <div class="text-start mb-5">
                  <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;">
                      <span style="font-size: 18px; font-weight:normal; color:#000;">Why Choose US</span><br>Our Vision/Mission</h2>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 fadeInUp" >
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">

                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('frontend/css/langma-components/img/icon/why-choose-us.webp') }}" alt="Why Choose Us" loading="lazy" width="64" height="64">
                                </div>
                                <h4 class="mb-3">Why Choose Us</h4>
                                <p style="line-height: 1.8;"><b>Langma School of Languages’</b> vision is to offer students, opportunities to create better lives for themselves and others surrounding by introducing them to other cultures and enriching their experiences, both locally and globally.
                                </p>
                                <a class="btn-one btn-sm" href="{{ url('about-us') }}"><i class="fa fa-plus me-2" style="color:#296166;"></i>Why Choose</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  fadeInUp">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">

                            </div>
                            <div class="service-text2 rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('frontend/css/langma-components/img/icon/mission.webp') }}" alt="OUR MISSION" loading="lazy" width="64" height="64">
                                </div>
                                <h4 class="mb-3">OUR MISSION</h4>
                                <p style="line-height: 1.8;">Langma School of Languages was founded with a vision of imparting knowledge of languages (International &amp; Regional). However, since its establishment, it has evolved and expanded its horizons. Langma School of Languages</p>
                                <a class="btn-one btn-sm" href="{{ url('about-us') }}"><i class="fa fa-plus  me-2"  style="color:#296166;"></i> Our Mission </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  fadeInUp">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">

                            </div>
                            <div class="service-text3 rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('frontend/css/langma-components/img/icon/what-you-get.webp') }}" alt="WHAT YOU GET" loading="lazy" width="64" height="64">
                                </div>
                                <h4 class="mb-3">WHAT YOU GET</h4>
                                <p style="line-height: 1.8;">
                                    Langma School of languages works on various international platforms to enhance individuals’ minds and skill-set competencies. In the present time, individuals have become extremely conscious about language learning given the vast range of global opportunities.
                                </p>
                                <a class="btn-one btn-sm" href="{{ url('what-we-get') }}"><i class="fa fa-plus  me-2"  style="color:#296166;"></i>What You Get </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

     
   
        
        
        <!-- Service End -->


      <section class="section mb-5">
            <div class="container-sm mt-5">
                <div class="shadow-lg mb-5 bg-body rounded-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="p-4 p-lg-3">
                                <div class="p-lg-5">
                                    <div class="text-center">
                                        <!--<img src="https://langmainternational.com/frontend/css/langma-components/img/langma-logo.webp" alt="langma Logo" width="160" height="46">-->
                                        <h3 class="heading1" style="color: #296166; font-family: 'Poppins', sans-serif;">Let's Get Connected</h3>
                                        <p class="mt-3" style="font-family: inherit; color:#000; font-weight: 600;">If You Have Any Query, Please Contact Us</p>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <form action="{{url('leads')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-user" style="color:#00000082;"></i></span>
                                                        <input type="text" name="name" class="form-control border-0 rounded-5" placeholder="Enter Your Name" onpaste="return false;" ondrop="return false;" autocomplete="off"   required>
                                                    </div>

                                                </div>
                                                <div class=" mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5 ">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-envelope" style="color:#00000082;"></i></span>
                                                        <input type="email" name="email" class="form-control border-0 rounded-5" placeholder="Enter Your Email" required onpaste="return false;" ondrop="return false;" autocomplete="off" >
                                                    </div>

                                                </div>
                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <!--<span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-address-book"></i></span>-->
                                                        <input type="tel" class="form-control border-0 rounded-5" placeholder="Enter Your Contact No" name="mobile" id="phone" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" onpaste="return false;" ondrop="return false;" autocomplete="off"  required>
                                                    </div>

                                                </div>


                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 form-floating">
                                                        <select name="language" id="nameido" class="w-100 border-0 required">
                                                <option value="English" selected="selected">English</option>
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
                                                        <!--<span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-user "></i></span>-->
                                                        <textarea class="form-control bg-light border-0" name="message" placeholder="Describe Your Requirement" id="message" required style="border-radius: 14px;" onpaste="return false;" ondrop="return false;" autocomplete="off" ></textarea>
                                                    </div>

                                                </div>
                                              <input type="hidden"  name="currenturl" value="{{ url()->current() }}">


                                                <button type="text " class="btn  w-100 rounded-5 text-light" style="background: #296166; font-weight: 600;">Submit</button>
                                            </form>

                                        </div>

                              
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="w-100  rounded-end" style="background: linear-gradient(#d6338400, rgb(220 53 69 / 0%)), url(https://langmainternational.com/frontend/css/langma-components/img/website-business-photo.webp) center center no-repeat; height: 100%;">
                                <div class="text-center p-5">
                                    <div class="text-center p-5 mt-5"></div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


          
    <div class="section">
            <div class="container">
                <div class="text-start mb-5">
                  <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;">
                      <span style="font-size: 18px; font-weight:normal; color:#000;">Success Stories</span><br>What Our Client Says</h2>
                </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel owl-theme" id="owl-video">

                    <div class="item-video" data-merge="3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded border-1 border">

                            <div class="tour-item">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center mb-2"><i class="fa-solid fa-quote-left"></i> I have been learning German from ' Tarun Sir '. it has been a great experience. He is a very thoughtful teacher. He was very patient with everyone in class.... always encouraging
                                        his students to try. I would highly recommend him to anyone interested in learning German.
                                        <i class="fa-solid fa-quote-right"></i></div>
                                    <div class="d-flex justify-content-center pt-2 pb-2 mb-2"><img class="tm-people border-3 border" src="https://lh3.googleusercontent.com/a-/ACNPEu8HCLpwEyCCpoQGJpoCriho-KMTYlifRjqaWN0v=w60-h60-p-rp-mo-br100" alt=""></div>
                                    <div class="d-flex justify-content-center mb-2 mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                    <div class="link-name d-flex justify-content-center" style="font-weight: 600;">Kunal Kainth</div>

                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-video" data-merge="3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded border-1 border">

                            <div class="tour-item">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center mb-2"><i class="fa-solid fa-quote-left"></i> Brilliant and clear teaching style that makes the fundamentals understandable. excellent teaching resources The kindest, most sympathetic, and patient French instructor I have
                                        ever had is Professor John. He clarified the French pronunciation by using English phonetics. <i class="fa-solid fa-quote-right"></i></div>
                                    <div class="d-flex justify-content-center pt-2 pb-2 mb-2"><img class="tm-people border-3 border" src="https://lh3.googleusercontent.com/a-/ACNPEu9qScPsr1JwTw0SoarvLMSft3bAiIMlsPIL0ITm=w60-h60-p-rp-mo-ba3-br100" alt=""></div>
                                    <div class="d-flex justify-content-center mb-2 mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                    <div class="link-name d-flex justify-content-center" style="font-weight: 600;"> Riya das</div>

                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-video" data-merge="3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded border-1 border">

                            <div class="tour-item">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center mb-2"><i class="fa-solid fa-quote-left"></i> It’s always worth spending money to upgrade our communication skills and believe me, Langma is the right place to go for it. I’m from Sharjah and after investing 6 months in this
                                        English course, I can say that my confidence has improved a lot. A very big thanks to their whole team for providing the best teacher & services for me <i class="fa-solid fa-quote-right"></i></div>
                                    <div class="d-flex justify-content-center pt-2 pb-2 mb-2"><img class="tm-people border-3 border" src="https://lh3.googleusercontent.com/a-/ACNPEu9Cy5EdRfLR71kxMRiOpZq-JDv1cNPbw6vLgoDn=w60-h60-p-rp-mo-br100" alt=""></div>
                                    <div class="d-flex justify-content-center mb-2 mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                    <div class="link-name d-flex justify-content-center" style="font-weight: 600;">Mohamed Anwar</div>

                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-video" data-merge="3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded border-1 border">

                            <div class="tour-item">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center mb-2"><i class="fa-solid fa-quote-left"></i> I'm learning Spanish here and I'm very happy with the experience because of our trainer Nisha ma'am. She has helped us a lot so far with our Spanish language. She has been an amazing
                                        guide, trainer and a friend and is always there whenever we need her with our issues.<i class="fa-solid fa-quote-right"></i></div>
                                    <div class="d-flex justify-content-center pt-2 pb-2 mb-2"><img class="tm-people border-3 border" src="https://lh3.googleusercontent.com/a/ALm5wu3rHrXABqmRUFmoW_q80hPbMUmOzHQsHl14a7ol=w60-h60-p-rp-mo-br100" alt=""></div>
                                    <div class="d-flex justify-content-center mb-2 mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                    <div class="link-name d-flex justify-content-center" style="font-weight: 600;">Radhika Sachdeva</div>

                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
     </div>
     
    <div class="section mb-5">
               <div class="py-3">
            <div class="container">
                <div class="text-start mb-5">
                  <h2 class="heading1 mb-3" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Poppins', sans-serif; color:#296166;"><span style="font-size: 18px; font-weight:normal; color:#000;">
                      Our Eminent Clients</span><br>Langma Is Associated With The Best
                     </h2>
                </div>
                <div class="owl-carousel owl-theme p-3" style="background-color: #F9F9F9;" id="owl-demo-2">
                    <div class="item py-3">
                        <div class="text-center">
                           
                                <img src="https://langmainternational.com/normal_images/university-of-delhi.webp" alt="university-of-delhi" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;" loading="lazy">
                 
                        </div>
                    </div>

                    <div class="item py-3">
                        <div class="text-center">
                       <img src="https://langmainternational.com/normal_images/bhinneka-tunggal-ika.webp" loading="lazy" alt="ARABIC" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;">
                        </div>
                    </div>

                    <div class="item py-3">
                        <div class="text-center">
                          
                                <img src="https://langmainternational.com/normal_images/yamaha.webp" loading="lazy" alt="yamaha" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;">
                       
                        </div>
                    </div>

                    <div class="item py-3">
                        <div class="text-center">
                         
                                <img src="https://langmainternational.com/normal_images/andrade-gutierrez.webp" loading="lazy" alt="andrade-gutierrez" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;">

                        </div>
                    </div>

                    <div class="item py-3">
                        <div class="text-center">
                        
                                <img src="https://langmainternational.com/normal_images/samsung.webp" loading="lazy" alt="samsungC" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;">
                   
                        </div>
                    </div>

                    <div class="item py-3">
                        <div class="text-center">
                         
                                <img src="https://langmainternational.com/normal_images/accenture.webp" loading="lazy" alt="accenture" style="width:56%; height:88px;  border-radius: 0px;   box-shadow: 0px 0px 0px grey;">
                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
        <script>
             $(document).ready(function() {
        $('#owl-demo-1').owlCarousel({
              stagePadding: 50,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            nav: true,
            autoplayHoverPause: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    $(document).ready(function() {
    $('#owl-demo-2').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            nav: true,

            autoplayHoverPause: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    $(document).ready(function() {
    $('#owl-demo-6').owlCarousel({
        loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: true,
         
            autoplayHoverPause: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
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
    });
    
      $(document).ready(function() {
    $('#owl-demo-5').owlCarousel({
        // slideBy: 2,
         center: true,
            items:3,
            loop:true,
            margin:30,
            nav:false,
            dots:true,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 2000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
            
        
        });
    });
      $(document).ready(function() {
    $('#owl-demo-7').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    
        });

    });
</script>

    <script>
        $(document).ready(function() {
            $('#owl-video').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 20,
                 autoplay:true,
           autoplayTimeout:3000,
             autoplayHoverPause:true,
                video: true,
                lazyLoad: true,
                center: true,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                }
            })
        })
    </script>
<script>
    var input = document.querySelector("#phone");
    intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                success(countryCode);
            });
        },
    });
</script>
@endsection
