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

<style>
    p{
font-size:15px;
}
</style>
@section('slider')
    <!-- Page Title============================================= -->
	

     <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 0%), #21252900), url({{ asset('normal_images/' . $bg_banner) }}) center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <!--<h5 class="display-3 mt-5 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui;">{{ $item->title }}</h5> -->
            </div>
        </div>

@endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="col-12 col-lg-9">
            <div>
        <div class="text-uppercase fw-bold mb-3" ><h1 style="font-size:14px; color: #4a97a2;">{{$item->title}}</h1></div>
   
    </div>
    
    @if($item->image)

          <div class="courses-details-img">
                 <img src="{{asset('normal_images/'.$item->image)}}" class="img-responsive w-100 mb-3" alt="{{$item->title}}">
</div>
                    @endif
                    
                      <div class="course-details-content">
                        <div class="row pt-20">

                            <div class="col-md-12">
                                {!!$item->content !!}

                            </div>

                        </div>
                        
                         @if(Request::is('about-us'))

                <div class="row pl-15 in-blog related" style="margin-top:20px">
                    <div class="row">
                        <div class="course-title text-center">
                            <h3 class="text-black text-center pt-30"><strong>RELATED BLOGS</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-12 rc-carousel" data-loop="true" data-items="3" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="true" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="true"
                        data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="true" data-r-small="1"
                        data-r-small-nav="true" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="true"
                        data-r-medium-dots="true" data-r-large="3" data-r-large-nav="true" data-r-large-dots="true">
                        @foreach("\App\Blog"::get() as $blog)
                        <div class="col-sm-12 col-xs-12" style="padding:10px">
                            <div class="single-event mb-35" style="background:#fff; text-align:center;">
                                
                                <h4 class="heading" style="padding-bottom: 10px;"><a href="{{url('blog/'.$blog->slug)}}">{{ (strlen($blog->title) > 20) ? substr($blog->title,0,20).'...' : $blog->title }}</a>
                                </h4>
                                <div class="event-img">
                                    <a href="{{url('blog/'.$blog->slug)}}">
                                        <img src="{{asset('normal_images/'.$blog->image)}}" class="img-responsive w-100" alt="{{$blog->title}}"></a>

                                </div>
                                <div class="event-content text-center" style="padding: 5px; padding-bottom:20px;">
                                    <p>{!! (strlen($blog->content) > 75) ? substr(strip_tags($blog->content),0,75).'...'
                                        : $blog->content !!}</p>
                                    <a href="{{url('blog/'.$blog->slug)}}" class="default-btn" href="{{url('blog/'.$blog->slug)}}">read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

                @endif


</div>
      </div>
      <div class="col-12 col-lg-3">
            <div style="background:#fff; box-shadow: 0px 0px 2px 0px grey; border-radius: 10px;">
                            <div class="col-12 col-sm-6 col-lg-12 p-4">
                                <div style="font-size:12px; letter-spacing:1px;"><b>ENQUIRE NOW</b></div>

                                @if (\Session::has('success'))
                                <div class="alert alert-success">
                                
                                    <ul>
                                        <li style="font-size:14px;">{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                                <div class="">
                                    <form id="leads" action="{{url('leads')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fitness-form-name" class="fw-bold py-2">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-email" class="fw-bold py-2">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control required"  placeholder="Enter your Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-phone" class="fw-bold py-2">Phone:</label>
                                            <input type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"  name="phone" id="phone" class="form-control required" placeholder="mobile no.">
                                        </div>

                                        <div class="form-group">
<input type="hidden"  name="languages" value="{{$item->title}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="message" class="fw-bold py-2">Message:</label>
                                            <textarea name="message" class="form-control required" placeholder="Your Message Here..." style="height:90px;"></textarea>
                                        </div>
                                           <input type="hidden"  name="currenturl" value="{{ url()->current() }}">
                                        <div class="text-center py-2 mt-2">
                                           <input class="btn text-light" type="submit" style="background: #296166; font-weight: 600;">
                                        </div>

                                    </form>
                                </div>


                            </div>
                        </div>
      </div>
  </div>
</div>
@endsection
