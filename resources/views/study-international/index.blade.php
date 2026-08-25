<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Study International</title>
  <meta content="study-international" name="description">
  <meta content="study-international" name="keywords">
  <!-- Favicons -->
  <!--<link href="{{ asset('study-international/assets/img/favicon.png') }}" rel="icon">-->
  <link rel="icon" type="image/png" sizes="32x32" href="https://langmainternational.com/normal_images/favicon-32x32.png">
  <link rel="apple-touch-icon" href="https://langmainternational.com/normal_images/favicon-32x32.png">
  <!--<link href="{{ asset('study-international/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">-->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('study-international/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('study-international/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('study-international/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('study-international/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('study-international/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('study-international/assets/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->
  <!-- Template Main CSS File -->
  <link href="{{ asset('study-international/assets/css/main.css') }}" rel="stylesheet">
  <!--for whatapp and phone click starts-->
  <style>
.container3{
    display: inline;
    left:10px; 
    position: fixed; 
    right:30px; 
    bottom: 10px; 
    z-index: 99;
}
    @media  only screen and (max-width: 600px) {
        .container3{
   right: auto;
       right:10px; 
    }
    }
</style>  
  <!---->
  <style>
  .container3 {
    width: 76px;
    height: 73px;
}

.circle {
    width: 100%;
    height: 100%;
    background-color: #b8c8d9;
    position: absolute;
    border-radius: 50%;
    animation: ripple-animation 1.5s infinite ease-out;
    z-index: -1;
}

.circle1 {
    animation-delay: 0s;
}

.circle2 {
    animation-delay: 500ms;
}

.circle3 {
    animation-delay: 1s;
}

@keyframes ripple-animation {
    0% {
        transform: scale(0.1);
        opacity: 1;
    }
    100% {  
        transform: scale(1);
        opacity: 0;
    }
}
</style>
  
  <style>
  #d-none4 #fone {
    background: green !important;
    border: 21px !important;
    padding: 8px 11px 9px 12px !important;
    color: #ffffff !important;
    font-size: 17px !important;
    border-radius: 22px !important;
    margin: 0px -6px 0px 7px !important;
  }

  #d-none4 .icon {
    background: white;
    border-right: 0px !important;
    border-radius: 11px 20px 20px 12px;
    border: 3px solid #097f09;
    padding: 5px;
  }

  #d-none4 .th {
    font-size: 12px;
    vertical-align: super;
    font-weight: 400;
    color: green;
  }

  #d-none4 .hrs {
    font-weight: 700;
    color: green;
  }

  .fa-phone:before {

    background-color: transparent !important;

  }

  .blog-share1.wpshare1 {
    width: fit-content;
    position: fixed;
    top: 50% !important;
    right: 0;
    bottom: 2%;
  }
