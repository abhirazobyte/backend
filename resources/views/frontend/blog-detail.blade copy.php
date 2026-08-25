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

@endsection

@section('content')
<section id="content">
    <div class="content-wrap">

        {{-- <a href="#" class="button button-full button-purple center text-end header-stick bottommargin-lg">
            <div class="container clearfix">
                Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a> --}}

        <div class="container clearfix">

            {{-- <div class="heading-block center">
                <h1>Recent Articles</h1>
                <span>We almost blog regularly about this &amp; that.</span>
            </div> --}}

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="post-grid grid-container row gutter-40 mx-3 has-init-isotope" style="position: relative; height: 2240.67px;">
                        <div class="entry col-12" style="position: absolute; left: 0%; top: 0px;">
                            <div class="grid-inner row g-0">

                                <div class="col-md-12 col-lg-12 col-sm-12"   >
                                    <div class="grid-inner">
                                        <div class="entry-image">
                                            <a href="{{asset('normal_images/'.$item->image)}}" data-lightbox="image">
                                                <img src="{{asset('normal_images/'.$item->image)}}" alt="Standard Post with Image">
                                            </a>
                                        </div>
                                        <div class="entry-title">
                                            <h2>{{$item->title}}
                                                {{-- <a href=" ">
                                                </a> --}}
                                            </h2>
                                        </div>
                                        {{-- <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> </li>

                                            </ul>
                                        </div> --}}
                                        <div class="entry-content">
                                            {!! $item->content !!}
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- #posts end -->
                </div>
                <!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        {{-- <div class="widget subscribe-widget clearfix">
                            <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                                <div class="fancy-title title-border">
                                    <h4>SEARCH IN SITE</h4>
                                </div>


                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form2" action="{{url('search')}}" method="post" class="mb-0" novalidate="novalidate">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                    <div class="input-group mx-auto">
                                        <div class="input-group-text"><i class="icon-search"></i></div>
                                        <input type="text" id="widget-subscribe-form-search" name="title" class="form-control required search" placeholder="Enter your Keyword">
                                    </div>
                                    <button class="button button-3d w-100 button-small m-0" style="margin-top: 15px !important;" type="submit">Search</button>
                                </form>
                            </div>
                        </div> --}}

                        <div class="widget subscribe-widget clearfix">
                            <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                                <div class="fancy-title title-border">
                                    <h4>RECENT POSTS</h4>
                                </div>
                                <div class="widget_links clearfix">
                                    <ul>
                                        @foreach('\App\Models\Blog'::orderBy('id','DESC')->limit(4)->get() as $recent)
                                        <li><a href="{{url('blog')}}/{{$recent->slug}}"><div>{{ucfirst($recent->title)}}o</div></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_links clearfix"></div>
                    </div>
                </div>
                <!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
