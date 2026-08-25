<title>@yield('title')</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="PADRM2EPyYIU80yi2zuCSN3yhYWr34K_IoHFNx2ddDk" />
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta property="fb:app_id" content="202758724398220" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="@yield('type')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:image" content="@yield('image')" />
<meta property="og:image:url" content="@yield('image_url')" />
<meta property="og:image:type" content="@yield('title')" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('normal_images/favicon-32x32.png') }}">
<meta name="theme-color" content="#007aff"/>
<meta name="google-site-verification" content="PADRM2EPyYIU80yi2zuCSN3yhYWr34K_IoHFNx2ddDk" />
<meta name="google-site-verification" content="bF9VhlE_o65rWxL1qFSggc8g8fuqTAD-Dvae6IMW38k" />
<meta name="facebook-domain-verification" content="0hi688f1pp66r2fazg0bufqc3oag3v"/>
<link rel="canonical" href="@yield('url')" />
<link rel="apple-touch-icon" href="{{ asset('normal_images/favicon-32x32.png') }}">
<!-- Stylesheets
============================================= -->
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

<!--<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/style.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" type="text/css">-->
<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
<!--<link rel="stylesheet" href="{{ asset('frontend/include/rs-plugin/css/settings.css') }}" media="screen" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/include/rs-plugin/css/layers.css') }}" type="text/css">-->
<!--<link rel="stylesheet" href="{{ asset('frontend/include/rs-plugin/css/navigation.css') }}" type="text/css">-->

<!--<link rel="stylesheet" href="{{ asset('frontend/css/swiper.css') }}" type="text/css">-->
 


<!--<link rel="preload" href="{{ asset('frontend/js/jquery.js') }}" as="script">-->

<link rel="manifest" href="{{ asset('frontend/manifest.json') }}" type="application/json">
<!-- Document Title
============================================= -->
 <style>
        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: "Poppins", sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #fff;
            border-bottom: 2px solid #fff;
        }
        
        .revo-slider-desc-text {
            font-size: 20px;
            font-family: "Lato", sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }
        
        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: "Poppins", sans-serif;
        }
        
        .tp-video-play-button {
            display: none !important;
        }
        
        .tp-caption {
            white-space: nowrap;
        }
    </style>
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
<style>
    .banner-img{
        width:100%;
        height:650px;
    }
    @media screen and (min-device-width: 0px) and (max-device-width: 768px) { 
    .banner-img{
        width:100%;
        height:auto;
    }
}
    .banner-img1{
        width:100%;
        height:650px;
    }
    @media screen and (min-device-width: 0px) and (max-device-width: 768px) { 
    .banner-img1{
        width:100%;
        height:450px;
    }
}
</style>

<!-- google conversion tracking Global site tag (gtag.js) - Google Ads: 1001957978 -->
<script src="https://www.googletagmanager.com/gtag/js?id=AW-1001957978"></script>
 <!--<link rel="preload" href="https://www.googletagmanager.com/gtag/js?id=AW-1001957978" as="script">-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1001957978');
</script>
 <!-- Load Facebook SDK for JavaScript -->
    <!--<div id="fb-root"></div>-->
    
    <!--<script>-->
     
    <!--     window.fbAsyncInit = function(){-->
    <!--    FB.init({-->
    <!--        xfbml:{passive: true},-->
    <!--       version: 'v7.0'-->
    <!-- });-->
    <!-- };-->
    
    
    <!--(function(d, s, id) {-->
    <!--    var js, fjs = d.getElementsByTagName(s)[0];-->
    <!--     if (d.getElementById(id)) return;-->
    <!--     js = d.createElement(s);-->
    <!--    js.id = id;-->
    <!--     js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';-->
    <!--     fjs.parentNode.insertBefore(js, fjs);-->
    <!-- }(document, 'script', 'facebook-jssdk'));-->
    
    <!--</script>-->

    <!-- Your Chat Plugin code -->
    <!--<div class="fb-customerchat" page_id="374516869284427"></div>-->
    <!--attribution=setup_tool-->
