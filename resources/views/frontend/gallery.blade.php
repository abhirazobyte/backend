@extends('frontend.layouts.app')
<!--<link href="{{ asset('frontend/css/lightbox.min.css') }}" rel="stylesheet">-->
{{-- @php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '') 
--}}
@section('title', 'Langma School of Languages Gallery, Foreign Language Institute Gallery')
@section('description', 'View the gallery of Langma School of Languages in Delhi, India. Explore the internal images, staffs and events pics of Langma.')
@section('keywords', 'Gallery of Langma School of Languages, Gallery of Foreign Language Institute')
@section('slider')
    <!-- Page Title
      ============================================= -->
            <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/gallery-page-banner.webp) center center no-repeat;background-size: cover;height: 500px;">
                <!--background-attachment: fixed;-->
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center" style="color: #ffff; font-family: system-ui; margin-top:100px;"> GALLERY </h5> 

            </div>
        </div>

@endsection
@section('content')
       <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            
            <!--<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">-->
            <!--    <p class="fs-5 fw-bold text-primary">Our Projects</p>-->
            <!--    <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>-->
            <!--</div>-->
            
             <div class="row wow fadeInUp" data-wow-delay="0.3s">
               <div class="col-12 text-center">
                   <ul class="list-inline rounded mb-5" id="portfolio-flters">
                       <li class="mx-2 active" data-filter="*">All</li>
                       @foreach ($data_filters as $data_filter)
                       <li class="mx-2" data-filter=".{{ $data_filter->data_filter }}">{{ $data_filter->data_filter }}</li>
                       @endforeach
                   </ul>
               </div>
            </div>
            
            <div class="row g-4 portfolio-container">
                  @foreach ($galleries as $gallery)
                  @if ($gallery->type == 'image')
                <div class="col-lg-4 col-md-6 portfolio-item {{ $gallery->data_filter }} wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" loading="lazy" src="{{ asset('normal_images/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">{{ $gallery->title }}</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('normal_images/' . $gallery->image) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endif
            @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
