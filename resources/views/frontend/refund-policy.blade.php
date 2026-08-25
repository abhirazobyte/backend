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
    }
    b{
        color:grey;
    }
</style>
  <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/return-policy.webp) center center no-repeat; background-size: cover;  height: 500px;">
      <!--background-attachment: fixed;-->
            <!--<div class="container py-5">-->
            <!--     <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">REFUND POLICY</h5> -->
            <!--</div>-->
        </div>
  
   <!--<div class="container-fluid jap-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(15, 66, 41, .6), rgba(15, 66, 41, .6)), url({{ asset('normal_images/1613201767078.png') }}) center center no-repeat; background-size: cover; background-attachment: fixed;">-->
   <!--         <div class="container text-center py-5">-->
   <!--             <h3 class="display-5  mb-4 animated slideInDown" style="color: #fff; font-family: system-ui;">REFUND POLICY</h3>-->

   <!--         </div>-->
   <!--     </div>-->
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
                                        <div class="postcontent col-lg-9" style="text-align: justify;">


<div class="fw-bold text-uppercase py-1"><h3 class="py-3" style="color: #4a97a2; font-size:17px;">CANCELLATION AND REFUND POLICY</h3></div>

  <p>Langma's refund policy is applicable in the following cases only:</p>
  <p>1. For international students, in case of urgency, going back to their country for personal or health-related problems/issues, by showing their air tickets, medical reports, etc.<br></p>
  <p>2. For Indian students, shifting overseas by showing an appointment letter for the respective jobs.<br></p>
  <p>3. The percentage of refundable amount is 72% in case the learner has not taken or started with the course within one week from the date of registration.<br></p>
  <p>4. In case the student needs to take his enrolment back in between his/her ongoing course (because of 1 or 2), then the refundable amount will be given? after deducting the charges of GST, course material, 10% of amenities and classes are taken.</p>
  <p>Below table is for the representation only.</p>
  <p><b class="page_speed_1060744947">The fee paid for the course: Rs. 18,500</b></p>
  
 
        
             <table class="page_speed_1043538282"><tbody class="page_speed_1763842643"><tr><td colspan="2" width="616" class="page_speed_1010173538">
                 <p class="page_speed_377458223"><span class="page_speed_1651572451">Amount to be deducted</span></p>
                 </td>
                 </tr>
                 <tr>
                     <td width="308" class="page_speed_1877100088">GST (18%)</td>
                     <td width="308" class="page_speed_1010173538">Rs. 3,330</td></tr>
                     <tr>
             <td width="308" class="page_speed_1877100088">Course material</td>
             <td width="308" class="page_speed_1010173538">Rs. 2,000</td>
             
             
             </tr>
             <tr>
                 <td width="308" class="page_speed_1877100088">Cancellation Charges</td>
             <td width="308" class="page_speed_1010173538">Rs. 4,609</td>
             </tr>
             <tr>
                 <td width="308" class="page_speed_1877100088">Amenities used (10%)</td>
                 <td width="308" class="page_speed_1010173538">Rs. 1,850</td>
                 </tr>
                 <tr>
                     <td width="308" class="page_speed_1877100088">Classes are taken (20hrs)</td>
                     <td width="308" class="page_speed_1010173538">Rs. 4,528</td>
                     </tr>
                     <tr class="page_speed_1763842643">
                    <td width="308" class="page_speed_1877100088">Total deduction</td>
                    <td width="308" class="page_speed_1010173538">Rs. 16,317<br><br></td>
                    
                    
                    </tr></tbody></table> 
          <div class="fw-bold text-uppercase py-1"><h3 class="py-3" style="color: #4a97a2; font-size:17px;">Total refundable amount: Rs. 2,183</h3></div>
          <p><b>Note: </b>The refund is not applicable if the trainer is assigned to the student for online sessions with the allotted time slot.</p>
  <p>5. The amount will be refunded within 20 days after submitting the entire details and documents with a written application at the office of LANGMA SCHOOL OF LANGUAGES PVT LTD.</p>
  <p>6. LANGMA SCHOOL OF LANGUAGES PVT LTD is not obligated to make refunds to students who are terminated due to violation of institution's has written, disciplinary and/or attendance policies or local, state, or union laws.<br></p>
      
                                        </div>
                                        <!-- .postcontent end -->

                                        <!-- Sidebar
                                        ============================================= -->
                                          <div class="sidebar col-lg-3">
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
