@extends('frontend.layouts.app')
{{-- @section('title', 'about') --}}
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
		<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url({{ asset('normal_images/' . $bg_banner) }}); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

			{{-- <div class="container clearfix">
				<h1>About Us</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</div> --}}

		</section>
		<!-- #page-title end -->
@endsection

@section('content')
    <!-- Content
                          ============================================= -->
    <section id="content">
        <div class="content-wrap">

            {{-- <a href="{{ url('/') }}" class="button button-full button-purple center text-end header-stick bottommargin-lg">
                <div class="container clearfix">
                    <i class="icon-caret-right" style="top:4px;"></i>
                    Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong>
                </div>
            </a> --}}

            <div class="button button-full button-purple center text-end header-stick bottommargin-lg">
                <div class="container clearfix">
                    <a href="{{ url('/') }}">
                        <i class="icon-home" style="top:4px; right: 17px;"></i>

                    </a>
                    <i class="icon-caret-right" style="top:4px;"></i>
                    {{ $item->title }}
                </div>
            </div>

            <div class="container clearfix">
                {{-- <div class="heading-block center">
                    <h1>{{ $item->title }}</h1>
                    {{-- <span>We almost blog regularly about this &amp; that.</span> --}}
                {{-- </div> --}}
                <!-- Posts
    ============================================= -->
                <div id="posts" class="row gutter-30">
                    <div class="entry col-12">
                        <div class="grid-inner">
                            @if ($item->image)
                                <div class="entry-image">
                                    <a href="{{ asset('normal_images/' . $item->image) }}" data-lightbox="image">
                                        <img src="{{ asset('normal_images/' . $item->image) }}"
                                            alt="{{ $item->title }}">
                                    </a>
                                </div>
                            @endif
                            {{-- <div class="entry-title">
<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
</div>
<div class="entry-meta">
<ul>
<li><i class="icon-calendar3"></i> 10th February 2021</li>
<li><a href="#"><i class="icon-user"></i> admin</a></li>
<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a>
</li>
<li><a href="#"><i class="icon-camera-retro"></i></a></li>
</ul>
</div> --}}
                            <div class="entry-content">
                                {!! $item->content !!}
                                {{-- <a href="blog-single.html" class="more-link">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #posts end -->
            </div>
        </div>
    </section>
    <!-- #content end -->
@endsection
