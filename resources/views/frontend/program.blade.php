@extends('frontend.layouts.app')
{{-- @section('title', 'about') --}}
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Foreign Language Corporate Training Institute in Delhi, Foreign Languages Institute for Corporate Training in India')
@section('description', 'Best Corporate language Training Institute in Delhi NCR - Langma School of Languages offers online corporate language courses and classes for companies in Delhi, India.')
@section('keywords', 'Foreign Language Corporate Training Institute in Delhi,  Best Foreign Language Institute for Corporate Training in India, Corporate Training Institute for Foreign language')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')


@section('slider')
<style>
    .nav-linkactive{
     margin-right: 35px;
    padding: 12px 0;
    color: black;
    font-size: 13px;
    font-weight: bold;
    outline: none;
    }
    p{
        font-size:15px;
            text-align: justify;
    }

    label {
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #555;
    margin-bottom: 10px;
    cursor: pointer;
}

.form-floating .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaaaaa2e;
    border-radius: 50px;
    height: 40px;
    box-shadow: 0px 0px 2px grey;
}

.input-group .form-control:focus {
        border-color: #28a745;
           box-shadow: 0 0 0 0.0rem rgba(40, 167, 69, 0.25);
    } 

</style>

 <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/CorporateTraining.webp) center center no-repeat; background-attachment: fixed; background-size: cover;  height: 500px;">
            <div class="container py-5">
                 <h5 class="display-3 mb-4 animated slideInDown text-center text-uppercase" style="color: #ffff; font-family: system-ui; margin-top:100px;">CORPORATE-TRAINING</h5> 

            </div>
        </div>
@endsection

