@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title', $item->seo_title)
@section('description', $item->seo_content)
<!--@section('description', $item->seo_description)-->
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')

@section('slider')


   <div class="container-fluid jap-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(15, 66, 41, .6), rgba(15, 66, 41, .6)), url({{asset('normal_images/'.$item->image)}}) center center no-repeat; background-size: cover; background-attachment: fixed;">
            <div class="container text-center py-5" style="height: 250px;">
                <h1 class="display-3  mb-4 animated slideInDown" style="color: #fff; font-family: system-ui;">{{$item->title}}</h1>

            </div>
        </div>
@endsection

@section('content')
	<div class="container mb-3">
	    <div>
	      <div class="text-uppercase fw-bold"><h2 style="color: #4a97a2; font-size: 17px;">{{$item->title}}</h2></div>  

	    <!--<div class="text-uppercase fw-bold"><p style="color: #4a97a2; font-size: 15px;">{{$item->created_at}}</p></div>  -->
	        </div>
	        	<div class="entry-content mt-0" style="font-size:14px; text-align: justify;">
	        	         <img src="{{asset('normal_images/'.$item->image)}}" alt="Blog Single" style="width:50%; float:right;" class="p-3">
              {!! $item->content !!}
				</div>
	    </div>
	  

@endsection