</style>
<!--for whatapp and phone click ends-->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="https://langmainternational.com/frontend/css/langma-components/img/langma-logo.webp" alt="logo" width="139" height="40"> 
         <!--<img src="https://langmainternational.com/study-international/assets/img/logo.webp" alt="logo"> -->
         <!--{{ asset('study-international/assets/img/logo.webp') }}-->
        <!--<h1>Study<span>International</span></h1>-->
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="{{url('/study-international')}}"><span>Home</span> </a>
            <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> -->
            <!-- <ul>
              <li><a href="index.html">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html" class="active">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul> -->
          </li>

          <!-- <li><a class="nav-link scrollto" href="index.html#about">About</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="index.html#about">In Russia</a></li> -->
          <!--<li class="dropdown">-->
          <!--    <a href="#"><span>Russia</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a href="{{url('/synergy')}}">Medical</a></li>-->
          <!--    <li><a href="#">Aviation</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          
            <li><a class="nav-link scrollto" href="{{url('/russia-medical')}}">Russia</a></li>
          <li><a class="nav-link scrollto" href="{{url('/management-france')}}">France</a></li>
          <li><a class="nav-link scrollto" href="{{url('/switzerland')}}">Switzerland</a></li>
          <li><a class="nav-link scrollto" href="{{url('/spain')}}">Spain</a></li>
          <li><a class="nav-link scrollto" href="{{url('/uae')}}">UAE</a></li>
          <li><a class="nav-link scrollto" href="{{url('/korea')}}">Korea</a></li>



          <!-- <li><a class="nav-link scrollto" href="index.html#services">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="index.html#team">Team</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="index.html#contact">Contact Us</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!--<a class="btn-getstarted scrollto" href="https://docs.google.com/forms/d/1i-f179szzwZrun4xSpBOLkWS6gJB92Akhu4ZBCfALpQ/edit?ts=663db50f">Fill Form</a>-->
       <a class="btn-getstarted scrollto" href="tel:++91-8527282833">Call Us</a>
    <!--<strong><i class="bi bi-telephone-fill"></i> </strong>   <a href="tel:++91-8527282833" style="color:white;"> +91-8527282833</a>-->

    </div>
  </header><!-- End Header -->

  <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>Welcome to <span>Langma Study International</span></h2>
      <p style="font-weight: bolder;">Broaden your chances to acquire the Passport towards a Worldwide Academic Excellence</p>
       <div class="d-flex">
        <!--<a href="https://docs.google.com/forms/d/1i-f179szzwZrun4xSpBOLkWS6gJB92Akhu4ZBCfALpQ/edit?ts=663db50f" class="btn-get-started scrollto">Get Started</a>-->
        <a href="https://youtu.be/shdUSyqzDbA" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div> 
    </div>
  </section>

  <main id="main">  

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Langma Study International</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{ asset('study-international/assets/img/about.webp') }}" class="img-fluid" alt="about" width="452" height="571">
            </div>
          </div>

          <div class="col-lg-7">
            <!--<h3 class="pt-0 pt-lg-5">-->
              <!-- Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero -->
            <!--</h3>-->

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Read Here:</a></li>
              <!-- <li><a class=" nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li> -->
              <!-- <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li> -->
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic"> Discover the Global Potential to Seamlessly Navigate through <b>Langma Study International</b>, as Your Gateway to pursue <b>higher education abroad</b> from Prestigious Institutions along with Expert Guidance.

                </p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ensuring a Comprehensive Support to pursue Higher Education Abroad:</h4>
                </div>
                <p>The <b>Langma Study International</b>, is an initiative of the <a href="https://langmainternational.com"> Langma School of Languages Pvt. Ltd.</a> , whose aim is to offer professional guidance for students seeking higher education in the UAE, Russia, Spain, France and Switzerland.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Go through a process of Tailored Counselling and a Thorough Document Review:</h4>
                </div>
                <p>We provide a hassle-free, one-to-one counselling and a secured document review process, to ensure a smooth transition for the students. We also offer basic language training to eligible students who aspire to <b>study abroad.</b></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>We are an Established Language Training Institution:</h4>
                </div>
                <p>Our origin goes back to the beginning of the <a href="https://langmainternational.com"> Langma School of Languages Pvt. Ltd.</a> , founded in 2012, which initially focused on English Language training. But over the last ten years of our experience, we have developed a strong expertise to teach over 50+ languages, thereby aiming to enhance individual proficiency and fluency, empowering learners for success in diverse linguistic environments.</p>

              </div><!-- End Tab 1 Content -->

              <!-- <div class="tab-pane fade show" id="tab2">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div> -->
              <!-- End Tab 2 Content -->

              <!-- <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div> -->
              <!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <!--<section id="clients" class="clients">-->
    <!--  <div class="container" data-aos="zoom-out">-->
    <!--      <div class="section-header">-->
    <!--      <h2>Our Partners</h2>-->
    <!--    </div>-->
    <!--    <div class="clients-slider swiper">-->
    <!--      <div class="swiper-wrapper align-items-center">-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/synergy.webp') }}" class="img-fluid" alt="synergy" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/rit.webp') }}" class="img-fluid" alt="rit" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/gbsb-global.webp') }}" class="img-fluid" alt="gbsb-global" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/htmi-dubai.webp') }}" class="img-fluid" alt="htmi-dubai" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/htmi-switzerland.webp') }}" class="img-fluid" alt="htmi-switzerland" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/icn.webp') }}" class="img-fluid" alt="icn" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/rit.webp') }}" class="img-fluid" alt="rit" width="400" height="140"></div>-->
    <!--        <div class="swiper-slide"><img loading="lazy" src="{{ asset('study-international/assets/img/clients/htmi-dubai.webp') }}" class="img-fluid" alt="htmi-dubai" width="400" height="140"></div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Want to Know More about Langma Study International?</h3>
            <p>In order to know all details related to the <b>Undergraduate</b> and <b>Postgraduate</b> Courses offered by the various Universities, please connect with our Team by Clicking on the <b>button below.</b></p>
            <a class="cta-btn align-self-start" href="tel:+91-8527282833">Call To Action</a>
          </div>


          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="{{ asset('study-international/assets/img/cta.webp') }}" alt="cta" width="355" height="473" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>What do we Offer?</h3>
              <!-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> -->
              <ul>
                <li><i class="bi bi-check-circle"></i>Provide Best Assistance</li>
                <li><i class="bi bi-check-circle"></i>Help in Proceeding through the Application Process</li>
                <li><i class="bi bi-check-circle"></i>Guiding to choose the Right Institution as per your Eligibility</li>
                <li><i class="bi bi-check-circle"></i>Counselling and Documentation</li>
                <li><i class="bi bi-check-circle"></i>Language Training as per the Country/University</li>
              </ul>
              <!-- <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End On Focus Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <!-- <i class="bi bi-binoculars color-cyan"></i> -->
              <h4>Medicine</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <!-- <i class="bi bi-box-seam color-indigo"></i> -->
              <h4>Management</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <!-- <i class="bi bi-brightness-high color-teal"></i> -->
              <h4>Engineering</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <!--<li class="nav-item col-6 col-md-4 col-lg-2">-->
          <!--  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">-->
          <!--    <h4>Aviation</h4>-->
          <!--  </a>-->
          <!--</li>-->
          <!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <!-- <i class="bi bi-easel color-blue"></i> -->
              <h4>Science</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <!-- <i class="bi bi-map color-orange"></i> -->
              <h4>Humanities</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Medicine</h3>
                <p class="fst-italic">
                  The Profession of a Doctor has always been highly demanding and widely respected in our society.Graduates in Medical Science can choose a varied range of practice areas for specialisation after completion of their course, some of which are like-
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Cardiology </li>
                  <li><i class="bi bi-check-circle-fill"></i> Gastroenterology</li>
                  <li><i class="bi bi-check-circle-fill"></i> Plastic Surgery</li>
                </ul>
                <!-- <p>
                  Securing admission into a Medical College in India goes through a very lengthy and highly competitive process, which involves clearing national-level entrance exams. So, there are options as well, where an aspirant of medicine can seek admission and complete your course, with quality education, and affordable expenses along with taking a global exposure.
                </p> -->
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img loading="lazy" src="{{ asset('study-international/assets/img/features-1.webp') }}" alt="features-1" class="img-fluid" width="416" height="377">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Management</h3>
                <p class="fst-italic">
                  Developing a career in Management is the most preferred and has a standout benefit in itself, as this field helps in the development of strong leadership skills. Students can pursue a lucrative career option in the corporate and service sector industries like;
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Hotel Management, Tourism and Hospitality</li>
                  <li><i class="bi bi-check-circle-fill"></i> Finance and Banking.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Human Resource Management</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img loading="lazy" src="{{ asset('study-international/assets/img/features-2.webp') }}" alt="" class="img-fluid" width="416" height="377">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Engineering</h3>
                <p class="fst-italic">
                  Engineering has always been a highly demanding and dynamic field which has been widely preferred by students from the Background of Science. For engineering graduates, the career paths that have remained in high demand are;
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Software and Web-Development</li>
                  <li><i class="bi bi-check-circle-fill"></i> Data Science and Machine Learning</li>
                  <li><i class="bi bi-check-circle-fill"></i> Web Developer</li>
                </ul>
                <!-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> -->
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img loading="lazy" src="{{ asset('study-international/assets/img/features-3.webp') }}" alt="" class="img-fluid" width="416" height="377">
              </div>
            </div>
          </div>
          <!-- End Tab Content 3 -->

          <!--<div class="tab-pane" id="tab-4">-->
          <!--  <div class="row gy-4">-->
          <!--    <div class="col-lg-8 order-2 order-lg-1">-->
          <!--      <h3>Aviation</h3>-->
          <!--      <p class="fst-italic">-->
          <!--        Aviation is a very dynamic and technical-oriented discipline of study. It involves a lot of verticals like the study of design, mechanical and machinery manufacturing capability, and understanding the scientific and technical research-based areas. An individual with a background in Aviation can develop a strong career as;-->
          <!--      </p>-->
          <!--      <ul>-->
          <!--        <li><i class="bi bi-check-circle-fill"></i> Aeronautical Engineer</li>-->
          <!--        <li><i class="bi bi-check-circle-fill"></i> Aircraft Designer</li>-->
          <!--        <li><i class="bi bi-check-circle-fill"></i> Material and Structural Developer</li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--    <div class="col-lg-4 order-1 order-lg-2 text-center">-->
          <!--      <img loading="lazy" src="{{ asset('study-international/assets/img/features-4.webp') }}" alt="" class="img-fluid" width="416" height="377">-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Science</h3>
                <p class="fst-italic">
                  Science is itself a particular field, which consists of a range of different disciplines. A student can pursue career paths like;
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Research and Academia</li>
                  <li><i class="bi bi-check-circle-fill"></i> Technicians and Analysts</li>
                  <li><i class="bi bi-check-circle-fill"></i> Technical Writing</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img loading="lazy" src="{{ asset('study-international/assets/img/features-5.webp') }}" alt="" class="img-fluid" width="416" height="377">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane" id="tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Humanities</h3>
                <p class="fst-italic">
                  Humanities, as a stream offers boundless opportunities after completion of both UG and PG Degrees. The main ethos of Humanities has always been aimed towards cultivating a ground for a strong logical and critical thinking, enhancing communication skills, and developing creativity. A graduate in Humanities can pursue innovative career paths like;
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Education, Academia and Research</li>
                  <li><i class="bi bi-check-circle-fill"></i> Communication and Public Relations</li>
                  <li><i class="bi bi-check-circle-fill"></i> Non-Profit Sector and NGOs</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img loading="lazy" src="{{ asset('study-international/assets/img/features-6.webp') }}" alt="" class="img-fluid" width="416" height="377">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <!-- <p>Recent posts form our Blog</p> -->
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/services-russia.webp') }}" class="img-fluid" alt="service -russia" width="416" height="312"></div>
              <!-- <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div> -->
              <h3 class="post-title">Russia</h3>
              <p style="text-align: justify;">Russia is known for its rich and noble legacy of medical and engineering education programs, offering students an unique blend of cutting-edge research, strong technical and field experience, and diverse cultural exposures, with a strong emphasis on practical skills, making it an ideal destination for aspiring professionals at an affordable tuition fees with a global exposure.</p>
              <!-- <a href="https://synergy.university/" target="_blank" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/services-spain.webp') }}" class="img-fluid" alt="services spain" width="416" height="312"></div>
              <!-- <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div> -->
              <h3 class="post-title">Spain</h3>
              <p style="text-align: justify;">Spain is a vibrant and an affordable destination in the entire Europe, and Pursuing an academic degree from Spain gives a blended experience of academics, cultural immersion, industry exposure and a range of career opportunities. Also, Spain is a home to renowned Universities and Business Schools, that are known for providing globally recognized credentials, alongwith fostering personal growth and strong intellectual skills.</p>
              <!-- <a href="https://www.global-business-school.org/" target="_blank" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/services-france.webp') }}" class="img-fluid" alt="services france" width="416" height="312"></div>
              <!-- <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div> -->
              <h3 class="post-title">France </h3>
              <p style="text-align: justify;">France, with its iconic landmarks, rich history, and vibrant culture, captivates visitors with its unparalleled charm and sophistication, offering a blend of art, cuisine, and architecture that is both timeless and contemporary. Pursuing MBA courses in France offers attractive opportunities to students seeking top-tier business education in a dynamic European setting.</p>
              <!-- <a href="blog-details.html" target="_blank" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/services-dubai.webp') }}" class="img-fluid" alt="services-dubai" width="416" height="312"></div>
              <!-- <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div> -->
              <h3 class="post-title">Dubai, UAE </h3>
              <p style="text-align: justify;">Dubai is a dynamic metropolis in the heart of the UAE, dazzled with its futuristic skyline, luxurious lifestyle, and thriving business opportunities, offering a fusion of tradition and modernity amidst the desert sands. In Dubai, Hospitality, Data Analytics and Marketing & Designing courses thrive, providing cutting-edge skills in the heart of a global business hub, where innovation meets opportunity.</p>
              <!-- <a href="https://www.rit.edu/dubai/" target="_blank" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/services-switzerland.webp') }}" class="img-fluid" alt="services switzerland" width="416" height="312"></div>
              <!-- <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div> -->
              <h3 class="post-title">Switzerland</h3>
              <p style="text-align: justify;">Switzerland is known for its stunning scenery, precision engineering, and delectable chocolates, offering a harmonious blend of natural beauty and economic prosperity. In Switzerland, Hospitality courses epitomize excellence, blending renowned Swiss hospitality traditions, shaping the world's finest hoteliers and hospitality professionals.</p>
              <!-- <a href="https://www.htmidubai.com/" target="_blank" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <!--<div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="600">-->
          <!--  <div class="post-box">-->
          <!--    <div class="post-img"><img loading="lazy" src="{{ asset('study-international/assets/img/htmi-switzerland.webp') }}" class="img-fluid" alt="htmi-switzerland" width="416" height="312"></div>-->
          <!--    <h3 class="post-title">HTMI Switzerland</h3>-->
          <!--    <p>The HTMI Hotel and Tourism Management Institute, Switzerland is the world’s largest and fastest-growing hospitality education, training, and management institution, which is administered by the Swiss Hospitality Group International.</p>-->
          <!--  </div>-->
          <!--</div>-->


        </div>


      </div>

    </section>
    <!-- End Recent Blog Posts Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    How can students connect with the Team of Study International to seek the best possible support?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">The students can pursue any courses according to their eligibility. You can make a phone call by clicking on the <a class="btn-getstarted scrollto" href="tel:++91-8527282833"><b>Call To Action</b></a> Button above or Fill Out the Form by Clicking at the Fill Form Button. You can also mail us <a href="mailto:IB@langmainternational.com"><b>IB@langmainternational.com</b></a> or visit our Centre.</div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                       What are the popular courses offered by the Universities of these Countries?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    These Universities offer a range of different courses on different disciplines through different mediums, which a Student can choose according to their convenience.
                </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                 Is it necessary for students to have native language proficiency in a particular country to be eligible to pursue their education in their preferred country? 
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   In most of the cases, here at Study International we will ensure the scope and based on the requirement we will provide basic language training for the particular country, where the student will be willing to go.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Will       Langma Study International arrange for Visa and Documentation?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                   <a href="{{url('/')}}"><b>Langma Study International</b></a> arranges and helps a student to establish contact with the Educational Institution of the particular country and go through a probable counselling session where the student can interact with the officials of the University where they will be guided through the process of application.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    How can a student arrange for their financial aid documentation process to secure admission to the desired University?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   The Counselling experts in Study International will guide the students in all the documentation process. 
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('study-international/assets/img/faq.webp') }}");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
       <div class="container">

        <div class="section-header">
          <h2>Reach Us</h2>
          <!--<p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>-->
        </div>

      </div> 

     
      <!-- End Google Maps -->

       <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Broaden your chances to acquire the Passport towards a Worldwide Academic Excellence</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>E 73, South Extension Part-1, New Delhi- 110049, India</p>
                </div>
              </div>


              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p><a href="mailto:IB@langmainternational.com">IB@langmainternational.com</a></p>
                </div>
              </div>



              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p><a href="tel:++91-8527282833"> +91-8527282833</a></p>
                  
                </div>
              </div>


            </div>

          </div>

          <div class="col-lg-8">
            <form action="{{url('/apply-submit')}}" method="post" role="form" class="php-email-form">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile" required>

                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
               <input type="hidden" name="currenturl" value="{{ url()->current() }}">
               <input type="hidden" id="language" name="language" value="study-international">
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>


        </div>

      </div>
     

    </section>
     <div class="container-fluid map">
       <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7007.982597517704!2d77.220847!3d28.570024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25dba89c087%3A0x6b74c7356d18b11a!2sLangma%20School%20of%20Languages!5e0!3m2!1sen!2sin!4v1715174466738!5m2!1sen!2sin" width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="myFrame" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> 
      </div> 
    

    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Study International</h3>
              <p>
                E 73, South Extension Part-1,<br>
                New Delhi- 110049, India<br><br>
                <strong><i class="bi bi-telephone-fill"></i> </strong>   <a href="tel:++91-8527282833" style="color:white;"> +91-8527282833</a><br>

                <strong><i class="bi bi-envelope-at-fill"></i> </strong> <a href="mailto:IB@langmainternational.com" style="color:white;">IB@langmainternational.com</a><br>
              </p>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://langmainternational.com/study-international">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://langmainternational.com/study-international#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://langmainternational.com/study-international#recent-blog-posts">Services</a></li>
              <!-- <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>About Us</h4>
            <p>Study International is an initiative of Langma School of Languages Pvt. Ltd.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            <!-- &copy;  -->
            <strong><span> Langma International.</span></strong>
          </div>

        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://twitter.com/official_langma" target="_blank" aria-label="langmainternational-twitter" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/officiallangma" target="_blank" aria-label="langmainternational-facebook" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/officiallangma" target="_blank" aria-label="langmainternational-instagram" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/user/langmaschool" target="_blank" aria-label="langmainternational-youtube" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="https://www.linkedin.com/school/langma-international" target="_blank" aria-label="langmainternational-linkedin" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!--whatsapp and phone click starts here-->
   <div  class="container3" style="">
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
          <a href="https://api.whatsapp.com/send?phone=8527282833&text=I%27m%20interested%20in%20Study%20International" target="_blank">
              <!--<img src="https://langmainternational.com/frontend/css/langma-components/img/334-3349718_whatsapp-contact-whats-app-whatsapp-logo-hd-png-removebg-preview.png" height="60" width="60" alt="langma-whatsapp-chat" style="margin-left:8px; margin-top:10px; z-index: 2;"></a>  -->
               <span class="l7jjieqr fewfhwl7"><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" style="margin-left:18px; margin-top:18px; z-index: 2;"><path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path><path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path></svg></span>
         </a>
    </div>
    <!---->
    <div class="blog-share1 wpshare1" id="d-none4">
      <a class="icon wtpb1 call-t" href="tel:8527282833">
         <b>call us</b>
        <span class="hrs"><span style="position: relative;top: -1px;">+</span>91 8527282833</span>
        <span><i class="bi bi-telephone-fill" id="fone" aria-hidden="true"></i></span>
      </a>
    </div>
     <!--whatsapp and phone click endss here-->
      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="{{ asset('study-international/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('study-international/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('study-international/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('study-international/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('study-international/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <!-- Template Main JS File -->
  <script src="{{ asset('study-international/assets/js/main.js') }}"></script>
</body>
</html>