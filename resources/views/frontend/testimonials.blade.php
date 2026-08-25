@extends('frontend.layouts.app')
{{-- @php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title', $item->seo_title)
@section('description', $item->seo_description)
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '') --}}
@section('slider')
    <!-- Page Title
              ============================================= -->
    {{-- <section id="page-title" class="page-title-parallax page-title-dark include-header"
        style="padding: 250px 0; background-image: url({{ asset('normal_images/' . $bg_banner) }}); background-size: cover; background-position: center center;"
        data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    </section> --}}

@endsection

@section('content')
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<h3 class="pb-3 pt-5">Testimonials</h3>
					<div class="masonry-thumbs grid-container grid-2" data-big="3" data-lightbox="gallery">
					    <div class="row">
                        @foreach($items as $item)
                         <div class="col-6 col-lg-3  mb-3">
                            <a class="grid-item" href="{{asset('normal_images/'.$item->image)}}" data-lightbox="gallery-item">
                                <img title="{{$item->title}}" src="{{asset('normal_images/'.$item->image)}}" alt="{{$item->title}}" class="w-100">
                            </a>
                            </div>
                        @endforeach
                        </div>
					</div>
					<div class="divider"><i class="icon-circle"></i></div>
			    </div>

				</div>
			</div>
		</section>
		<!-- #content end -->
@endsection
