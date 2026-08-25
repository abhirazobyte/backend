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
    label{
        font-weight:600;
    }
    .careerbox {
    box-shadow: 0 0 5px #00000054;
    background-color: #f7f7f7;
    padding: 30px;
}
.careerbox ul li {
    list-style: none;
    color: #585858;
}
.careerbox ul li strong::after {
    content: '-';
    padding: 0 10px;
}
.careerbox h5 {
    font-size: 20px;
    font-weight: 700;
    line-height: 28px;
    letter-spacing: 0;
    text-transform: none;
    color: #1e43df;
    margin-bottom: 20px;
}
</style>
 <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/career.webp) center center no-repeat;  background-size: cover;  height: 500px;">
<!--<div class="container py-5">-->
<!--     <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">Career</h5> -->
<!--</div>-->
</div>
     
     <div class="container mb-3 mt-5">
         <div class="row">
             <div class="col-lg-4">
                 <div class="card border border-1">
                        <div class="careerbox">
                            <h5 class="fw-bold">German Language Trainer</h5>
                            <ul class="p-0">
                                <li>
                                    <strong>Experience</strong> 1-3 Years
                                </li>
                                <li>
                                    <strong>Education</strong> Graduation
                                </li>
                                <li>
                                    <strong>Job opening</strong> 2
                                </li>
                                <li>
                                    <strong>Location</strong> New delhi
                                </li>
                                <li>
                                    <strong>Status</strong> Open
                                </li>
                            </ul>
                            <a href="#content" style="color: #fdba28;" class="fw-bold">Apply Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
             </div>
         </div>
     </div>
     
@endsection

@section('content')
    <!-- Content
                                      ============================================= -->
    <section>
        <div class="content-wrap">


             <!-- Content
		============================================= -->
		<section id="content" >
			<div class="content-wrap" >
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row shadow bg-light border">


							<div class="col-lg-4 dark" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0,0,0,.2)), url({{ asset('normal_images/home-form.webp') }}) center center / cover; min-height: 400px;">
							
							</div>

							<div class="col-lg-8 p-5">
                        <div id="show" class="btn btn-success" style="display: none;"><h1>Your Form has been submitted Thankyou.</h1></div>
     
								<form class="row mb-0" action="/career-enquiry" method="post" enctype="multipart/form-data" id="career-form">
                                    @csrf
                                    
									{{-- <div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div> --}}
									
										<div class="col-sm-12 ">
		    										<div class="row">
		    										    	<div class="col-sm-2 col-form-label">
												<label for="phone">Profile Name:</label>
											</div>
		    	<div class="col-sm-10  mb-3">
                <input class="form-control required" name="languages"  type="text"  placeholder="Enter Profile Name">
                </div>
          </div>
              </div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-name">Name:</label>
											</div>
											<div class="col-sm-10 mb-3">
												<input type="text" name="name" id="name" class="form-control required" value="{{old('name')}}" placeholder="Enter Full Name" required>
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-email">Email:</label>
											</div>
											<div class="col-sm-10  mb-3">
												<input type="email" name="email" id="email" class="form-control required" value="{{old('email')}}" placeholder="Enter Email" required>
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="phone">Phone:</label>
											</div>
											<div class="col-sm-10  mb-3">
											    <input class="form-control required" name="phone" type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" minlength="10" maxlength="10" id="phone" placeholder="MOBILE *" required onpaste="return false;" >
												
											</div>
										 
										</div>
									</div>

	
               <input class="form-control required" name="country" value="null" type="hidden">
        
									
										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="resume">Upload Resume:</label>
											</div>
											<div class="col-sm-10  mb-3">
												<input type="file" name="resume" id="resume" class="form-control required" accept="application/msword,application/pdf,.doc,.docx,.pdf">
											</div>
										</div>
									</div>
									
									

                                    <div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-phone">Message:</label>
											</div>
											<div class="col-sm-10  mb-3">
												<textarea name="message" id="message" class="form-control required" value="{{old('message')}}" placeholder="Your Message Here..."></textarea>
											</div>
										</div>
									</div>

									<div class="col-12 d-flex justify-content-end align-items-center">
										<button type="submit" name="submit" id="career" class="btn btn-success ms-2">Submit</button>
									</div>
								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- #content end -->

        </div>
    </section>
    <!-- #content end -->
@endsection
