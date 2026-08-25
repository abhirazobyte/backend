@extends('frontend.layouts.app')
{{-- @php
$banner = asset('normal_images/' . $item->logo);
$bg_banner = !empty($item->banner) ? $item->banner : $item->image;
@endphp
@section('title', $item->seo_title)
@section('description', $item->seo_description)
@section('keywords', $item->seo_keyword)
@section('url', url()->current())
@section('type', 'article')
@section('image', $banner ? $banner : '')
@section('image_url', $banner ? $banner : '') --}}
@section('slider')
<style>
.form-group label{
    color:#fff;
    font-weight: 600;
     padding-bottom: 10px;
}
   .form-group{
    padding-bottom: 10px;
    }

.select2-container--default .select2-selection--multiple {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    height: 40px;
}

</style>
    <!-- Page Title
              ============================================= -->
    <!-- #page-title end -->
    <section id="page-title">

        <div class="container clearfix">
      <div class="text-uppercase fw-bold py-2 page_speed_245432892"><h2 style="padding: 26px; color: #4a97a2;"> Apply for certificate</h2></div>      
           

        </div>

    </section><!-- #page-title end -->
@endsection

@section('content')
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap"  style="background: #4a97a2;">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row py-4">

							<div class="col-lg-8">
							    
								<form  class="row" id="certificate-form" method="post">
								    <!--action="certificate"-->
                                    @csrf
									 
                                    <div class="col-md-6 form-group">
										<label for="name">Name<small class="text-danger">*</small></label>
										<input type="text" id="name" name="name" value="" class="form-control required" placeholder="Enter your Full Name" />
									</div>

									<div class="col-md-6 form-group">
										<label for="email">Email Address<small class="text-danger">*</small></label>
										<input type="email" name="email" id="email" class="form-control required" placeholder="Enter your Email Address">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="mobile">Contact Number<small class="text-danger">*</small></label>
									<input type="text" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" minlength="10" maxlength="15" name="mobile" id="mobile" class="form-control required valid" placeholder="REGISTER CONTACT NO.WITH LANGMA." title="Plase enter your valid mobile no." aria-invalid="false">
									</div>
									
									
                                    <div class="col-md-6 form-group">
										<label for="city">CITY<small class="text-danger">*</small></label>
										<input type="text" name="city" id="city" class="form-control required" placeholder="Enter your City">
									</div>

                                    <div class="col-md-6 form-group">
										<label for="country">NATIONALITY<small class="text-danger">*</small></label>
										<input type="text" name="country" id="country" class="form-control required" placeholder="Enter your NATIONALITY">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="trainer_name">TRAINER NAME<small class="text-danger">*</small></label>
										<input type="text" name="trainer_name" id="trainer_name" class="form-control required" placeholder="Enter your TRAINER NAME">
									</div>

                                    <div class="col-12">
										<div class="row input-daterange">
											<div class="col-md-6 form-group">
												<label for="select_batch">Start Date:<small class="text-danger">*</small></label>
												<input type="text" name="select_batch" id="select_batch" class="form-control  text-start required valid" placeholder="DD-MM-YYYY">
												<!--input-datepicker-->
											</div>
											<div class="col-md-6 form-group">
												<label for="select_batch_to">Drop Off Date:<small class="text-danger">*</small></label>
												<input type="text" name="select_batch_to" id="select_batch_to" class="form-control  text-start required valid" placeholder="DD-MM-YYYY">
												<!--input-datepicker-->
											</div>
										</div>
									</div>


                                    <div class="col-md-6 form-group">
                                        	<label for="course">Select Course:<small class="text-danger">*</small></label>
										<select class="form-select required valid" name="course" id="course">
											<option value="">-- Select Course --</option>
											<option value="Burmese">Burmese</option>
                                            <option value="Mandarin">Mandarin</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Mongolian">Mongolian</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Sinhala">Sinhala</option>
                                            <option value="Swahili">Swahili</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="English">English</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Urdu">Urdu</option>
                                            <option value="Dari/Pashto">Dari/Pashto</option>
                                            <option value="Persian">Persian</option>
                                            <option value="Indian Regional Languages">Indian Regional Languages</option>
                                            <option value="Sanskri">Sanskrit</option>
                                            <option value="Balkan">Balkan</option>
                                            <option value="Baltic">Baltic</option>
                                            <option value="Nordic">Nordic</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Hebrew">Hebrew</option>
										</select>
									</div>
                                    <div class="col-md-6 form-group">
										<label for="marks-obtained">MARKS OBTAINED<small class="text-danger">*</small></label>
										<input type="text" name="marks_obtained" id="marks_obtained" class="form-control required" value="" placeholder="MARKS OBTAINED">
									</div>
    

                                    <div class="col-md-6 form-group">
                                        <label for="level">Select Multiple LEVEL<small class="text-danger">*</small></label>
                                        
                                             <select class="js-example-basic-multiple w-100" name="level[]" multiple="multiple" style="height:40px;">
                                            <option value="a1">A1</option>
                                            <option value="a2">A2 </option>
                                            <option value="b1">B1</option>
                                            <option value="b2">B2</option>
                                            <option value="b1.1">B1.1 </option>
                                            <option value="b1.2">B1.2 </option>
                                            <option value="b2.1">B2.1 </option>
                                            <option value="b2.2">B2.2 </option>
                                            <option value="c1">C1 </option>
                                            <option value="c2">C2 </option>
                                            <option value="n5">N5 </option>
                                            <option value="n4">N4 </option>
                                            <option value="n3">N3 </option>
                                            <option value="n2">N2 </option>
                                            <option value="n1">N1 </option>
                                            <option value="hsk">HSK </option>
                                           <option value="hsk1">HSK1 </option>
                                           <option value="hsk1">HSK2 </option>
                                           <option value="hsk3">HSK3 </option>
                                           <option value="hsk4">HSK4 </option>
                                           <option value="hskk">HSKK </option>
                                         </select>
                                    </div>


									<div class="col-12 text-center mt-2">
										<input type="submit" name="submit" value="SUBMIT" id="certificate-submit" class="btn btn-success btn-lg">
									</div>

								 
								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
        <!-- #content end -->
        
