@extends('frontend.layouts.app')
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
  <style>
p{
    font-size:14px;
    text-align:justify;
}
.page-header1 {
    /*background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/privacy-policy.webp) center center no-repeat; */
    background-attachment: fixed;
    background-size: cover;
    background-attachment: fixed;
    width:100%;
    height: 100%;
    /*max-height: 100%;*/
    max-width: 100%;
}
 
</style>
@endsection

@section('content')
<section>
    <div class="img-fluid py-0 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <img src="https://langmainternational.com/normal_images/privacy-policy.webp" alt="privacy-policy" class="page-header1" width="1903" height="500">
    </div>
    
      <!--<div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/privacy-policy.webp) center center no-repeat; background-size: cover; background-attachment: fixed;">-->
      <!--      <div class="container py-5">-->
      <!--           <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">PRIVACY POLICY</h5> -->
      <!--      </div>-->
      <!--  </div>-->
    
    <div class="container">
        <div class="row">
        <div class="col-12 col-lg-8">

           <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Use of Cookies:</div>
           <P>A cookie is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies in your computer's hard drive. The cookies do not contain any of your personally identifiable information.</P>
      <p>Users are advised that if they wish to deny the use and saving of cookies from this website on to their computers hard drive they should take necessary steps within their web browsers security settings to block all cookies from this website and its external serving vendors or use the cookie control system if available upon their first visit.</p>
         <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Website Visitor Tracking</div>
         <p>This website uses tracking software to monitor its visitors to better understand how they use it. The software will save a cookie to your computers hard drive in order to track and monitor your engagement and usage of the website, but will not store, save or collect personal information.</p>
                <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Downloads & Media Files</div>
        <p>Any downloadable documents, files or media made available on this website are provided to users at their own risk. While all precautions have been undertaken to ensure only genuine downloads are available users are advised to verify their authenticity using third party anti-virus software or similar applications.</p>
       <p>Any downloadable documents, files or media made available on this website are provided to users at their own risk. While all precautions have been undertaken to ensure only genuine downloads are available users are advised to verify their authenticity using third party anti-virus software or similar applications.</p>
       <p>We accept no responsibility for third party downloads and downloads provided by external third party websites and advise users to verify their authenticity using third party anti-virus software or similar applications.</p>
         <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Contact & Communication With us</div>
         <p>Users contacting this us through this website do so at their own discretion and provide any such personal details requested at their own risk. Your personal information is kept private and stored securely until a time it is no longer required or has no use.</p>
        <p>Where we have clearly stated and made you aware of the fact, and where you have given your express permission, we may use your details to send you products/services information through a mailing list system. This is done in accordance with the regulations named in? The policy? above.</p>
   <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Email Mailing List & Marketing Messages</div>
   <p>We operate an email mailing list program, used to inform subscribers about products, services and/or news we supply/publish. Users can subscribe through an online automated process where they have given their explicit permission. Subscriber personal details are collected, processed, managed and stored in accordance with the regulations named in? The policy? above.</p>
        <p>Subscribers can unsubscribe at any time through an automated online service, or if not available, other means as detailed in the footer of sent marketing messages. The type and content of marketing messages subscribers receive, and if it may contain third party content, is clearly outlined at the point of subscription.</p>
      <p>Email marketing messages may contain tracking beacons / tracked clickable links or similar server technologies in order to track subscriber activity within email marketing messages. Where used, such marketing messages may record a range of subscriber data relating to engagement, geographic, demographics and already stored subscriber data.</p>
 <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">External Website Links & Third Parties</div>
 <p>Although we only look to include quality, safe and relevant external links, users are advised to adopt a policy of caution before clicking any external web links mentioned throughout this website.</p>
 <p>Shortened URL's; URL shortening is a technique used on the web to shorten URL's (Uniform Resource Locators) to something substantially shorter. This technique is especially used in social media and looks similar to this  (for example: <a href="//bit.ly/zyVUBo">//bit.ly/zyVUBo)</a>. Users should take caution before clicking on shortened URL links and verify their authenticity before proceeding.</p>
 <p>We cannot guarantee or verify the contents of any externally linked website despite our best efforts. Users should, therefore, note they click on external links at their own risk and we cannot be held liable for any damages or implications caused by visiting any external links mentioned.</p>
       <div class="text-uppercase fw-bold py-2" style="font-size: 17px; color: #4a97a2;">Social Media Policy & Usage</div>
       <p>We adopt a Social Media Policy to ensure our business and our staff conduct themselves accordingly online. While we may have official profiles on social media platforms users are advised to verify the authenticity of such profiles before engaging with, or sharing information with such profiles. We will never ask for user passwords or personal details on social media platforms. Users are advised to conduct themselves appropriately when engaging with us on social media.</p>
       <p>There may be instances where our website features social sharing buttons, which help share web content directly from web pages to the respective social media platforms. You use social sharing buttons at your own discretion and accept that doing so may publish content to your social media profile feed or page. You can find further information about some social media privacy and usage policies in the resources section below.</p>
        </div>
        <div class="col-12 col-lg-3">
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
                                    <form id="leads" action="{{url('leads')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fitness-form-name" class="fw-bold py-2">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-email" class="fw-bold py-2">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control required"  placeholder="Enter your Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="fitness-form-phone" class="fw-bold py-2">Phone:</label>
                                            <input type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" minlength="10" maxlength="10" name="phone" id="phone" class="form-control required" placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no.">
                                        </div>

                                        <div class="form-group">
                                             <label for="language" class="fw-bold py-2">Language:</label>
                                            <select id="nameido" class="w-100 border-0" name="languages">
                                                <option value="">Select your country</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="German">German</option>
                                                <option value="French">French</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Burmese">Burmese</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Sinhala">Sinhala</option>
                                                <option value="Swahili">Swahili</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Dari/Pashto">Dari/Pashto</option>
                                                <option value="Persian">Persian</option>
                                                <option value="IELTS">IELTS</option>
                                                <option value="TOEFL">TOEFL</option>
                                                <option value="HSK EXAM">HSK EXAM</option>
                                                <option value="Indian Regional Languages">Indian Regional Languages</option>
                                                <option value="Akan">Akan</option>
                                                <option value="Amharic">Amharic</option>
                                                <option value="Armenian">Armenian</option>
                                                <option value="Assamese">Assamese</option>
                                                <option value="Awadhi">Awadhi</option>
                                                <option value="Azerbaijani">Azerbaijani</option>
                                                <option value="Balochi">Balochi</option>
                                                <option value="Belarusian">Belarusian</option>
                                                <option value="Bengali">Bengali(Bangla)</option>
                                                <option value="Bhojpuri">Bhojpuri</option>
                                                <option value="Bodo">Bodo</option>
                                                <option value="Cebuano">Cebuano(Visayan)</option>
                                                <option value="Chewa">Chewa</option>
                                                <option value="Chhattisgarhi">Chhattisgarhi</option>
                                                <option value="Chittagonian">Chittagonian</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Deccan">Deccan</option>
                                                <option value="Dhundhari">Dhundhari</option>
                                                <option value="Dogri">Dogri</option>
                                                <option value="Eastern Min">Eastern Min(inc.Fuzhou dialect)</option>
                                                <option value="English">English</option>
                                                <option value="Fula">Fula</option>
                                                <option value="Gan">Gan</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Gujarati">Gujarati</option>
                                                <option value="Haitian Creole">Haitian Creole</option>
                                                <option value="Hakka">Hakka</option>
                                                <option value="Haryanvi">Haryanvi</option>
                                                <option value="Hausa">Hausa</option>
                                                <option value="Hiligaynon/Ilonggo">Hiligaynon/Ilonggo(Visayan)</option>
                                                <option value="Hmong">Hmong</option>
                                                <option value="Hungarian">Hungarian</option>
                                                <option value="Igbo">Igbo</option>
                                                <option value="Ilocano">Ilocano</option>
                                                <option value="Javanese">Javanese</option>
                                                <option value="Jin">Jin</option>
                                                <option value="Kannada">Kannada</option>
                                                <option value="Kashmiri">Kashmiri</option>
                                                <option value="Kazakh">Kazakh</option>
                                                <option value="Khmer">Khmer</option>
                                                <option value="Kinyarwanda">Kinyarwanda</option>
                                                <option value="Kirundi">Kirundi</option>
                                                <option value="Konkani">Konkani</option>
                                                <option value="Kurdish">Kurdish</option>
                                                <option value="Madurese">Madurese</option>
                                                <option value="Magahi">Magahi</option>
                                                <option value="Maithili">Maithili</option>
                                                <option value="Malagasy">Malagasy</option>
                                                <option value="Malay">Malay(inc.Indonesian and Malaysian)</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="Mandarin">Mandarin(entire branch)</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Marwari">Marwari</option>
                                                <option value="Meitei">Meitei (Manipuri)</option>
                                                <option value="Mossi">Mossi</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Northern Min">Northern Min</option>
                                                <option value="Odia">Odia(Oriya)</option>
                                                <option value="Oromo">Oromo</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Quechua">Quechua</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Sanskrit">Sanskrit</option>
                                                <option value="Santali">Santali</option>
                                                <option value="Saraiki">Saraiki</option>
                                                <option value="Serbo-Croatian">Serbo-Croatian</option>
                                                <option value="Shona">Shona</option>
                                                <option value="Sindhi">Sindhi</option>
                                                <option value="Somali">Somali</option>
                                                <option value="Southern Min">Southern Min</option>
                                                <option value="Sundanese">Sundanese</option>
                                                <option value="Swedish">Swedish</option>
                                                <option value="Sylheti">Sylheti</option>
                                                <option value="Tagalog">Tagalog(Filipino)</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Turkmen">Turkmen</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Ukrainian">Ukrainian</option>
                                                <option value="Uyghur">Uyghur</option>
                                                <option value="Uzbek">Uzbek</option>
                                                <option value="Wu">Wu(inc.Shanghainese)</option>
                                                <option value="Xhosa">Xhosa</option>
                                                <option value="Xiang">Xiang</option>
                                                <option value="Yoruba">Yoruba</option>
                                                <option value="Yue">Yue(inc.Cantonese)</option>
                                                <option value="Zhuang">Zhuang</option>
                                                <option value="Zulu">Zulu</option>
                                                <option value="Other Languages">Other Languages</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-sgpb" style="width: 100%;">

                                            </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="message" class="fw-bold py-2">Message:</label>
                                            <textarea name="message" class="form-control required" placeholder="Your Message Here..." style="height:90px;"></textarea>
                                        </div>
                                           <input type="hidden"  name="currenturl" value="{{ url()->current() }}">
                                        <div class="text-center py-2 mt-2">
                                              <input class="btn btn-success" type="submit">
                                        </div>

                                    </form>
                                </div>


                            </div>
                        </div>

        </div>
        </div>
    </div>
</section>
@endsection
