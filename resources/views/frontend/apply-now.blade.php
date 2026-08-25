@extends('frontend.layouts.app')
@php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title','Apply for Best Foreign Languages Course and Classes, Best Foreign Language Institute in Delhi,  Learn Foreign Languages')
@section('description', 'Apply to take admission to pursue foreign language course in German, Spanish, French, Japanese, Korean, Russian etc. from best foreign language institute in Delhi, India.')
@section('keywords', 'Best Foreign Language Institute in India, Apply for Foreign Language classes near me, foreign language Courses')
{{--@section('title', $item->seo_title)--}}
{{--@section('description', $item->seo_description)--}}
{{--@section('keywords', $item->seo_keyword)--}}
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '')
@section('slider')
 <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgb(15 66 41 / 32%), #21252947), url(https://langmainternational.com/normal_images/apply-now.webp) center center no-repeat;  background-size: cover;  height: 500px;"></div>
@endsection
@section('content')
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
             <!--<div class="line"></div>-->
                <div class="mx-auto center clearfix text-center mb-4" style="max-width: 900px;">
                    {{-- <img class="bottommargin" src="{{ asset('normal_images/' . $seo_item->logo) }}" alt="website logo"> --}}
                    {{-- <h1>Welcome! To <span>Langma School of Languages</span>.</h1> --}}
                    <h2 style="font-size:17px; color: #4a97a2; letter-spacing: 1px;"><span> LANGMA</span> has been helping individuals, businesses, NGO’s and Government Agencies
                        <span>achieve their language proficiency goals</span> in more than&nbsp; <span>50+
                            languages since 2012.</span>
                    </h2>
                </div>

                <!--<div class="line"></div>-->
            <div class="form-widget" style="padding: 14px; margin-top:10px;">
                <div class="form-result"></div>
                <div class="row shadow bg-light border">
                    <div class="col-lg-4 dark order-2 order-lg-1" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0,0,0,.2)), url({{ asset('normal_images/home-page.webp') }}) center center / cover; min-height: 400px;">
                        <!--<h3 class="center mt-5"></h3>-->
								<div class="calories-wrap center w-100 px-2">

				                 </div>
                    </div>
                    <div class="col-lg-8 p-5 order-1 order-lg-2" id="apply">
                        <form class="row mb-0" action="{{url('apply-submit')}}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="alert alert-danger text-center" id="error" style="display: none;"></div>
                            <div class="style-msg successmsg">
                                <div class="sb-msg text-center" style="display: none;" id="show"><i class="icon-thumbs-up"></i><strong>Well done!</strong> You successfully submitted this Form.</div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="name">Name:</label>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="text"  name="name" class="form-control required"  placeholder="Enter your Full Name" onpaste="return false;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="email">Email:</label>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <input type="email" name="email"  class="form-control" placeholder="Email" onpaste="return false;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="phone">Phone:</label>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                            <input type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="15" name="mobile" id="phone" class="form-control required" placeholder="mobile no." title="Plase enter your valid mobile no.">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="language">Language:</label>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <select name="language"  class="form-control select-1 form-select required text-start" style="width:100%;" id="nameido">
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
                                            <option value="Ukrainian">Ukrainian</option>
                                            <option value="Urdu">Urdu</option>
                                            <option value="Uyghur">Uyghur</option>
                                            <option value="Uzbek">Uzbek</option>
                                            <option value="Wu">Wu(inc.Shanghainese)</option>
                                            <option value="Xhosa">Xhosa</option>
                                            <option value="Xiang">Xiang</option>
                                            <option value="Yoruba">Yoruba</option>
                                            <option value="Yue">Yue(inc.Cantonese)</option>
                                            <option value="Zhuang">Zhuang</option>
                                            <option value="Zulu">Zulu</option>
                                            <option value="Balkan">Balkan</option>
                                            <option value="Baltic">Baltic</option>
                                            <option value="Hebrew">Hebrew</option>
                                            <option value="Mongolian">Mongolian</option>
                                            <option value="Nordic">Nordic</option>
                                            <option value="Other Languages">Other Languages</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="message">Message:</label>
                                    </div>
                                    <div class="col-sm-10 mb-3">
                                        <textarea name="message" id="message" class="form-control required" onpaste="return false;"  placeholder="Describe your requirement..." required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <input type="hidden" id="currenturl" name="currenturl" value="{{ url()->current() }}"/>
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-center">
                               
                                <input class="btn ms-2 text-light" type="submit" style="background: #296166;">
                                <div class="spinner-border text-success" role="status" style="display: none;" id="preload">
                                <span  class="visually-hidden">Loading...</span>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>
    
    <style>
    .select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 10px;
    padding-top: 5px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-align:start;
}
    </style>
@endsection