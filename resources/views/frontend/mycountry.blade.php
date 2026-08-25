@extends('frontend.layouts.app')
{{-- @section('title', 'about') --}}
{{-- @php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;

@endphp --}}
{{-- @section('title', $item->seo_title)
@section('description', $item->seo_description)
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '') --}}


@section('slider')
    <!-- Page Title
      ============================================= -->

    <!-- #page-title end -->
@endsection

@section('content')
    <!-- Content

                              ============================================= -->
    <div class="col-lg-6">

        <div class="row col-mb-50">


            <div class="col-md-5 col-lg-7">
                <div class="widget subscribe-widget clearfix">
                    {{-- <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5> --}}
                    <div class="widget-subscribe-form-result"></div>
                    <form id="country-form" action="#" method="post" class="mb-0" novalidate="novalidate"
                        enctype="multipart/form-data">
                        {{-- {{ route('mycountry') }} --}}
                        @csrf
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                        <div class="input-group mx-auto">
                            <div class="input-group-text">
                                <i class="icon-search"></i>
                            </div>
                            <select class="form-select required valid" name="country" id="country" aria-invalid="false"
                                required="required">
                                {{-- selected="selected" --}}
                                <option value="">Select Language</option>
                                <option value="french">French Language</option>
                                <option value="chinese">Chinese Language</option>
                                <option value="german">German Language</option>
                                <option value="japanese">Japanese Language</option>
                                <option value="korean">Korean Language</option>
                                <option value="russian">Russian Language</option>
                                <option value="spainese">Spainese Language</option>
                                <option value="english">English Language</option>
                            </select>
                            <button class="btn btn-success" name="country-submit" id="country-submit" type="submit">Select Language</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <!-- #content end -->
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        // save add form starts...
        $(document).on("click", "#country-submit", function(e) {

            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            //alert('success');
            let country = $("#country").val();
            let _token = $("input[name = _token]").val();
            alert(country);
            alert(_token);
            let formData = new FormData();
           // formData.append('country', country);
            //formData.append('token', token);

            if (country === '') {
                alert("Select Language");
            } else {
                let jqXHR = $.ajax({
                    url: "/formcountry",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                    // beforeSend:function(jqXHR) {alert("beforeSend");},
                    //  statusCode: {
                    //   200: function() {alert("200 OK");},
                    //   500: function() {alert("500 Internal Server Error");},
                    //   422: function() {alert("422 Unprocessable Entity");},
                    //   404: function() {alert( "404 page not found" );},
                    // }
                    //HTTP response status codes
                    // Informational responses (100–199)
                    // Successful responses (200–299)
                    // Redirects (300–399)
                    // Client errors (400–499)
                    // Server errors (500–599)
                });

                jqXHR.done(function(data, textStatus, jqXHR) {
                    //alert("done" + " :" + data + " :" + textStatus + " :"  + jqXHR);
                    //alert(jqXHR.status);
                    //if (jqXHR.status == 200) {alert("OK");}
                     //alert(jqXHR.status);
                    // console.log(data);
                    // console.log(country);

                    if (country== "french") {
                        //alert(country);
                        window.location.href = '/online-french-classes';
                    }else if (country == "chinese"){
                        window.location.href = '/learn-online-chinese-language';
                    }else if (country == "german"){
                        window.location.href = '/online-german-classes';
                    }else if (country == "japanese"){
                        window.location.href = '/online-japanese-language-course';
                    }else if (country == "korean"){
                        window.location.href = '/online-korean-language-courses';
                    }else if (country == "russian"){
                        window.location.href = '/russian-language-course';
                    }else if (country == "spainese"){
                        window.location.href = '/spanish-language-courses';
                    }else if (country == "english"){
                        window.location.href = '/best-english-language-institute';
                    }else{
                        window.location.href = '/';
                    }

                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                    alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                });

                // jqXHR.always(function( data, textStatus, errorThrown ) {
                //   alert("always:" + data + " :" + textStatus + " :"  + errorThrown);
                //  });
            }

        });

    });
    // save add form ends here.....
</script>
