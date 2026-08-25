@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Translation Services, Translation Company in Delhi India')
@section('description', 'Langma School of Languages is a leading translation company that offers online German, Hindi, English, Spanish, Korean, Russian, Japanese etc. language translation services.')
@section('keywords', 'Translation Services, Translation Company in Delhi, Language Translation Services,  Translation Agency in Delhi, Online Translation Services')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
                   <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/Translation.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">translation</h5> 

            </div>
        </div>
		<!-- #page-title end -->
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
                                        <div class="postcontent col-lg-9" style="font-size:15px;">

                                            <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">TRANSLATION</div>

                                            <p>
                                       Langma International in India is a full-service translation company that specializes in offering a wide range of linguistic solutions for our clients globally. We stand ahead of our competitors by providing accurate and complete professional translation services with the most reasonable rates in the industry. </p>

                                <div class="text-uppercase fw-bold py-2" style="font-size:17px; color: #4a97a2;">WHAT DO WE DO?</div>

                                            <p>With a team of professionally trained linguistic experts, our company is well equipped and qualified to deliver the best translation services on time which meet the highest quality standards. Our areas of translation services include:</p>
                                            <div class="col-12">
					
                                    <div class="text-uppercase  mb-2 py-2" style="font-size:17px; letter-spacing:1px; margin-top: 10px">
                                        <span style="border-left: double; text-align: start; color: var(--bs-gray);"><b class="ms-2">TRANSLATION SERVICES</b></span>
                                    </div>
									<ol class="list-group list-group-numbered">
									  <li class="list-group-item">Marketing Translation</li>
									  <li class="list-group-item">Medical Translation</li>
									  <li class="list-group-item">Legal Translation Services</li>
									   <li class="list-group-item">Technical Translation Services</li>
									  <li class="list-group-item">Commercial Translation</li>
									  <li class="list-group-item">Translation of Financial Statements</li>
									    <li class="list-group-item">English to Arabic Translation</li>
									</ol>
								</div>
								<div class="line"></div>
				
                                <div class="text-uppercase fw-bold py-3" style="font-size:17px; color: #4a97a2;">HOW DO WE DO?</div>

								<p>Being a certified translation company we specialize in offering translation services for all companies of various sizes. By covering more than 150+ languages of translation services, we serve clients worldwide. We extend our high-quality translation services to small, medium, and large-sized enterprises to get their documents translated into a local language or any other understandable language.</p>
								<p>Our team has hands-on experience and a professional approach to assisting clients from many countries including – Saudi Arabia, Germany, and Dubai, and also clients from other European & Asian Countries. We have done a lot of translation for our clients and our success portfolio includes translation work from – English to Arabic, German, French, Hindi, Urdu, etc.</p>
								<p>To provide the best translation services for you, we work with a team of multi-tiered quality assurance to ensure that each of our translated content is up to the mark and to assure that it will meet the client's expectations and industry standards. From the start of the initial project assessment to proofreading and editing, our team is committed to delivering the best-personalized course.</p>
								<p>If you want your content to be translated by a fluent, native speaker then get in touch with Langma International today. We work with a team of highly capable and professional linguistic experts, who specialize in translating content in any format.</p>
								<p>With us, you can be sure of honest and transparent service, no matter the type, or scope of your requirements. For more information about our services, please feel free to contact us today. We have a team of dedicated customer support people who are ready to answer your questions.</p>
                                            
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
                                        
                                           <input type="hidden"  name="service" value="translation">
                                           <input type="hidden"  name="type"    value="service">
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

                </div>
                                        <!-- .sidebar end -->
                                    </div>

                                </div>
                            </div>
                        </section>

    <!-- #content end -->
@endsection
