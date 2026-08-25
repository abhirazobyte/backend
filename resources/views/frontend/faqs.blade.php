@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Foreign languages institute, Foreign Languages Courses- FAQs')
@section('description', 'Know the frequently asked questions (faqs) about foreign languages courses and classes and foreign language institutes.')
@section('keywords', 'keywords" content="Best language institute in India, best language institute in Delhi, Foreign Language courses in Delhi')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
<style>
p {
    font-size: 15px;
    line-height: 24px;
    text-align: justify;
    font-family: poppins,sans-serif;
}
</style>

        
        <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/FAQs_LANGMA.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">FAQs</h5> 
            </div>
        </div>

@endsection

@section('content')
    <!-- Content
                          ============================================= -->
                          <section id="content">
                            <div class="content-wrap">
                                <div class="container clearfix">
                                    <div class="row gutter-40 col-mb-80">

                                        <div class="postcontent col-lg-9 mb-5">
                                            <div class="clear"></div>

                                            <div id="faqs" class="faqs">

                                                <div class="toggle faq faq-marketplace faq-authors">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                        <div class="text-uppercase fw-semibold  py-2" style="font-size:17px; color: #4a97a2;">HOW CAN I ENROL ON A PROGRAMME?</div>
                                              
                                                    </div>
                                                    <div class="toggle-content">
                                                        To enroll in a programme, please ensure that you have filled out our online application form <a href="{{ url('apply-now') }}" target="_blank"> here.</a> Once the form is submitted, we will contact you to confirm the programme and arrange payment.
                                                       
                                                    </div>
                                                </div>

                                                <div class="toggle faq faq-authors faq-miscellaneous">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                   
                                                          <div class="text-uppercase fw-semibold py-2" style="font-size:17px; color: #4a97a2;">HOW TO MAKE THE PAYMENT?</div>
                                                    </div>
                                                    <div class="toggle-content">
The payment can be made by Cards (Credit/Debit) or Bank transfer to our account. To make a Credit Card/Debit card payment online <a href="{{ url('payment')}}">Click here</a>. If you face any difficulties whilst making a payment, please call us or send an email and we will be happy to help with the process. </div>
                                                </div>

                                                <div class="toggle faq faq-miscellaneous">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                       
                                                          <div class="text-uppercase fw-semibold py-2" style="font-size:17px; color: #4a97a2;">WHAT PROGRAMME SHALL I CHOOSE?</div>
                                                    </div>
                                                    <div class="toggle-content">
                                                  Langma International offers a wide range of programmes. If you face any difficulties whilst choosing a programme, please call us or send an email and we will be happy to offer you brief counseling.
                                                  </div>
                                                </div>

                                                <div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                      
                                                            <div class="text-uppercase fw-semibold  py-2" style="font-size:17px; color: #4a97a2;"> STUDY MATERIALS ARE INCLUDED IN THE PROGRAMME?</div>
                                                    </div>
                                                    <div class="toggle-content">
                                                      Yes, study materials are included in the programme fees. Once the payment is made, students would receive a course book. If students need some supplementary books, an additional fee would be charged.
                                                    </div>
                                                </div>

                                                <div class="toggle faq faq-marketplace faq-authors">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                 
                                                          <div class="text-uppercase fw-semibold  py-2" style="font-size:17px; color: #4a97a2;">DO I RECEIVE A CERTIFICATE AT THE END OF PROGRAMME?</div>
                                                    </div>
                                                    <div class="toggle-content">
                                                   Students are rewarded with a certificate for their programme after the successful completion of the course.
                                                    </div>
                                                </div>

                                                <div class="toggle faq faq-affiliates faq-miscellaneous">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                 
                                             <div class="text-uppercase fw-semibold py-2" style="font-size:17px; color: #4a97a2;">HOW MANY STUDENTS ARE THERE IN A BATCH?</div>
                                                    </div>
                                                    <div class="toggle-content">
                                                       The average class size at Langma International is 5 students, and the maximum number of students per class is 9.
                                                    </div>
                                                </div>

                                                <div class="toggle faq faq-legal faq-itemdiscussion">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon">
                                                            <i class="toggle-closed icon-question-sign"></i>
                                                            <i class="toggle-open icon-question-sign"></i>
                                                        </div>
                                                        
                                                                   <div class="text-uppercase fw-semibold  py-2" style="font-size:17px; color: #4a97a2;">WHAT IS THE TIME AND MODE OF STUDY?</div>
                                                    </div>
                                                    <div class="toggle-content">
                                                      The timetable of programme is designed by our Student Liaison Officer (Morning, Afternoon, or Evening (7.00 am – 9.00 pm). Our programmes are offered online and classroom, tailored to suit the specific needs.    </div>
                                                </div>
                                            </div>
                                        </div>

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
                                    <form id="leads" action="{{url('apply-submit')}}" method="post" enctype="multipart/form-data">
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
                                            <input type="tel" name="mobile" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" name="phone" id="phone" class="form-control required" placeholder="mobile no." title="Plase enter your valid 10 Digit mobile no.">
                                        </div>

                                        <div class="form-group">
                                             <label for="language" class="fw-bold py-2">Language:</label>
                                            <select name="language" id="nameido" class="w-100 border-0" >
                                                <option value="">Select your country</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="German">German</option>
                                                <option value="Balkan">Balkan</option>
                                                <option value="Baltic">Baltic</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Nordic">Nordic</option>
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
                                           <input class="btn text-light" type="submit" style="background: #296166; font-weight: 600;">
                                        </div>

                                    </form>
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
