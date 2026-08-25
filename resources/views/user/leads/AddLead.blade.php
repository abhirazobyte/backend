@extends('user.layouts.app')
@section('title', 'Bootstrap 5 Admin Template')

@section('sidebar')
@include('user.layouts.sidebar')
@endsection

@section('navbar')
@include('user.layouts.navbar')
@endsection

@section('content')

<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Add New Lead</h1>

    </div>

    <div class="row">
        <div class="col-12 col-xl-7">
            <div class="card">

                <div class="card-body">

                    <form action="{{route('lead_submit')}}" method="post" enctype="multipart/form-data">

                        <div class="sparkline10-hd" style="padding-bottom:20px;">
                            <div class="main-sparkline10-hd">


                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <p class="error_item">{{ $error }}</p>
                                    @endforeach
                                </div>
                                @endif

                            </div>
                        </div>

                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="number" name="mobile" id="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Enter Mobile" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Language</label>
                            <select name="language" class="form-control">
                                <option value="">Select</option>
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
                                <option value="Bengali(Bangla)">Bengali(Bangla)</option>
                                <option value="Bhojpuri">Bhojpuri</option>
                                <option value="Bodo">Bodo</option>
                                <option value="Cebuano(Visayan)">Cebuano(Visayan)</option>
                                <option value="Chewa">Chewa</option>
                                <option value="Chhattisgarhi">Chhattisgarhi</option>
                                <option value="Chittagonian">Chittagonian</option>
                                <option value="Czech">Czech</option>
                                <option value="Deccan">Deccan</option>
                                <option value="Dhundhari">Dhundhari</option>
                                <option value="Dogri">Dogri</option>
                                <option value="Eastern Min(inc.Fuzhou dialect)">Eastern Min(inc.Fuzhou dialect)</option>
                                <option value="English">English</option>
                                <option value="Fula">Fula</option>
                                <option value="Gan">Gan</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Haitian Creole">Haitian Creole</option>
                                <option value="Hakka">Hakka</option>
                                <option value="Haryanvi">Haryanvi</option>
                                <option value="Hausa">Hausa</option>
                                <option value="Hiligaynon/Ilonggo(Visayan)">Hiligaynon/Ilonggo(Visayan)</option>
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
                                <option value="Malay(inc.Indonesian and Malaysian)">Malay(inc.Indonesian and Malaysian)</option>
                                <option value="Malayalam">Malayalam</option>
                                <option value="Mandarin(entire branch)">Mandarin(entire branch)</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Marwari">Marwari</option>
                                <option value="Meitei (Manipuri)">Meitei (Manipuri)</option>
                                <option value="Mossi">Mossi</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Northern Min">Northern Min</option>
                                <option value="Odia(Oriya)">Odia(Oriya)</option>
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
                                <option value="Tagalog(Filipino)">Tagalog(Filipino)</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Turkmen">Turkmen</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Uyghur">Uyghur</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Xhosa">Xhosa</option>
                                <option value="Xiang">Xiang</option>
                                <option value="Yoruba">Yoruba</option>
                                <option value="Zhuang">Zhuang</option>
                                <option value="Zulu">Zulu</option>
                                <option value="Other Languages">Other Languages</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" placeholder="Enter Message" autocomplete="off">{{old('message')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="cityName" value="{{old('cityName')}}" class="form-control" placeholder="Enter City Name" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('active_lead') }}">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>





@endsection

@section('footer')
@include('user.layouts.footer')
@endsection
<script>
    function comparepPassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        alert(password)
        alert(confirmPassword)
        if (password != confirmPassword) {
            alert('check')
            document.getElementById("passmsg").innerHTML = 'Password and Confirm Password does not match';
        } else {
            document.getElementById("passmsg").innerHTML = '';
        }
    }
</script>