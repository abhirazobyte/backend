@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Langma School of Languages - Terms and Conditions')
@section('description', 'Know the terms and conditions of Langma School of Languages in Delhi-NCR.')
@section('keywords', 'Best language institute in India, Language classes near me, foreign language classes near me, best foreign language institute in Delhi')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
<style>
   b{
    color: var(--bs-gray);
    text-align: justify;
   }
</style>
    <!-- Page Title
		============================================= -->
<div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/TermsConditions.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3  mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">Terms-Conditions</h5> 
            </div>
        </div>
@endsection

@section('content')

<div class="container-xxl py-5">
    <div class="container">


        <div class="row">
            <div class="col-lg-8" style="text-align: justify;">
                <div class="text-uppercase fw-bold" style="font-size:17px; color: #4a97a2;">TERMS & CONDITIONS</div>
                <div class="py-2" style="font-size:15px; text-align: justify;">

                    <p class="page_speed_1541587316 page_speed_767770686">These are the terms & conditions governed and adopted at Langma International that bind the student and school when a student enrolls in a programme.</p>

                </div>

                <div class="fw-bold text-uppercase py-1" style="font-size:17px;">
                    <span class="py-3" style="color:#4a97a2;">ADMISSION CRITERIA</span>

                </div>
                <ol style="font-size:15px;">
                    <li>The main aim of the Admission policy of Langma International is to admit students irrespective of social, racial, religious, and other considerations.</li>
                    <li>Application for admission can be made directly at Langma International. Application forms are available from reception or by contacting the counseling desk.</li>
                    </ol>


                <div class="text-uppercase  mb-2 py-2" style="font-size:17  px; letter-spacing: 1px;">
                    <span style="border-left: double; text-align: start;"><b class="ms-2">STUDENTS ENROLLING IN ANY PROGRAMME MUST:</b></span>
                </div>


                <ol style="font-size:15px;">
                    <li>1.	Have an interest to pursue the programme </li>
                        <li>Have completed the application form </li>
                    <li>Have a valid ID card or passport </li>
                        <li>Have taken the placement test</li>
                    </ol>

              <p style="font-size:15px;">Students, who are applying for a programme, are required to make the payment before the programme commences to reserve a place</p>
                <div class="fw-bold text-uppercase py-1" style="font-size:17px;">
                    <span class="py-3" style="color:#4a97a2; text-align: none;">PROGRAMME PLACEMENT AND INDUCTION</span>


                </div>
                <ol style="font-size:15px;">
                    <li class="page_speed_629150058">Students must attend an induction session after the enrolment which is intended to introduce to key personnel, programme, and certification information. The students will also be informed about the punctuality policy and other rules of the Langma School of Languages. The students’ Liaison Officer would inform them about their timetable and information about the Certification Test.</li>
                     <li>The Placement of a student at a particular level is made by Langma International based on the written test and a short interview since Langma’s responsibility is to assign students appropriate levels and the students hereby must accept and acknowledge that.</li>
                     <li>Langma International employs its reasonable endeavors to accommodate students regarding their study level; any change to the student’s level is based on formative and summative assessment and at Langma’s absolute discretion. </li>
                    <li>Langma International assures that there are no more than 10 students in any programme including intensive and extensive training sessions.</li>
                    </ol>


                    <div class="fw-bold text-uppercase" style="font-size:17px;">
                        <span class="py-1" style="color:#4a97a2;">ASSESSMENTS AND EXAMINATIONS</span>
                    </div>
        
                    <ol style="font-size:15px; margin-top: 16px;">
                        <li>Langma International offers ongoing formative and summative assessments throughout all programmes. Our teachers at Langma International incorporate authentic and official exam preparation contents into their classes and offer guidelines for self-study.</li>
                        <li>The students must sign an agreement that they understand the exam is mandatory to obtain a certificate; therefore, they must sit in the exam.</li>
                        <li>The students must sign an agreement that they understand the exam is mandatory to obtain a certificate; therefore, they must sit in the exam.</li>    </ol>
                        <div class="text-uppercase  py-2" style="font-size:12px;">
                            <span style="border-left: double;"><b class="ms-2">Langma International prepares and registers students for the following exams:</b></span>
                        </div>
                        <ol style="font-size:14px;     margin-top: 16px;">
                            <li><b>IELTS, TOEFL, PTE, OET, GRE, SAT, GMAT, and CELPIP (English)</b></li>
                            <li><b>GOETHE, TELC (German)</b></li><li><b>DELF, TEF, DALF, TCF (French)</b></li>
                            <li><b>SIELE, DELE (Spanish)</b></li><li><b>CILS, CELI (Italian)</b>&nbsp;</li>
                            <li><b>TORFL (Russian)&nbsp;</b></li><li><b>CAPLE (Portuguese)&nbsp;</b></li>
                            <li><b>HSK (Chinese)</b></li>
                            <li><b>TOPIK (Korean)</b></li>
                            <li><b>JLPT (Japanese)&nbsp;</b></li>
                            </ol>
                            <div class="fw-bold text-uppercase" style="font-size:17px;">
                                <span class="py-3" style="color:#4a97a2; text-align: start;">HOLIDAY AND UNSCHEDULED LEAVE</span>
                            </div>
                        
                            <ol style="font-size:15px; margin-top: 16px;">
                                <li>There are no classes held on a public holiday; nevertheless, Langma International makes all reasonable endeavors to offer extra sessions in case students' classes fall on public holidays. </li>
                              <li>No unauthorized leave is permitted except in the documented cases of health complications, close family bereavement, or legal issues, In these circumstances, students are advised to apply for the leave in writing to the Director of Academics (info@langmainternational.com), precisely state the duration of leave and submit the relevant documents. The Director of Academics will review the situation and a decision would be sent through the mail. </li>
                            <li>Students, who are sick must phone or e-mail the counseling desk that they cannot attend the class (this must be done every day until they return to the class). When the student returns to class, they are advised to present a doctor’s prescription in case they have missed more than 2 days. However, failure to present the doctor’s prescription for the absence may result in disciplinary action being taken against them.</li>
                            </ol>

                            
            <div class="fw-bold text-uppercase" style="font-size:16px;">
                <span class="py-3" style="color:#4a97a2;">ATTENDANCE, PUNCTUALITY, SAFETY, AND BEHAVIOURAL POLICY</span>
            </div>

            <ol style="font-size:15px; margin-top: 16px;">
            <li>Langma International makes all reasonable endeavors to set and maintain timetables and decorum of the classroom. Langma International does not hold any obligation to reschedule the classes or organize extra classes to make up for any classes the student has missed and the student must honor the policy. </li>
            <li>Students are advised to be in class on time, one will receive 15 minutes grace period where students can attend the class. After the grace period, students may not be permitted to enter the class. </li>
            <li>Students’ frequent absences will be notified immediately and verbally. If the situation remains the same until 2 weeks, a written warning is issued. If the issue is not addressed in the following weeks, Langma International will issue a final warning informing the possible expulsion. Expelled students are not entitled to apply for a refund or readmission.</li>
            <li>Langma International promotes an environment congenial to learning; therefore, bullying, discrimination, and victimization cannot be tolerated. Langma International premises operate zero tolerance for aggression; this includes both physical and verbal acts of aggression. </li>
            <li>Students are not allowed to drink alcohol, or smoke cigarettes to consume any intoxication on the school premises; they are not allowed to attend any classes if they are found to be under the influence of alcohol or intoxicating substances. </li>
            <li>Students are liable for any damage caused by them to the property of Langma International and payment for such damage must be made immediately. </li>
            </ol>

            <div class="fw-bold text-uppercase" style="font-size:14px;">
                <span class="py-3 mb-1" style="color:#4a97a2;">Payment methods</span>
            </div>
            <ol style="font-size:12px; margin-top: 16px;">
                <li><b>Langma International</b> accepts the payment of the programme through <b>Bank Transfer, Credit or Debit Card, and Cheque.</b></li>
                <li>The full fee must be submitted before commencing the programme&nbsp;</li>
                <li>When Bank Transfer or <b>Credit/Debit</b> is chosen as the mode of payment, an additional 2% would be charged and GST is exclusive.&nbsp;</li>
               </ol>
               
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





        <div class="row g-5 align-items-end">
            <div class="col-lg-8 col-md-7" style="text-align: justify;">
                <div class="text-uppercase fw-bold" style="font-size:17px; color: #4a97a2;">terms & conditions</div>
                <div class="py-2" style="font-size:14px; text-align: justify;">

                    <p class="page_speed_1541587316 page_speed_767770686">These are the terms & conditions governed and adopted at Langma International that binds the student and school when a student enrols in a programme.</p>

                </div>

                <div class="fw-bold text-uppercase py-1" style="font-size:17px;">
                    <span class="py-3" style="color:#4a97a2;">Admission criteria</span>

                </div>
                <ol style="font-size:14px;">
                    <li>The main aim of the Admission policy of Langma International is to admit students irrespective of social, racial, religious, and other considerations.</li>
                    <li>Application for admission can be made directly at Langma International. Application forms are available from reception or by contacting the counselling desk.</li>
                    </ol>


                <div class="text-uppercase  mb-2 py-2" style="font-size:17  px; letter-spacing: 1px;">
                    <span style="border-left: double; text-align: start;"><b class="ms-2">Students enrolling in any programme must:</b></span>
                </div>


                <ol style="font-size:14px;">
                    <li>Have the interest to pursue the programme&nbsp;</li>
                        <li>Have completed the application form&nbsp;</li>
                    <li>Be in possession of a valid ID card or passport&nbsp;</li>
                        <li>Have taken the placement test</li>
                    </ol>

              <p style="font-size:14px;">Students, who are applying for a programme, are required to make the payment before the programme commences in order to reserve a place</p>
                <div class="fw-bold text-uppercase py-1" style="font-size:17px;">
                    <span class="py-3" style="color:#4a97a2; text-align: none;">Programme placement and Induction</span>


                </div>
                <ol style="font-size:14px;">
                    <li class="page_speed_629150058">Students must attend an induction session after the enrolment which is intended to introduce to key personnel, programme and <b>certification</b> information. The students will also be informed about the punctuality policy and other rules of the <b>Langma International</b>. Students’ Liaison Officer would inform about their timetable and information about the Certification Test.</li>
                     <li>The Placement of a student at a particular level is made by <b>Langma International</b> on the basis of written test and a short interview, since&nbsp;Langma’s responsibility is to assign students appropriate level and the students hereby must accept and acknowledge that.&nbsp;</li>
                     <li><b>Langma International</b>&nbsp;employs its reasonable endeavours to accommodate students in regards to their study level; any change to the student’s level is based on formative and summative assessment and at Langma’s absolute discretion.&nbsp;&nbsp;</li>
                    <li><b>Langma International</b> assures that there are no more than 10 students in any programme including intensive and extensive training sessions.</li>
                    </ol>




            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          


            </div>




<div class="row">
 <div class="col-12 col-lg-6 col-md-6">
  

 </div>
 <div class="col-12 col-lg-6 col-md-6">


   

</div>
</div>



  
               <div class="fw-bold text-uppercase" style="font-size:13px;">
                <span class="py-3" style="color:#4a97a2;">Langma International Bank details as follows: </span>

                <ol style="font-size:12px;     margin-top: 16px;">
                    <li><b>Account Name: Langma School of Languages Pvt. Ltd.</b></li>
                  <li>  <b>Account Number: 50200003479232</b></li>
                    <li><b>IFSC: HDFC0000319</b></li>
                    <li><b>IBAN: GB58CHAS60924211135191</b></li>
                    <li><b>Swift Code: HDFCINBB</b></li>
                    <li><b>Bank: HDFC Bank Ltd.</b></li>
                    <li><b>Branch: South Extension Part- 2</b></li> </ol>
            </div>


        </div>
    </div>
</div>

    <!-- Content

                          ============================================= -->
    <!-- #content end -->
@endsection
