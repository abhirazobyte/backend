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
    <!-- Page Title
              ============================================= -->
    {{-- <section id="page-title" class="page-title-parallax page-title-dark include-header"
        style="padding: 250px 0; background-image: url({{ asset('normal_images/' . $bg_banner) }}); background-size: cover; background-position: center center;"
        data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    </section> --}}
    <!-- #page-title end -->
    <section id="page-title" class="mt-5">
        <div class="container clearfix mt-4">
            <h1>THANK-YOU</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Widgets</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">THANK-YOU</li>
            </ol>
        </div>
    </section>
    <!-- #page-title end -->
@endsection

@section('content')
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">

							<div class="col-lg-12">
                                <div class="vertical-middle text-center">
                                    <h4 class="display-4">THANK YOU OUR TEAM WILL GET BACK TO YOU SOON!</h4>
                                </div>


							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
        <!-- #content end -->
@endsection
