<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Learn Italian Language with Langma School of Languages" />
        <meta name="author" content="langmainternational" />
        <link rel="apple-touch-icon" href="https://langmainternational.com/normal_images/favicon-32x32.png" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
        <title>Learn Italian Language with Langma School of Languages</title>
        <link rel="icon" type="image/png" sizes="32x32" href="https://langmainternational.com/normal_images/favicon-32x32.png" />
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
        <link rel="stylesheet" href="https://langmainternational.com/assets/css/templatemo-edu-meeting.css" />
        <link rel="stylesheet" href="https://langmainternational.com/assets/css/owl.css" />
    </head>

    <body>
        <!-- Sub Header -->
        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="left-content"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="right-icons">
                            <ul>
                                <li>
                                    <a style="color: #fff;" href="Tel:+91-9810338044"><i class="fa fa-phone"></i> +91-9810338044</a>
                                </li>
                                <li>
                                    <div id="google_translate_element"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="https://langmainternational.com/learn-italian-language" class="logo">
                                <img src="https://langmainternational.com/assets/images/logo-english.webp" width="207" height="70" alt="thesunvillagelogo" style="image-rendering: -webkit-optimize-contrast;" />
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop playsinline id="bg-video" style="width: 100%;">
                <source src="https://langmainternational.com/assets/images/italian-landing-video.mp4" type="video/mp4" />
            </video>
            <!--<img src="https://langmainternational.com/assets/images/meetings-bg.webp" id="bg-video"/>-->

            <div class="video-overlay header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <h6>Come With Us To</h6>
                                            <h1 style="color: #f5a425;" class="display-4">
                                                LEARN ITALIAN LANGUAGE
                                            </h1>
                                            <figure class="text-left">
                                                <blockquote class="blockquote">
                                                    <!--  <p>Where People Meet Nature</p> -->
                                                </blockquote>
                                                <figcaption class="blockquote-footer" style="color: #ffffff; font-size: 19px;">
                                                    New Language, New Careers
                                                    <cite title="Source Title"></cite>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <section class="contact-us float-right" id="contact1" style="background-image: none; padding: 0px 0px 0px 0px;">
                                                <div class="row">
                                                    <div class="form1" style="margin-left: 416px;">
                                                        <div class="col-lg-12">
                                                            <form id="contact" action="apply-submit" autocomplete="off" method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h2>Enquire now</h2>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <fieldset>
                                                                            <input name="name" type="text" id="name" placeholder="Full Name *" required="" onpaste="return false;" />
                                                                        </fieldset>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <fieldset>
                                                                            <input
                                                                                name="mobile"
                                                                                type="tel"
                                                                                onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57"
                                                                                minlength="10"
                                                                                maxlength="10"
                                                                                id="mobile"
                                                                                placeholder="MOBILE *"
                                                                                pattern="[789][0-9]{9}"
                                                                                required=""
                                                                                onpaste="return false;"
                                                                            />
                                                                        </fieldset>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <fieldset>
                                                                            <input name="email" type="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="EMAIL *" onpaste="return false;" />
                                                                        </fieldset>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <fieldset>
                                                                            <textarea name="message" class="form-control" id="message" placeholder="YOUR MESSAGE...*" required="" onpaste="return false;"></textarea>
                                                                        </fieldset>
                                                                    </div>
                                                                    <input type="hidden" id="language" name="language" value="italian" onpaste="return false;" />
                                                                    <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" onpaste="return false;" />
                                                                    <div class="col-lg-12">
                                                                        <fieldset>
                                                                            <button type="submit" name="submit" id="form-submit" class="button">SUBMIT</button>
                                                                            <div class="spinner-border text-primary" id="preload" role="status" style="display: none;">
                                                                                <span class="visually-hidden">Loading...</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none" style="padding-top: 400px;"></div>
        </section>
        <!-- ***** Main Banner Area End ***** -->
        <section class="meetings-page">
            <div class="container">
                <div class="row">
                    <div style="text-align: center; margin-top: -80px; margin-bottom: 50px; padding-bottom: 20px; font-size: 22px; font-weight: 700; text-transform: uppercase; color: #fff;">
                        <h1>Learn italian with Langma</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="meeting-single-item">
                                    <div class="down-content">
                                        <!-- <a href="meeting-details.html"><h4>Online Teaching and Learning Tools</h4></a>  
                  <p>Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-008, Brazil</p>   -->
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            <b><span style="color: #f5a425;">Langma School of Languages</span></b>
                                            offers several options for students who wish to pursue Italian Language. Since the number of Institution offering Italian language programme are limited and one has to choose graduate programme to
                                            study; however, if you are ready to take on the challenge to seek out the opportunity to do so, Langma School of Language will help you set yourself apart from the rest and help yourself stand out
                                            from a crowd. It is the time to show that you are committed to learn something new!
                                        </p>
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            Langma School of Language offers Italian language programme to students, corporate, and government bodies in various levels to suit the specific needs. Programmes are divided into 6 levels
                                            <span style="color: #f5a425;">“Beginner (A1 & A2)”</span>, <span style="color: #f5a425;">“Intermediate (B1 & B2)”</span>, and <span style="color: #f5a425;">“Advanced (C1 & C2)”</span>. There are
                                            both weekday and weekend classes. Langma School of Language is more than mere educational facility, our specialised services includes translation, interpretation, voice-over, and etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="meetings-page" id="about">
            <div class="container">
                <div class="row">
                    <div style="text-align: center; margin-top: -80px; margin-bottom: 50px; padding-bottom: 20px; font-size: 22px; font-weight: 700; text-transform: uppercase; color: #fff;">
                        <h1>REASON TO LEARN ITALIAN LANGUAGE</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="meeting-single-item">
                                    <div class="down-content">
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            <b><span style="color: #f5a425;">Italian</span></b>
                                            has slowly evolved from Latin into many regional dialects. At the end of middle ages, the Tuscan dialect became the most preferred and popular of Italian, due to the centrally located (Florence)
                                            and its thriving economy. Dante, Petrarca, and Boccaccio, came from Tuscany, who left a long lasting mark on the Italian language. When the peninsula was unified in 19th century Italian became the
                                            official language of Italy.
                                        </p>
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            There are more than 85 million native speaker of Italian language; 65 million Italian speakers are native speakers within the European Union. It is primarily spoken in Italy; however, is also an
                                            official language in San Marino, Switzerland, and Vatican City. Due to wide Italian Diaspora, it is a minority language in various countries across the globe. Italian’s longest word is
                                            precipitevolissimevolmente, and stands for “in a way like someone or something that acts very hastily”. Other long Italian words include particolareggiatissimamente (“in an extremely detailed
                                            way”) and anticostituzionalissimamente (“in a way that strongly violates the constitution”).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="apply-now" id="apply">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="item">
                                    <div
                                        style="
                                            text-align: center;

                                            padding-bottom: 20px;
                                            font-size: 22px;
                                            font-weight: 700;
                                            text-transform: uppercase;
                                            color: #fff;
                                        "
                                    >
                                        <h1>Some feature langma is proud of</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">MORE CAREER OPPORTUNITY</h5>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-users" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">PROVIDING KNOWLEDGE ON COOPERATIVE PLATFORMS</h5>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-book" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">STRUCTURED TAILORED LESSON</h5>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-language" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">IMPROVE LANGUAGE SKILLS</h5>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">LEARN EFFECTIVELY</h5>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item text-center">
                                    <i class="fa fa-globe" aria-hidden="true" style="font-size: 48px; color: white;"></i>
                                    <h5 class="text-light">GLOBAL LEARNING ENVIRONMENT</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-facts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="text-center fs-2" style="margin-top: -87px;">Few Facts About Langma</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="count-area-content plus">
                                            <div class="count-digit">150</div>
                                            <div class="count-title">LANGUAGES</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="count-area-content plus">
                                            <div class="count-digit">300</div>
                                            <div class="count-title">TRAINERS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="count-area-content plusk">
                                            <div class="count-digit">50</div>
                                            <div class="count-title">JOBS</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="count-area-content plusk">
                                            <div class="count-digit">100</div>
                                            <div class="count-title">STUDENTS TAUGHT</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="video">
                            <iframe
                                width="560"
                                height="377"
                                src="https://www.youtube.com/embed/bYx0qnDQ-5o?autoplay=1&amp;mute=1"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen=""
                                loading="lazy"
                                style="border-radius: 20px;"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-courses" style="padding-top: 91px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="text-center fs-2">Italian Course Levels</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="owl-courses-item owl-carousel">
                            <div class="item">
                                <div class="rounded down-content">
                                    <h4>A1</h4>
                                    <h4 class="text-white bg-success">Elementary-Level 1</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4>A2</h4>
                                    <h4 class="text-white bg-success">Elementary-Level 2</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4>B1</h4>
                                    <h4 class="text-white bg-success">Intermediate-Level 3</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4>B2</h4>
                                    <h4 class="text-white bg-success">Intermediate-Level 4</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4>C1</h4>
                                    <h4 class="text-white bg-success">Advanced-Level 5</h4>
                                </div>
                            </div>

                            <div class="item">
                                <div class="down-content rounded">
                                    <h4>C2</h4>
                                    <h4 class="text-white bg-success">Advanced-Level 6</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-courses" id="courses" style="padding-top: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="text-center fs-2">30 Excellent Career Options for Foreign Language Learners</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="owl-courses-item owl-carousel">
                            <div class="item">
                                <div class="rounded down-content">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-graduation-cap" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">EDUCATION</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-users" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">BUSINESS & ADMIN</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-building" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">POLITICS & GOVERNMENT</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-globe" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">TOURISM</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="down-content rounded">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-hospital-o" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">HEALTH CARE</h4>
                                </div>
                            </div>

                            <div class="item">
                                <div class="down-content rounded">
                                    <h4><span class="d-none">fa-users</span><i class="fa fa-building" style="font-size: 100px; color: #0d6efd;"></i></h4>
                                    <h4 class="text-white bg-success">MNCs</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-us" style="padding-top: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 align-self-center">
                        <div class="row">
                            <div class="col-lg-12 d-none d-lg-block">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14015.96522167696!2d77.2208467!3d28.5700238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b74c7356d18b11a!2sLangma%20School%20of%20Languages!5e0!3m2!1sen!2sin!4v1653117739377!5m2!1sen!2sin"
                                    style="border-radius: 20px; width: 100%; height: 450px;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-info overflow-hidden">
                            <ul>
                                <li>
                                    <h6>Phone Number</h6>
                                    <span>
                                        <a style="color: #fff;" href="Tel:+91-9810338044"><i class="icon-line-phone-call"></i> +91-9810338044</a>
                                    </span>
                                </li>
                                <li>
                                    <h6>Email Address</h6>
                                    <a href="mailto:info@langmainternational.com"><i class="icon-line-mail"></i> info@langmainternational.com</a>
                                </li>
                                <li>
                                    <h6>Address</h6>
                                    <span>E 73, South Extension Part-1</span>
                                    <span>New Delhi-110049, India</span>
                                </li>
                                <li>
                                    <h6>Website URL</h6>
                                    <span>langmainternational.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-lg-none d-block text-center mt-4">
                <a
                    href="#"
                    class="button"
                    style="
                        font-size: 13px;
                        color: BLACK;
                        background-color: #fff;
                        padding: 12px 30px;
                        display: inline-block;
                        border-radius: 22px;
                        font-weight: 500;
                        text-transform: uppercase;
                        transition: all 0.3s;
                        border: none;
                        outline: none;
                    "
                >
                    Enquire Now
                </a>
            </div>

            <div class="footer">
                <p>Copyright © 2022 Langma School of Languages. All Rights Reserved.</p>
            </div>
        </section>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://langmainternational.com/assets/js/isotope.min.js"></script>
        <script src="https://langmainternational.com/assets/js/owl-carousel.js"></script>
        <script src="https://langmainternational.com/assets/js/custom.js"></script>
        
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f0095ab223d045fcb7b4e85/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        
        <!--tranclet-->
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {
                        pageLanguage: "en",
                        layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT,
                    },
                    "google_translate_element"
                );
            }

            function triggerHtmlEvent(element, eventName) {
                var event;
                if (document.createEvent) {
                    event = document.createEvent("HTMLEvents");
                    event.initEvent(eventName, true, true);
                    element.dispatchEvent(event);
                } else {
                    event = document.createEventObject();
                    event.eventType = eventName;
                    element.fireEvent("on" + event.eventType, event);
                }
            }

            $(window).load(function () {
                $(".goog-logo-link").empty();
                $(".goog-te-gadget").html($(".goog-te-gadget").children());
            });
        </script>
        <!--trancelet ends-->
        
        <script>
            $(document).ready(function () {
                $("#contact").trigger("reset");
                $("#preload").hide();
                $("#form-submit").click(function () {
                    let a = $("#name").val();
                    let b = $("#mobile").val();
                    let c = $("#email").val();
                    let d = $("#message").val();

                    if (!a || !b || !c || !d) {
                        // alert("Please Fill All The Form Fields");
                    } else {
                        // alert("ok");
                        $("#form-submit").hide();
                        $("#preload").show();
                    }
                });
            });
        </script>
    </body>
</html>
