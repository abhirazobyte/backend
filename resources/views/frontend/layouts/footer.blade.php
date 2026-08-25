@php
$setting = ('\App\Models\Setting')::first();
@endphp
     <!-- Footer Start -->
     <!--<div class=""><img src="{{ asset('normal_images/footer.webp') }}" alt="footer" width="1903" height="324" style="width:100%; height:auto;" loading="lazy"></div>-->
     <div class="container-fluid text-light footer mt-0 py-5 fadeIn" data-wow-delay="0.1s" style=" color: rgba(255, 255, 255, 0.75); background-color: #282828;  border-top-color: #282828;">
         <div class="container py-5">
             <div class="row g-5">

                 <div class="col-6 col-lg-2 col-md-6">
                     <h3 class="text-white mb-4 text-uppercase" style="font-size: 0.875rem;">Quick Links </h3>
                     <a class="btn1 btn-link" href="{{ url('/') }}">Home</a>
                     <a class="btn1 btn-link" href="{{ url('about-us') }}">About Us</a>
                     <a class="btn1 btn-link" href="{{ url('our-staff') }}">Our Staff</a>
                     <a class="btn1 btn-link" href="{{ url('gallery') }}">Gallery</a>
                     <a class="btn1 btn-link" href="{{ url('terms-and-conditions') }}">Terms and Conditions</a>
                     <a class="btn1 btn-link" href="{{ url('faqs') }}" target="_blank">FAQs</a>
                     <a class="btn1 btn-link" href="{{ url('sitemap.xml') }}" target="_blank">XML Sitemap</a>
                 </div>
                 <div class="col-6 col-lg-2 col-md-6">
                     <h4 class="text-white mb-4 text-uppercase" style="font-size: 0.875rem;">Our Services</h4>
                     <a class="btn1 btn-link" href="{{ url('transcription') }}">Transcription</a>
                     <a class="btn1 btn-link" href="{{ url('translation') }}">Translation</a>
                     <a class="btn1 btn-link" href="{{ url('localization') }}">Localization</a>
                     <a class="btn1 btn-link" href="{{ url('multilanguage') }}">Multilanguage</a>
                     <a class="btn1 btn-link" href="{{ url('proofreading') }}">Proofreading</a>
                     <a class="btn1 btn-link" href="{{ url('voiceover') }}">Voiceover</a>
                     <a class="btn1 btn-link" href="{{ url('multicultural-marketing') }}">Multicultural Marketing</a>
                 </div>
                 <div class="col-6 col-lg-2 col-md-6">
                     <h4 class="text-white mb-4 text-uppercase" style="font-size: 0.875rem;">Get in Touch</h4>
                     <a class="btn1 btn-link" href="{{ url('career') }}">Careers</a>
                     <a class="btn1 btn-link" href="{{ url('program') }}">Corporate Programs</a>
                     <a class="btn1 btn-link" href="{{ url('contact') }}">Contact Us</a>
                     <a class="btn1 btn-link" href="{{ url('blog') }}" target="_blank">Blog</a>
                 </div>

                 <div class="col-6 col-lg-2 col-md-6">
                     <h4 class="text-white mb-4 text-uppercase" style="font-size: 0.875rem;">Important Links</h4>
                     <a class="btn1 btn-link" href="{{ url('payment') }}">Pay Now</a>
                     <a class="btn1 btn-link" href="{{ url('apply-now') }}">Apply Now</a>
                     <a class="btn1 btn-link" href="{{ url('certificate') }}">Apply for Certificate</a>
                     <a class="btn1 btn-link" href="{{ url('refund-policy') }}">Refund Policy</a>
                     <a class="btn1 btn-link" href="{{ url('privacy-policy') }}">Privacy-Policy</a>
                     <a class="btn1 btn-link" href="{{ url('disclaimer') }}">DISCLAIMER</a>
                 </div>

                 <div class="col-12 col-lg-3 col-md-6">
                     <h4 class="text-white mb-4 text-uppercase" style="font-size: 0.875rem;">CONTACT US</h4>
                     <p class="mb-2" style="font-size: 15px;"><i class="fa fa-map-marker-alt me-1"></i>E 73, South Extension Part-1,</p>
                     <p class="mb-2 ms-2" style="font-size: 15px;">  New Delhi- 110049, India</p>
                     <p class="mb-2 btn1 btn-link" style="font-size: 15x;"><a href="Tel:+91-9810117094" style="color:#fff;"><i class="fa-solid fa-phone"></i> +91-9810117094</a></p>
                     <p class="mb-2 btn1 btn-link" style="font-size: 15px;"><a href="mailto:info@langmainternational.com" style="color:#fff;"><i class="fa fa-envelope me-1"></i>info@langmainternational.com</a></p>
                     <!--<p class="mb-2" style="font-size: 12px;"><i class="fa fa-map-marker-alt me-1"></i>A 12E 49th Street, 18th Floor, New York, USA - 10017</p>-->
                     <div class="d-flex pt-2">
                         <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://twitter.com/official_langma" target="_blank" aria-label="langmainternational-twitter"><i class="fab fa-x-twitter" style="color: #adb5bd;"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.facebook.com/officiallangma" target="_blank" aria-label="langmainternational-facebook"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-2 p-0 text-center" href="https://www.youtube.com/user/langmaschool" target="_blank" aria-label="langmainternational-youtube"><i class="fab fa-youtube mt-2" style="color: #ed302f;"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/school/langma-international" target="_blank" aria-label="langmainternational-linkedin"><i class="fab fa-linkedin-in" style="color: #0082ca;"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.instagram.com/officiallangma" target="_blank" aria-label="langmainternational-instagram"><i class="fab fa-instagram" style="color: #ca005d;"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer End -->

 <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
     <div class="container">
         <div class="row">
             <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" style="font-size:13px;">
                 Copyrights &copy; {{ date('Y') }}, <a class="border-bottom" href="/">Langma International</a>.
             </div>
         </div>
     </div>
 </div>


        <div  class="container3" style="">
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
          <a href="https://api.whatsapp.com/send?phone=919810117094&text=I%27m%20interested%20in%20Learning%20Foreign%20Languages" target="_blank">
              <!--<img src="{{ asset('frontend/css/langma-components/img/334-3349718_whatsapp-contact-whats-app-whatsapp-logo-hd-png-removebg-preview.png') }}" height="60" width="60" alt="langma-whatsapp-chat" style="margin-left:8px; margin-top:10px; z-index: 2;"></a>  -->
               <span class="l7jjieqr fewfhwl7"><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" style="margin-left:18px; margin-top:18px; z-index: 2;"><path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path><path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path></svg></span>
           </div>
        
<div class="blog-share1 wpshare1" id="d-none4">
      <a class="icon wtpb1 call-t" href="tel:9810117094">
    <span class="hrs"><span style="position: relative;
    top: -1px;">+</span>91 9810117094</span>
    <span><i class="fa fa-phone" id="fone" aria-hidden="true"></i></span>
  </a>
    </div>
    
<style>

.container3{
    display: inline;
    left:10px; 
    position: fixed; 
    right:30px; 
    bottom: 10px; 
    z-index: 99;
}
    @media only screen and (max-width: 600px) {
        .container3{
   left: auto;
       right:10px; 
    }
    }
</style>