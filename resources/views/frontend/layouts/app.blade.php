<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('frontend.layouts.head')
</head>

<body class="stretched">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W389TP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
 @include('frontend.layouts.header') 
        <!-- #header end -->

		<!-- Slider
		============================================= -->
@yield('slider')
		<!-- #slider end -->

		<!-- Content
		============================================= -->
            @yield('content')
        <!-- #content end -->

		<!-- Footer
		============================================= -->
@include('frontend.layouts.footer')
        <!-- #footer end -->

	</div>
    <!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
@include('frontend.layouts.script')
     <!-- #JavaScripts end -->
</body>
</html>