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
    <section id="page-title" class="page-title-parallax page-title-dark include-header"
        style="padding: 250px 0; background-image: url({{ asset('normal_images/' . $bg_banner) }}); background-size: cover; background-position: center center;"
        data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
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
                                                            <div class="col-12">
                                                                <h3>ENQUIRE ABOUT OUR COURSES </h3>
                                                            </div>

                                                            <form class="row" id="courses" action="{{ url('/courses-lead') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                                                @csrf
                                                                <div class="style-msg successmsg">
                                                                     <div class="sb-msg" style="display: none;" id="courses-show"><i class="icon-thumbs-up"></i><strong>Thank you!</strong> You successfully submitted this Form.</div>
                                                                </div>

                                                                <div class="col-6 form-group">
                                                                    <label>Full Name:</label>
                                                                    <input type="text" name="name" id="name" class="form-control" value="" placeholder="Enter your Full Name">
                                                                </div>

                                                                <div class="col-6 form-group">
                                                                    <label>Email:</label>
                                                                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="Enter your Email Address">
                                                                </div>

                                                                <div class="col-6 form-group">
                                                                    <label>Contact:</label>
                                                                    <input type="tel" name="mobile" id="mobile" class="form-control" value="" placeholder="Enter your Contact No.">
                                                                </div>
                                                                <div class="col-6 form-group">
                                                                    <label>City:</label>
                                                                    <input type="text" name="city" id="city" class="form-control" value="" placeholder="Enter your City">
                                                                </div>
                                                                <div class="col-6 form-group">
                                                                    <label>Country:</label>
                                                                    <input type="text" name="country" id="country" class="form-control" value="" placeholder="Enter your Country">
                                                                </div>

                                                                <div class="col-6 form-group">
                                                                    <label>Course</label>
                                                                    <select class="form-select" name="course" id="course">
                                                                        <option value="">-- SELECT COURSE --</option>
                                                                        <option value="Courses">Courses</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6 form-group">
                                                                    <label>CLASSES</label>
                                                                    <select class="form-select" name="classes" id="classes">
                                                                        <option value="">-- SELECT CLASSES --</option>
                                                                        <option value="Regular ">Regular</option>
                                                                        <option value="weekend ">weekend</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12">

                                                                    <div class="form-group">
                                                                        <label>Message:</label>
                                                                        <textarea name="message" id="message" class="form-control" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>




                                                                 <div class="col-12 d-none">
                                                                    <input type="text" id="currenturl" name="currenturl" value="{{ url()->current() }}">
                                                                </div>
                                                                <div class="col-12">
                                                                    <button type="submit" name="submit" id="courses-submit" class="btn btn-primary">submit</button>
                                                                </div>


                                                            </form>


                                                        </div>

                                                        {{-- <div class="col-lg-12 ps-lg-4">
                                                            <div class="col-12">
                                                                <h3>ENQUIRE ABOUT OUR SERVICES </h3>
                                                            </div>
                                                            <form class="row mb-0" id="servises" action="{{ url('/contact-lead') }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="style-msg successmsg">
                                                                    <div class="sb-msg" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Thank you!</strong> You successfully submitted this Form.</div>
                                                                </div>


                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-name">Name:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="name" id="name" class="form-control required" value="" placeholder="Enter your Full Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-email">Email:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <input type="email" name="email" id="email" class="form-control required" value="" placeholder="Enter your Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-phone">Phone:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <input type="tel" name="mobile" id="mobile" class="form-control required" pattern="[789][0-9]{9}" placeholder="Your Contact Number">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-city">City:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="city" id="city" class="form-control required" placeholder="Your City">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-country">Country:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="country" id="country" class="form-control required" placeholder="Your Country">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="services">Services:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <select name="services" id="services" class="form-control select-1 form-select  required" required="required" style="width:100%;">
                                                                                <option value="">Select Services</option>
                                                                                <option value="Translation">Translation </option>
                                                                                <option value="Interpretation">Interpretation </option>
                                                                                <option value="Voice-over">Voice-over </option>
                                                                                <option value="In-house training">In-house training </option>
                                                                                <option value="Language experts">Language experts </option>
                                                                                <option value="Home-tuition">Home-tuition </option>
                                                                                <option value="Voice Dubbing">Voice Dubbing </option>
                                                                                <option value="Subtitling">Subtitling </option>
                                                                                <option value="Content Moderator">Content Moderator </option>
                                                                                <option value="Audio Book Voices">Audio Book Voices </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-2 col-form-label">
                                                                            <label for="fitness-form-phone">Message:</label>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="message" id="message" class="form-control required" value="" placeholder="Your Message Here..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 form-group">
                                                                    <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
                                                                </div>
                                                                <div class="col-12 d-flex justify-content-end align-items-center">
                                                                    <button type="submit" name="services-submit" id="services-submit" class="btn btn-success ms-2">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div> --}}


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>



    <!-- #content end -->
@endsection
