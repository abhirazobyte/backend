 @extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Content writing  Services, Professional Content writing  Services, Multilingual Voiceover Services in Delhi India')
@section('description', 'We offer Content writing  online, Content writing  services, professional Content writing , professional Content writing  services, corporate Content writing , cheap Content writing  services, foreign Content writing r in Delhi, India')
@section('keywords', 'Content writingr online, Content writing  services, professional Content writing , professional Content writing  services, corporate Content writing , cheap Content writing  services, foreign Content writing')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
<style>
    p{
        font-size:15px;
        text-align: justify;
    }
    b{
        color: var(--bs-gray);
    }
</style>

          
                       <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/content-writing.webp) center center no-repeat; background-size: cover;  height: 500px;">
            <!--<div class="container py-5">-->
            <!--     <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">Content Writing</h5> -->
            <!--</div>-->
        </div>
@endsection

@section('content')
    <!-- Content
                          ============================================= -->
                          <section id="content">
                            <div class="content-wrap">
                                <div class="container clearfix">

                                    <div class="row gutter-40 col-mb-80">
                                        <!-- Post Content
                                        ============================================= -->

                                        <div class="postcontent col-lg-9">
                                            <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">Express Your Ideas Effectively Through Professional Content Writing Services</div>
                                            <p class="MsoNormal page_speed_342502458"><b class="ms-2">Elevate Your Brand's Standing:</b></p>
                                            <p class="MsoNormal page_speed_342502458">Investing in a content writing service is paramount for businesses seeking to elevate their brand, establish seamless communication, and boost the visibility of their content across diverse platforms.Langma Consulting, as a leading professional content writing service provider, recognizes the critical aspects of SEO ranking, strategic keyword usage, and infusing a native touch into the content. Our proficiency in content writing extends beyond mere words; we focus on maintaining the tone, style, and relevance that connect with the target audience, addressing their specific needs. With a commitment to quality and precision, Langma Consulting ensures that your content stands out in a crowded digital landscape.</p>
                                           
                                            <div class="text-uppercase  mb-2 py-2" style="font-size:17px; letter-spacing:1px; margin-top: 10px">
                                                <span style="border-left: double; text-align: start; color: var(--bs-gray);"><b class="ms-2">What Makes Content Writing Services Essential for Your Brand?</b></span>
                                            </div>
                                             <p class="MsoNormal page_speed_342502458"><b class="ms-2">Elevate Your Brand's Standing:</b></p>
                                             
                                            <p class="MsoNormal page_speed_342502458">Opting for a content writing company elevates your brand by delivering exceptional content that effectively showcases your business's vision and mission, enhancing your overall positioning.</p>
                                            <p class="MsoNormal page_speed_342502458"><b class="ms-2">Cultivate Lasting Customer Relationships:</b></p>
                                            <p>Crafting resonant content fosters strong connections with your audience, contributing to sustained relationships and increased sales. Our professional subtitling services further reinforce these positive outcomes.</p>
                                             <p class="MsoNormal page_speed_342502458"><b class="ms-2">Unveil Your Brand Narrative:</b></p>
                                             <p>Tell your brand story compellingly with professional content writing services, leveraging engaging and attractive content. Our video content creation service complements this by bringing your narrative to life through captivating videos.</p>
                                             <p class="MsoNormal page_speed_342502458"><b class="ms-2">Optimize for Search Engines:</b></p>
                                              <p>Boost your brand's visibility by securing a prominent place on search engine results. The best SEO content writing services, like ours, actively contribute to improving your SEO ranking, ensuring your brand is easily discoverable.</p>
                                               <p class="MsoNormal page_speed_342502458"><b class="ms-2">Refined Data Presentation:</b></p>
                                            <p>Enhance the comprehensibility of your data by leveraging content writing services. Our professional touch refines information presentation, elevating the overall quality of your content.</p>
                                            <p class="MsoNormal page_speed_342502458"><b class="ms-2">Craft an Appealing Website:</b></p>
                                            <p>Transform your website into a functional and aesthetically pleasing platform with our website content writing service. Tailor content to your specific needs, enhancing both functionality and visual appeal.</p>
                                        </div>
                                        <!-- .postcontent end -->

                                        <!-- Sidebar
                                        ============================================= -->
                                             <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
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
                                    <form action="{{url('contact-lead')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fitness-form-name" class="fw-bold py-2">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Full Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-email" class="fw-bold py-2">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control"  placeholder="Enter your Email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-phone" class="fw-bold py-2">Phone:</label>
                                            <input type="tel" name="mobile" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" class="form-control" placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no." required>
                                        </div>


                                        <div class="form-group">
                                            <label for="message" class="fw-bold py-2">Message:</label>
                                            <textarea name="message" class="form-control" placeholder="Your Message Here..." style="height:90px;" required></textarea>
                                        </div>
                                        
                                           <input type="hidden"  name="service" value="voiceover">
                                           <input type="hidden"  name="type"    value="service">
                                        <div class="text-center py-2 mt-2">
                                              <input class="btn text-light" type="submit" style="background: #296166; font-weight: 600;">
                                        </div>

                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                                        <!-- .sidebar end -->
                                    </div>

                                </div>
                            </div>
                        </section>

    <!-- #content end -->
@endsection
