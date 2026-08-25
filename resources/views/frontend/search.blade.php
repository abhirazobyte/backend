@extends('frontend.layouts.app')

@section('content')
<style>
    .form{

    position: relative;
}

/*.form .fa-search{*/

/*    position: absolute;*/
/*    top:20px;*/
/*    left: 20px;*/
/*    color: #9ca3af;*/

/*}*/

.form span{

        position: absolute;
    right: 17px;
    top: 13px;
    padding: 2px;
    border-left: 1px solid #d1d5db;

}

.left-pan{
    padding-left: 7px;
}

.left-pan i{
   
   padding-left: 10px;
}

.form-input{

    height: 55px;
    text-indent: 33px;
    border-radius: 10px;
}

.form-input:focus{

    box-shadow: none;
    border:none;
}
</style>

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

            <div class="col-md-5 col-lg-10 mt-4">
                
                  <form id="widget-search-form" name="" action="{{url('search')}}" method="get" class="mb-0" novalidate="novalidate">
                <div class="form">
                  <input type="text" name="item" value="{{ request()->input('item') }}" class="form-control form-input" placeholder="Search anything...">
           <span class="input-group-text border-0 p-0" style="background-color: #fff !important;"><button class="border-0 btn p-1" type="submit"><i class="fa fa-search"></i></button></span>
                
                </div>
                
                  </form>
                
                <div class="widget search-widget clearfix">
                    {{-- <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5> --}}
                    <div class="widget-search-form-result"></div>
             <!--<form id="widget-search-form" name="" action="{{url('search')}}" method="get" class="mb-0" novalidate="novalidate">-->
                    <!--    <div class="input-group mx-auto">-->
                        
                    <!--        <input type="search" name="item" value="{{ request()->input('item') }}" id="widget-search-form-email" class="form-control required email" placeholder="What are you looking for?">-->
                    <!--        <button class="btn btn-success" type="submit">search</button>-->
                    <!--    </div>-->
                    <!--</form>-->
                </div>
                <p class="sidebar-title pb-20 mt-3" style="font-size:18px; font-weight: 600;  text-transform: capitalize;">{{ count($items['detail']) + count($items['blog']) + count($items['pages']) }} Records Found</p>
                <div class="col-md-12">
                @if(count($items['detail']) ==0 && count($items['blog']) ==0 && count($items['pages']) ==0)
                <h4>Sorry! We couldn't find any matching for <b>{{ request()->input('item') }}</b></h4>

                @endif

                @foreach($items['detail'] as $language)
                <div class="row search shadow bg-body rounded mb-3">
                   <div class="p-3">
                        <a href="{{ url($language->id.'/'.$language->slug) }}">
                    <h5 style="font-size:16px; font-family: 'Roboto', sans-serif; color:#4197A2;">{{$language->title}}</h5>
                    <p style="font-size:15px; color:#000;">{!! substr(strip_tags($language->content),0,200) !!}</p>
                   </div>
                 </a>
                </div>
                @endforeach

                 @foreach($items['blog'] as $blog)
                <div class="row search shadow mb-3 bg-body rounded">
                         <div class="p-3">
                    <a href="{{ url('blog/'.$blog->slug) }}">
                    <h5 style="font-size:16px; font-family: 'Roboto', sans-serif; color:#4197A2;">{{$blog->title}}</h5>
                    <p style="font-size:15px; color:#000;">{!! substr(strip_tags($blog->content),0,200) !!}</p>
                 </a>
                </div>
                 </div> 

                @endforeach

                 @foreach($items['pages'] as $page)
                <div class="row search shadow mb-3 bg-body rounded">
                       <div class="p-3">
                    <a href="{{ url($page->url) }}">
                    <h5 style="font-size:16px; font-family: 'Roboto', sans-serif; color:#4197A2;">{{$page->title}}</h5>
                    <p style="font-size:15px; color:#000;">{!! substr(strip_tags($page->content),0,200) !!}</p>
                 </a>
                </div>
                     </div>

                @endforeach
                </div>
            </div>


        </div>
    </div>
</section>
@endsection
