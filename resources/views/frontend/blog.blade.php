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

<style>
    .title{
        color:#000;
    }
 .recent-post a{
     color:#4197A2;
 }
  .recent-post a:hover{
     color:grey;
 }
 
 .read {
    color: #1e43df;
    z-index: 1;
    font-weight: 500;
    padding: 10px;
    position: relative;
    transition: .3s ease-in-out;
    display: inline-block;
}

.read::after {
    content: '';
    position: absolute;
    bottom: 0;
    height: 2px;
    z-index: -1;
    width: 100%;
    background: #1e43df;
    left: 0;
    transition: .3s ease-in-out;
}

.read:hover{color:#fff;text-decoration:none}
 .read:hover::after{height:100%}
</style>
@section('slider')  

        <div class="container-fluid jap-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(15, 66, 41, .6), rgba(15, 66, 41, .6)), url({{ asset('normal_images/blog-banner.webp') }}) center center no-repeat; background-size: cover; background-attachment: fixed;">
            <div class="container text-center py-5" style="height: 250px;">
                <h1 class="display-3  mb-4 animated slideInDown" style="color: #fff; font-family: system-ui;">BLOG</h1>

            </div>
        </div>
        
@endsection

@section('content')


                            
<div class="container">
    <div class="row g-3">
    <div class="col-lg-9">
          <div class="row g-5">  
             @foreach($items as $item)
           <div class="col-lg-12">
                 <div class="card">
                     <div class="row g-0">
                         <div class="col-lg-4">
                          <a href="{{url('blog')}}/{{$item->slug}}"><img src="{{asset('normal_images/'.$item->image)}}" class="card-img-top w-100" alt="{{$item->slug}}" style="height:220px;"></a>
                         </div>
                         <div class="col-lg-8">
                             <div class="card-body">
                    <h6 class="card-title py-2"><a href="{{url('blog')}}/{{$item->slug}}" class="title" style="color:#4197A2;">{!! substr($item->title,0,50) !!}{{ strlen($item->title > 50) ? '..' : '' }}</a></h6>
                      <p class="item-content">{!! substr(strip_tags($item->content),0,280) !!}</p>
                                
                <div class="text-end"><a href="{{url('blog')}}/{{$item->slug}}" class="read"> Read More</a></div>
                </div>
                         </div>
                     </div>
           
                
            </div>
            
           </div> 
           
           
           
           
           
            @endforeach
      </div> 
    </div>    
    <div class="col-lg-3">
<div class="shadow-lg mb-5 bg-body rounded"> 
        <div class="text-uppercase fw-bold page_speed_253638278" style="background-color: #f2f8f8;"><h4  class="p-3" style="font-size: 17px; color: #4a97a2;">SEARCH IN SITE</h4></div>

    <form id="checkout-form" method="post" action="{{url('search')}}">
<div class="input-group mb-3 p-3">
     <input type="hidden" value="{{csrf_token()}}" name="_token" />
  <input type="text" name="title" class="form-control rounded-left rounded-0" placeholder="Search Blog Data" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height:40px;">
  <div class="input-group-append">
<button type="submit" class="btn rounded-right rounded-0" style="background: #296166; color: #fff; font-weight: 500; font-size: 17px; height:40px;">Search</button>
  </div>
</div>
</form>
         
  </div>  
<div class="shadow-lg mb-5 bg-body rounded">
    <div class="text-uppercase fw-bold page_speed_253638278 text-center" style="background-color: #f2f8f8;"><h4  class="p-3" style="font-size: 17px; color: #4a97a2;">RECENT POSTS</h4></div>
     <div class="fancy-title title-border p-3">
                          
      @foreach('\App\Models\Blog'::orderBy('id','DESC')->limit(4)->get() as $recent)
 <p>
<a href="{{url('blog')}}/{{$recent->slug}}"><div class="recent-post"><i class="fa-solid fa-link" style="color: grey;"></i> {{ucfirst($recent->title)}}o</div></a></p>
                    
 @endforeach    
</div>                          
    </div>
    </div>
    
</div>    
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-8">-->
<!--            <div class="row">-->
<!--                      @foreach($items as $item)-->
<!--                <div class="col-2 col-lg-3 col-md-3">-->
<!--                    <div>-->
<!--                         <a href="{{url('blog')}}/{{$item->slug}}"><img src="{{asset('normal_images/'.$item->image)}}" alt="Standard Post with Image" class="w-100" style="height: 130px;"></a>-->
<!--                    </div>-->
<!--                     <h5 class="mt-3"> <a href="{{url('blog')}}/{{$item->slug}}" class="title">-->
<!--                                                    {!! substr($item->title,0,50) !!}-->
<!--                                                    {{ strlen($item->title > 50) ? '..' : '' }}-->
<!--                                                </a></h5>-->
<!--                                                <p style="color:grey;"><i class="fa-solid fa-calendar-days"></i> {{date('d M Y', strtotime($item->created_at))}}</p>-->
<!--                </div>-->
<!--               @endforeach-->
<!--        </div>  -->
<!--        </div>-->
<!--          <div class="col-lg-3">-->
<!--                   <div class="widget subscribe-widget clearfix">-->
<!--                            <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">-->
<!--                                <div class="fancy-title title-border">-->
                                    
<!--                                    <div class="text-uppercase fw-bold page_speed_253638278"><h4 style="font-size: 17px; color: #4a97a2;">RECENT POSTS</h4></div>-->
<!--                                </div>-->
<!--                                <div class="widget_links clearfix">-->
                        
<!--                                        @foreach('\App\Models\Blog'::orderBy('id','DESC')->limit(4)->get() as $recent)-->
<!--                                        <p><a href="{{url('blog')}}/{{$recent->slug}}"><div class="recent-post"><i class="fa-solid fa-link" style="color: grey;"></i> {{ucfirst($recent->title)}}o</div></a></p>-->
                                   
<!--                                        @endforeach-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--          </div>-->
<!--    </div>-->
<!--</div>-->
</div>

@endsection
