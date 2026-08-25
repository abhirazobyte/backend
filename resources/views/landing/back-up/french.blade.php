<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Learn French Language with Langma School of Languages" />
        <meta name="author" content="langmainternational" />
        <link rel="apple-touch-icon" href="https://langmainternational.com/normal_images/favicon-32x32.png" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
        <title>Learn French Language with Langma School of Languages</title>
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
                            <a href="#" class="logo"><img src="https://langmainternational.com/assets/images/logo-english.webp" width="207" height="70" alt="thesunvillagelogo" style="image-rendering: -webkit-optimize-contrast;" /></a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop playsinline id="bg-video" style="width: 100%;">
                <source src="https://langmainternational.com/assets/images/france-landing-video.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <h6>Come With Us To</h6>
                                            <h1 style="color: #f5a425; font-size: 16px;" class="display-4">LEARN FRENCH LANGUAGE</h1>
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
                                                                                required=""
                                                                                pattern="[789][0-9]{9}"
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
                                                                    <input type="hidden" id="language" name="language" value="french" />
                                                                    <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}" />
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
                        <h1>Learn French with Langma</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="meeting-single-item">
                                    <div class="down-content">
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            <b><span style="color: #f5a425;">Langma School of Languages</span></b> is the pioneer in providing quality education of French language to students. We offer the best French language courses that
                                            are abreast with the changing trends in the job industry. Langma School of Languages combines several things to create a unique learning experience that has set us apart. Our students share their
                                            beliefs as they return to us bringing their relatives and friends with pride in their eyes.Langma School of Languages is active in promoting the growth and development of French language learning
                                            skills through our classroom and online platforms across the world.
                                        </p>
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            Langma School of Languages follows an international standard <span style="color: #f5a425;">“Common European Framework of Reference (CEFR)”</span> whilst teaching foreign languages ranging from
                                            <span style="color: #f5a425;">A1 (Beginners)</span> to <span style="color: #f5a425;">C2 (Proficient)</span>. Langma School of Languages has a fully equipped infrastructure such as Computer Lab,
                                            Library, and Wi-Fi facility. Langma School of Languages uses its own tested methodology: the Audio/Video – cum – Interactive Method (ACIM), giving a proven quick and easy grasp of the languages.
                                            ACIM offers fast results in comprehension and speaking by introducing words and phrases in a structured way to develop sentence framing in an understandable manner, our methodology is suitable for
                                            learners of all age groups and easily adapted to specific needs.
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
                        <h1>REASON TO LEARN FRENCH LANGUAGE</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="meeting-single-item">
                                    <div class="down-content">
                                        <p class="description" style="border-top: 0px solid #eee; margin-top: -48px; margin-bottom: -48px; border-bottom: 0px solid #eee; font-size: 19px; line-height: 37px;">
                                            <b><span style="color: #f5a425;">French</span></b>
                                            is among the top languages in the world, the number of countries where it has official status is huge. It is taught in almost every country in the world alongside English. The number of French
                                            speakers has tripled since 1945 and it boasts over 150 million students and 3 million teachers. French is the official language of the UN (United Nations) and the EU (European Union) as well as a
                                            part of the innumerable other international organisations including Amnesty International, Doctors Without Borders, The International Labour Organisation, and The Red Cross.
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
                                    <div style="text-align: center; padding-bottom: 20px; font-size: 22px; font-weight: 700; text-transform: uppercase; color: #fff;">
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
                                src="https://www.youtube.com/embed/wVmPeRUJF0o?autoplay=1&amp;mute=1"
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
                            <h2 class="fs-2 text-center">French Course Levels</h2>
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
                            <h2 class="fs-2 text-center">30 Excellent Career Options for Foreign Language Learners</h2>
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

        <section class="contact-us">
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
                                    <a href="mailto:info@langmainternational.com"><i class="icon-line-mail"></i>info@langmainternational.com</a>
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