@section('content')
    <!-- Content
                                  ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                   
      <div class="text-uppercase fw-bold"><h1 style="font-size: 17px; color: #4a97a2;">{{ $item->title }}</h1></div>
                <!-- Posts
            ============================================= -->
                <div id="posts" class="row gutter-30">
                    <div class="entry col-12">
                        <div class="grid-inner">
                           
                            <div class="entry-content">
                           {!! $item->content !!}
                               
             <section class="section">
            <div class="container-sm mt-5">
                <div class="shadow-lg mb-5 bg-body rounded-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="p-4 p-lg-3">
                                <div class="p-lg-4">    
                                    <div class="text-center">
                                        <h3 class="heading1 mb-3" style="color: #296166; font-family: 'Poppins', sans-serif; font-size:15px;">  FOR FURTHER INFORMATION LEAVE YOUR CONTACT DETAILS BELOW</h3>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <form action="{{ url('/contact-lead') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-user" style="color:#00000082;"></i></span>
                                                        <input type="text" name="name" class="form-control border-0 rounded-5" placeholder="Enter Your Name" required>
                                                    </div>

                                                </div>
                                                <div class=" mb-3">
                                                    <div class="input-group mb-3 border-2 border rounded-5 ">
                                                        <span class="input-group-text bg-white border-0 rounded-5 p-0 ms-3" id="basic-addon1 "><i class="fa-solid fa-envelope" style="color:#00000082;"></i></span>
                                                        <input type="email" name="email" class="form-control border-0 rounded-5" placeholder="Enter Your Email" required>
                                                    </div>

                                                </div>
                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <input type="tel" class="form-control border-0 rounded-5" placeholder="Enter Your Contact No" name="mobile" id="phone" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" required>
                                                    </div>
                                                </div>


                                                <div class="mb-3 ">
                                                <div class="input-group mb-3 form-floating">
                                                <select name="language" id="nameido" class="w-100 border-0 required" required>
                                                <option value="" selected="selected">Language Interested in</option>
                                                
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="German">German</option>
                                                <option value="French">French</option>
                                                <option value="Balkan">Balkan</option>
                                                <option value="Baltic">Baltic</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Mongolian">Mongolian</option>
                                                 <option value="Nordic">Nordic</option>
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
                                   </select>
                                                    </div>

                                                </div>



                                    
                                                <div class="mb-3 ">
                                                    <div class="input-group mb-3 border-2 border rounded-5">
                                                        <textarea class="form-control bg-light border-0" name="message" placeholder="Describe Your Requirement" id="message" required style="border-radius: 14px;"></textarea>
                                                    </div>

                                                </div>
                                             <input type="hidden" id="currenturl" name="type" value="contact"/>


                                                <button type="text " class="btn  w-100 rounded-5 text-light" style="background: #296166; font-weight: 600;">Submit</button>
                                            </form>

                                        </div>

                              
                                    </div>

                                </div>

                            </div>



                        </div>

                      <div class="col-lg-6 d-none d-lg-block">
                            <div class="w-100  rounded-end" style="background: linear-gradient(#d6338400, rgb(220 53 69 / 0%)), url(https://langmainternational.com/frontend/css/langma-components/img/website-business-photo.webp) center center no-repeat; height: 100%;">
                                <div class="text-center p-5">
                                    <div class="text-center p-5 mt-5"></div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
                               
                                    <!--<section id="content mt-0" style="">-->
                                        
                                    <!--    <div class="content-wrap" >-->
                                    <!--        <div class="container clearfix">-->

                                    <!--            <div class="form-widget">-->

                                    <!--                <div class="form-result"></div>-->
                                     
                                    <!--        <div class="text-uppercase  mb-2 py-4" style="font-size:17px; letter-spacing:1px; margin-top: 10px; color:#4a97a2;">-->
                                    <!--            <span style="border-left: double; text-align: start;"><b class="ms-2">FOR FURTHER INFORMATION LEAVE YOUR CONTACT DETAILS BELOW</b></span>-->
                                    <!--        </div>-->
                                    <!--                <div class="row shadow bg-light border">-->


                                    <!--                    <div class="col-lg-4 dark" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0,0,0,.2)), url({{ asset('normal_images/program-form.webp') }}) center center / cover; min-height: 400px;">-->
                                    <!--                        {{-- <h3 class="center mt-5">Fitness Quotes</h3>-->
                                    <!--                        <div class="calories-wrap center w-100 px-2">-->
                                    <!--                            <span class="text-uppercase mb-0 ls2">Loosing Fat</span>-->
                                    <!--                            <h2 id="calories-count" class="calories display-3 mb-2 heading-block border-bottom-0 fw-semibold font-body py-2"></h2>-->
                                    <!--                            <span class="text-uppercase h6 ls3">Estimated Calories</span>-->
                                    <!--                        </div>-->
                                    <!--                        <small class="center m-0 position-absolute" style="bottom: 12px;">Metric Units</small> --}}-->
                                    <!--                    </div>-->



                                    <!--                    <div class="col-lg-8 p-5">-->
                                    <!--                        <form class="row mb-0" id="program-form" action="{{ url('/contact-lead') }}" method="post" enctype="multipart/form-data">-->
                                    <!--                            @csrf-->
                                    <!--                            @if (\Session::has('success'))-->
                                    <!--                            <div class="alert alert-success">-->
                                    <!--                                <ul>-->
                                    <!--                                    <li>{!! \Session::get('success') !!}</li>-->
                                    <!--                                </ul>-->
                                    <!--                            </div>-->
                                    <!--                        @endif-->

                                    <!--                        @if (count($errors) > 0)-->
                                    <!--                            <div class="alert alert-danger">-->
                                    <!--                                @foreach ($errors->all() as $error)-->
                                    <!--                                    <p class="error_item">{{ $error }}</p>-->
                                    <!--                                @endforeach-->
                                    <!--                            </div>-->
                                    <!--                        @endif-->
                                                            
                                                            
                                    <!--                            <div class="style-msg successmsg" >-->
                                    <!--                                <div class="sb-msg" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully submitted this Form.</div>-->
                                    <!--                            </div>-->
                                                              
                                    <!--                            <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="fitness-form-name">Name:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10 mb-3">-->
                                    <!--                                        <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Full Name" required>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="fitness-form-email">Email:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10  mb-3">-->
                                    <!--                                        <input type="email" name="email" id="email" class="form-control required" placeholder="Enter your Email" required>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="company">Company:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10  mb-3">-->
                                    <!--                                        <input type="text" name="company" id="company" class="form-control required"  placeholder="Enter your Company" required>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="fitness-form-phone">Phone:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10  mb-3">-->
                                    <!--                                        <input type="tel" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57"  maxlength="15" name="mobile" class="form-control"  id="mobile" placeholder="Enter your Number" title="Plase enter your valid mobile no." required>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->

                                    <!--                            <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="language">Language:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10  mb-3">-->
                                    <!--                                        <input type="text" name="language" id="language" class="form-control required"  placeholder="Language Interested in(*)" required>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                                                
                                    <!--                             <div class="col-12 form-group">-->
                                    <!--                                <div class="row">-->
                                    <!--                                    <div class="col-sm-2 col-form-label">-->
                                    <!--                                        <label for="language">Message:</label>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-10  mb-3">-->
                                                                            
                                    <!--                                          <textarea name="message" class="form-control required" placeholder="Your Message Here..." rows="4" required></textarea>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                                                
                                    <!--                             <input type="hidden"  name="services" value="">-->
                                    <!--                             <input type="hidden"  name="type"     value="Corporate Programs"/>-->

                                    <!--                            <div class="col-12 d-flex justify-content-end align-items-center">-->
                                    <!--                                <button type="submit" name="submit" id="program-submit" class="btn btn-success ms-2" style="background: #296166; font-weight: 600;">Submit</button>-->
                                    <!--                            </div>-->
                                    <!--                        </form>-->
                                    <!--                    </div>-->

                                    <!--                </div>-->

                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</section>-->



                                    <div class="line"></div>



                            </div>

                        </div>

                    </div>
                </div>

                <!-- #posts end -->

            </div>

        </div>

    </section>
    <!-- #content end -->

@endsection