{{-- certificate --}}
<script>
    $(document).ready(function() {
        $(document).on("click", "#certificate-submit", function() {
            // e
            //  e.preventDefault();
            
            
            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
            //alert("ehllo");
            let name = $("#name").val();
            let email = $("#email").val();
            let mobile = $("#mobile").val();
            let city = $("#city").val();
            let country = $("#country").val();
            let trainer_name = $("#trainer_name").val();
            let select_batch = $("#select_batch").val();
            let select_batch_to = $("#select_batch_to").val();
            let course = $("#course").val();
            let marks_obtained = $("#marks_obtained").val();
            let level = $("#level").val();


            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);
            formData.append('city', city);
            formData.append('country', country);
            formData.append('trainer_name', trainer_name);
            formData.append('select_batch', select_batch);
            formData.append('select_batch_to', select_batch_to);
            formData.append('course', course);
            formData.append('marks_obtained', marks_obtained);
            formData.append('level', level);
            

            if (name == '' || email == '' || mobile == '' || mobile.length < 10 || mobile.length > 10  || city == '' || country == '' || trainer_name == ''  || select_batch == ''  || course == '' || marks_obtained == '' || level == '') {
                alert("Fill All The Form Inputs with 10 digit contact number");
            } else {
                let jqXHR = $.ajax({
                    url: "/certificate",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                    beforeSend: function( xhr ) {
                        $("#certificate-submit").hide();
                  }
                });

                jqXHR.done(function(data, textStatus, jqXHR) {
                    $("#certificate-submit").hide();
                    $("#show").show().fadeOut( 5000 );
                    $("#certificate-form").trigger("reset");
                   window.location = "https://langmainternational.com/thank-you-certi";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                  //alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                    $("#certificate-submit").hide();
                    $("#show").show().fadeOut( 5000 );
                    $("#certificate-form").trigger("reset");
                   window.location = "https://langmainternational.com/thank-you-certi";
                });
            }

        });

    });
    // save add form ends here.....

</script>
{{-- certificate ends--}}
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection
