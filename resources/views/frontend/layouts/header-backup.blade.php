@php
$setting = "\App\Models\Setting"::first()
@endphp
<style>
.goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}
</style>
<div id="top-bar">
    <div class="container clearfix">

        <div class="row justify-content-between">

            <div class="col-12 col-md-auto col-sm-auto">
                <!-- Top Links
                ============================================= -->
                    <div class="top-links">
							<ul class="top-links-container">
										<!--<li class="top-links-item"><a href="/payment">Pay NOw</a></li>-->
								<!--<li class="top-links-item"><a href="/apply-now">Apply Now</a></li>-->
								<!--<li class="top-links-item"><a href="contact.html">Contact</a></li>-->
									<li class="top-links-item">
								   <div id="google_translate_element"></div>
								</li>
							</ul>
						</div>
                <!-- .top-links end -->
            </div>

            <!--<div class="col-12 col-md-auto">-->

                <!-- Top Social
                ============================================= -->
                <!--<ul id="top-social">-->
                   
                <!--    <li><a href="https://www.facebook.com/officiallangma" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>-->
                <!--    <li><a href="https://twitter.com/official_langma" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>-->
                <!--    <li class="d-none d-sm-flex"><a href="https://www.youtube.com/user/langmaschool" class="si-youtube"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>-->
                <!--    <li class="d-none d-sm-flex"><a href="https://www.linkedin.com/school/langma-international" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span><span class="ts-text">Linkedin</span></a></li>-->
                <!--    <li class="d-none d-sm-flex"><a href="https://wa.me/919810117094?text=Hi%2C%20I%20would%20like%20to%20know%20about%20foreign%20languages%20you%20offered%20at%20your%20center" class="si-whatsapp"><span class="ts-icon"><i class="icon-whatsapp"></i></span><span class="ts-text">Whatsapp</span></a></li>-->
                <!--    <li><a href="https://www.instagram.com/officiallangma" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>-->
                <!--    <li><a href="tel:+91-9810117094" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91-9810117094</span></a></li>-->
                <!--    <li><a href="mailto:info@langmainternational.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@langmainternational.com</span></a></li>-->
                <!--</ul>-->
                <!-- #top-social end -->
            <!--</div>-->

        </div>

    </div>
</div>

<!--transparent-header" data-sticky-class="not-dark"-->
<header id="header" class="full-header bg-light">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{ url('/') }}" class="standard-logo"
                        data-dark-logo="{{asset('normal_images/'.$setting->logo)}}"><img src="{{asset('normal_images/'.$setting->logo)}}"
                            alt="langma Logo"></a>
                            
                    <a href="{{ url('/') }}" class="retina-logo"
                        data-dark-logo="{{asset('normal_images/langma-logo6.png')}}"><img src="{{asset('normal_images/langma-logo6.png')}}"
                            alt="langma Logo"></a>
                </div>
                <!-- #logo end -->

                 <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div>
                    <!-- #top-search end -->
                </div>
               <div id="primary-menu-trigger">
             <i class="icon-line-align-justify fs-5 fw-normal"></i>
						</div>
                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item{{ Request::is('/') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ url('/') }}">
                                <div>Home</div>
                            </a>
                        </li>
                        {{-- about starts... --}}
                        <li class="menu-item{{ Request::is('about') ? 'active' : '' }}">
                            <a class="menu-link" href="#">
                                <div>About</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    @foreach('App\Models\Page'::where('type', 1)->orderBy('position', 'asc')->get() as $about)
                                                @if ($about->position == 3)

                                            <a class="menu-link" href="{{ url('gallery') }}">
                                                <div>Gallery</div>
                                            </a>

                                        @endif

                                            <a class="menu-link" href="{{ url($about->url) }}">
                                                <div>{{ $about->title }}</div>
                                            </a>

                                    @endforeach
                                </li>
                                <!--<li class="menu-item">-->
                                <!--    <a class="menu-link" href="{{ url('gallery') }}">-->
                                <!--        <div>Gallery</div>-->
                                <!--    </a>-->
                                <!--</li>-->

                            </ul>
                        </li>
                        {{-- about ends... --}}


                        {{-- service starts here... --}}
                        <li class="menu-item{{ Request::is('service') ? 'active' : '' }}">
                            <a class="menu-link" href="#">
                                <div>Services</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item"><a class="menu-link"
                                        href="{{ url('transcription') }}">
                                        <div>Transcription</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link"
                                        href="{{ url('translation') }}">
                                        <div>Translation</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link"
                                        href="{{ url('localization') }}">
                                        <div>Localization Service</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link"
                                        href="{{ url('multilanguage') }}">
                                        <div>Multilanguage DTP</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link"
                                        href="{{ url('proofreading') }}">
                                        <div>Proofreading</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('voiceover') }}">
                                    <div>Voice Over Services</div>
                                </a>
                            </li>
                            </ul>
                        </li>
                        {{-- service ends here --}}

                        {{-- carrer --}}
                        <!--<li class="menu-item{{ Request::is('career') ? 'active' : '' }}">-->
                        <!--    <a class="menu-link" href="{{ url('career') }}">-->
                        <!--        <div>Careers</div>-->
                        <!--    </a>-->
                        <!--</li>-->
                            {{-- career --}}

                            {{-- corporate programe starts --}}
                        <li class="menu-item{{ Request::is('program') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ url('program') }}">
                                <div>Corporate Programs</div>
                            </a>

                        </li>
                        {{-- corporate programe ends --}}

                        {{-- blog starts --}}
                        <!--<li class="menu-item{{ Request::is('blog') ? 'active' : '' }}">-->
                        <!--    <a class="menu-link" href="{{ url('blog') }}">-->
                        <!--        <div>Blog</div>-->
                        <!--    </a>-->
                        <!--</li>-->
                        {{-- blog ends --}}

                        {{-- contact starts --}}
                        <li class="menu-item{{ Request::is('contact') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ url('contact') }}">
                                <div>Contact</div>
                            </a>
                        </li>
                        {{-- contact ends --}}
                         {{-- contact starts --}}
                        <li class="menu-item{{ Request::is('apply-now') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ url('apply-now') }}">
                                <div>Apply Now</div>
                            </a>
                        </li>
                        {{-- contact ends --}}
                    </ul>
                </nav>
                <!-- #primary-menu end -->
                <form class="top-search-form" action="{{ url('search') }}" method="get">
                    <input type="text" name="item" id="search-button" class="form-control" value=""
                        placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
