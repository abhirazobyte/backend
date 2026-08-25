<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/plugins.min.js') }}" defer ></script>

<!-- Footer Scripts
 ============================================= -->
<script src="{{ asset('frontend/js/functions.js') }}" defer ></script>
 <script>
    jQuery(window).on( 'load', function(){
        setTimeout( function(){
            $( '.flexslider .slide' ).resize();
        }, 500 );
    });
</script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{ asset('frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" defer ></script>

<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}" defer >
</script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}" defer >
</script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}" defer ></script>
<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}" defer ></script>
<!-- For Countdown -->
{{-- <script src="{{ asset('frontend/js/components/moment.js') }}"></script> --}}

<script>
    var tpj = jQuery;
    var revapi279;
    var $ = jQuery.noConflict();

    tpj(document).ready(function() {
        if (tpj("#rev_slider_279_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_279_1");
        } else {
            revapi279 = tpj("#rev_slider_279_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "{{ asset('frontend/include/rs-plugin/js/') }}",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "spinner2",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    /*ready*/
</script>
{{-- select country --}}
<script>
    $(document).ready(function() {
         
         $("select#country").change(function(){
             
            let country = $(this).children("option:selected").val();
            
            
                    if (country == "https://langmainternational.com/arabic-language-online-course" || country == "https://www.langmainternational.com/arabic-language-online-course") {
                        window.location.href = 'https://langmainternational.com/arabic-language-online-course';

                    }  else if (country == "https://langmainternational.com/armenia-language-program" || country == "https://www.langmainternational.com/armenia-language-program") {
                        window.location.href ='https://langmainternational.com/armenia-language-program';

                    } else if (country == "https://langmainternational.com/online-balkan-languages" || country == "https://www.langmainternational.com/online-balkan-languages") {
                        window.location.href = 'https://langmainternational.com/online-balkan-languages';
                        
                    } else if (country == "https://langmainternational.com/online-baltic-languages-course" || country == "https://www.langmainternational.com/online-baltic-languages-course") {
                        window.location.href = 'https://langmainternational.com/online-baltic-languages-course';
                        
                    } else if (country == "https://langmainternational.com/online-burmese-language-course" || country == "https://www.langmainternational.com/online-burmese-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-burmese-language-course';
                    } else if (country == "https://langmainternational.com/dari-pashto-language-online-course" || country == "https://www.langmainternational.com/dari-pashto-language-online-course") {
                        window.location.href =
                            'https://langmainternational.com/dari-pashto-language-online-course';
                    } else if (country == "https://langmainternational.com/dutch-language-course" || country == "https://www.langmainternational.com/dutch-language-course") {
                        window.location.href = 'https://langmainternational.com/dutch-language-course';
                        
                    } else if (country == "https://langmainternational.com/online-english-language-course" || country == "https://www.langmainternational.com/online-english-language-course") {
                        window.location.href = 'https://langmainternational.com/online-english-language-course';
                        
                    } else if (country == "https://langmainternational.com/online-french-language-course" || country == "https://www.langmainternational.com/online-french-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-french-language-course';
                    } else if (country == "https://langmainternational.com/online-german-language-course" || country == "https://www.langmainternational.com/online-german-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-german-language-course';

                    } else if (country == "https://langmainternational.com/hebrew-language-course" || country == "https://www.langmainternational.com/hebrew-language-course") {
                        window.location.href =
                            'https://langmainternational.com/hebrew-language-course';
                    } else if (country == "https://langmainternational.com/hindi-language-classes" || country == "https://www.langmainternational.com/hindi-language-classes") {
                        window.location.href =
                            'https://langmainternational.com/hindi-language-classes';

                    } else if (country == "https://langmainternational.com/best-institute-for-regional-languages" || country == "https://www.langmainternational.com/best-institute-for-regional-languages") {
                        window.location.href =
                            'https://langmainternational.com/best-institute-for-regional-languages';

                    } else if (country == "https://langmainternational.com/indonesian-language-course" ||country == "https://www.langmainternational.com/indonesian-language-course") {
                        window.location.href =
                            'https://langmainternational.com/indonesian-language-course';

                    } else if (country == "https://langmainternational.com/online-italian-language-course" || country == "https://www.langmainternational.com/online-italian-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-italian-language-course';

                    } else if (country == "https://langmainternational.com/online-japanese-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-japanese-language-course';

                    } else if (country == "https://langmainternational.com/online-korean-language-courses" || country == "https://www.langmainternational.com/online-korean-language-courses") {
                        window.location.href =
                            'https://langmainternational.com/online-korean-language-courses';

                    } else if (country == "https://langmainternational.com/online-chinese-language-course" || country == "https://www.langmainternational.com/online-chinese-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-chinese-language-course';

                    } else if (country == "https://langmainternational.com/online-mongolian-classes" || country == "https://www.langmainternational.com/online-mongolian-classes") {
                        window.location.href =
                            'https://langmainternational.com/online-mongolian-classes';

                    } else if (country == "https://langmainternational.com/online-mongolian-classes" || country == "https://www.langmainternational.com/online-mongolian-classes") {
                        window.location.href =
                            'https://langmainternational.com/online-mongolian-classes';

                    } else if (country == "https://langmainternational.com/best-nordic-languages-course" || country == "https://www.langmainternational.com/best-nordic-languages-course") {
                        window.location.href =
                            'https://langmainternational.com/best-nordic-languages-course';

                    } else if (country == "https://langmainternational.com/online-persian-language-course" || country == "https://www.langmainternational.com/online-persian-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-persian-language-course';

                    } else if (country == "https://langmainternational.com/polish-language-course" || country == "https://www.langmainternational.com/polish-language-course") {
                        window.location.href =
                            'https://langmainternational.com/polish-language-course';
                    } else if (country == "https://langmainternational.com/polish-language-course" || country == "https://www.langmainternational.com/polish-language-course") {
                        window.location.href =
                            'https://langmainternational.com/polish-language-course';

                    } else if (country == "https://langmainternational.com/online-portuguese-classes" || country == "https://www.langmainternational.com/online-portuguese-classes") {
                        window.location.href =
                            'https://langmainternational.com/online-portuguese-classes';

                    } else if (country == "https://langmainternational.com/online-russian-language-course" || country == "https://www.langmainternational.com/online-russian-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-russian-language-course';

                    } else if (country == "https://langmainternational.com/best-sanskrit-language-institute" || country == "https://www.langmainternational.com/best-sanskrit-language-institute") {
                        window.location.href =
                            'https://langmainternational.com/best-sanskrit-language-institute';

                    } else if (country == "https://langmainternational.com/sinhala-language-course" || country == "https://www.langmainternational.com/sinhala-language-course") {
                        window.location.href =
                            'https://langmainternational.com/sinhala-language-course';

                    } else if (country == "https://langmainternational.com/online-spanish-language-courses" || country == "https://www.langmainternational.com/online-spanish-language-courses") {
                        window.location.href =
                            'https://langmainternational.com/online-spanish-language-courses';

                    } else if (country == "https://langmainternational.com/swahili-language-courses" || country == "https://www.langmainternational.com/swahili-language-courses") {
                        window.location.href =
                            'https://langmainternational.com/swahili-language-courses';

                    } else if (country == "https://langmainternational.com/thai-language-courses" || country == "https://www.langmainternational.com/thai-language-courses") {
                        window.location.href =
                            'https://langmainternational.com/thai-language-courses';

                    } else if (country == "https://langmainternational.com/online-urdu-language-course" ||country == "https://www.langmainternational.com/online-urdu-language-course") {
                        window.location.href =
                            'https://langmainternational.com/online-urdu-language-course';

                    } else if (country == "https://langmainternational.com/vietnamese-language-courses" ||country == "https://www.langmainternational.com/vietnamese-language-courses") {
                        window.location.href =
                            'https://langmainternational.com/vietnamese-language-courses';

                    } 
            
            
        });

    });
    // save add form ends here.....

</script>


  <!--faq-->
<script>
    jQuery(document).ready(function($){
        var $faqItems = $('#faqs .faq');
        if( window.location.hash != '' ) {
            var getFaqFilterHash = window.location.hash;
            var hashFaqFilter = getFaqFilterHash.split('#');
            if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
                $('.grid-filter li').removeClass('activeFilter');
                $( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
                var hashFaqSelector = '.' + hashFaqFilter[1];
                $faqItems.css('display', 'none');
                if( hashFaqSelector != 'all' ) {
                    $( hashFaqSelector ).fadeIn(500);
                } else {
                    $faqItems.fadeIn(500);
                }
            }
        }

        $('.grid-filter a').on( 'click', function(){
            $('.grid-filter li').removeClass('activeFilter');
            $(this).parent('li').addClass('activeFilter');
            var faqSelector = $(this).attr('data-filter');
            $faqItems.css('display', 'none');
            if( faqSelector != 'all' ) {
                $( faqSelector ).fadeIn(500);
            } else {
                $faqItems.fadeIn(500);
            }
            return false;
       });
    });
</script>

{{-- home form --}}
<script src="{{ asset('frontend/js/components/rangeslider.min.js') }}" defer ></script>
    <script>
        jQuery(document).ready( function(){
            var totalAge = '',
                totalWeight = '',
                totalHeight = '',
                totalActivity = '',
                elementAge = $("#fitness-form-age"),
                elementWeight = $("#fitness-form-weight"),
                elementcountry = $("#language"),
                elementHeight = $("#fitness-form-height"),
                elementActivity = $("#fitness-form-activity"),
                elementCalories = $("#fitness-form-calories"),
                caloriesCount = $("#calories-count");

            elementAge.on( 'change', function(){
                totalAge = $(this).prop('value');
                calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
            });

            elementWeight.on( 'change', function(){
                totalWeight = $(this).prop('value');
                calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
            });

            elementHeight.on( 'change', function(){
                totalHeight = $(this).prop('value');
                calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
            });

            elementActivity.ionRangeSlider({
                min: 0,
                max: 7,
                from: 0,
                step: 1,
                postfix: " days/Week",
                onStart: function(data){
                    totalActivity = data.from;
                }
            });

            elementActivity.on( 'change', function(){
                totalActivity = $(this).prop('value');
                calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
            });

            calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );

            function calculateCalories( age, weight, height, activity ) {
                var caloriesValue = 66 + ( 13.75 * Number(weight) ) + ( 5 * Number(height) ) - ( 6.75 * Number(age) ) + ( 200 * Number(activity) );
                if( caloriesCount.is(':empty') ) {
                    caloriesCount.html( '0.0' );
                }
                jQuery("#calories-trigger").on( 'click', function(e){
                    caloriesCount.html( caloriesValue );
                    elementCalories.val( caloriesValue ).change();
                    e.preventDefault();
                });
            }
        });
    </script>

<!-- Select-Boxes Plugin -->
<script src="{{ asset('frontend/js/components/select-boxes.js') }}" defer ></script>
<script src="{{ asset('frontend/js/components/selectsplitter.js') }}" defer ></script>
    <script>
        jQuery(document).ready( function($){

            // Multiple Select
            $(".select-1").select2({
                placeholder: "Language You Want to Learn"
            });

            // Loading array data
            var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];
            $(".select-data-array").select2({
            data: data
            })
            $(".select-data-array-selected").select2({
            data: data
            });

            // Enabled/Disabled
            $(".select-disabled").select2();
            $(".select-enable").on("click", function () {
                $(".select-disabled").prop("disabled", false);
                $(".select-disabled-multi").prop("disabled", false);
            });
            $(".select-disable").on("click", function () {
                $(".select-disabled").prop("disabled", true);
                $(".select-disabled-multi").prop("disabled", true);
            });

            // Without Search
            $(".select-hide").select2({
                minimumResultsForSearch: Infinity
            });

            // select Tags
            $(".select-tags").select2({
                tags: true
            });

            // Select Splitter
            $('.selectsplitter').selectsplitter();

        });
    </script>

{{-- leads --}}
<script>
    $(document).ready(function() {
        // save add form starts... #homeleads-submit
        $(document).on("click", "#leads-submit", function(e) {

            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            //alert('success');
            let name = $("#name").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let languages = $("#languages").val();
            let message = $("#message").val();
            let currenturl = $("#currenturl").val();
            //let _token = $("input[name = _token]").val();

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('languages', languages);
            formData.append('message', message);
            formData.append('currenturl', currenturl);
            //formData.append('token', token);

            if (name == '' || email == '' || phone == '' || phone.length < 10 || phone.length > 10 || languages == '' || message == '' || currenturl == '') {
                // alert("Fill All The Form with 10 digit contact number");
                $("#error").show();
                $("#error").text("Fill All The Form Inputs with 10 digit contact number");
            } else {
                let jqXHR = $.ajax({
                    url: "/leads",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    //data: { somefield: country, _token: '' },
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                    beforeSend: function( xhr ) {
                        $("#error").hide();
                        $("#preload").show();
                        $("#leads-submit").hide();
                   }
                });

                jqXHR.done(function(data, textStatus, jqXHR) {
                    $("#show").show();//.fadeOut( 5000 )
                    $("#leads").trigger("reset");
                     $("#preload").hide();
                    window.location = "https://langmainternational.com/thank-you";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                    alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                });
            }

        });

    });
    // save add form ends here.....


</script>
{{--leads --}}

{{-- services-submit --}}
    <script>
        $(document).ready(function() {
            // save add form starts... #homeleads-submit
            $(document).on("click", "#services-submit", function(e) {
                let token = $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                let name = $("#name").val();
                let email = $("#email").val();
                let mobile = $("#mobile").val();
                let city = $("#city").val();
                let country = $("#country").val();
                let services = $("#services").val();
                let message = $("#message").val();
                //let currenturl = $("#currenturl").val();
                //let _token = $("input[name = _token]").val();

                let formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('mobile', mobile);
                formData.append('city', city);
                formData.append('country', country);
                formData.append('services', services);
                formData.append('message', message);
                //formData.append('currenturl', currenturl);
                //formData.append('token', token);

                if (name == '' || email == '' || mobile == '' || mobile.length < 10 || mobile.length > 10 || city == '' || country == ''||  services == '' || message == '' || mobile.length != 10) {
                    alert("Fill All The Form fields with 10 Digit contact number ");//
                } else {
                    let jqXHR = $.ajax({
                        url: "/contact-lead",
                        method: "POST",
                        enctype: 'multipart/form-data',
                        data: formData,
                        dataType: 'text',
                        contentType: false,
                        processData: false,
                        cache: false,
                        timeout: 800000,
                    });

                    jqXHR.done(function(data, textStatus, jqXHR) {
                        $("#show").show().fadeOut( 5000 );
                        $("#servises").trigger("reset");
                        window.location = "https://langmainternational.com/thank-you";
                    });
                    jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                        alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                    });
                }

            });

        });
        // save add form ends here.....


    </script>
{{-- services-submit ends here --}}



{{-- program-submit --}}
<script>
    $(document).ready(function() {
        // save add form starts... #courses-submit
        $(document).on("click", "#program-submit", function(e) {
            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            let name = $("#name").val();
            let email = $("#email").val();
            let mobile = $("#mobile").val();
            let company = $("#company").val();
            let language = $("#language").val();
           // let message = $("#message").val();
            let currenturl = $("#currenturl").val();
            //let _token = $("input[name = _token]").val();

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);
            formData.append('company', company);
            formData.append('language', language);
            //formData.append('message', message);
            formData.append('currenturl', currenturl);

            if (name == '' || email == '' || mobile == '' || mobile.length < 10 || mobile.length > 10 || language == '') {
                // || message == ''  || currenturl == ''
                alert("Fill All The Form with 10 digit contact number");
            } else {
                let jqXHR = $.ajax({
                    url: "/program-lead",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                });

                jqXHR.done(function(data, textStatus, jqXHR) {

                    $("#show").show().fadeOut( 5000 );
                    $("#program-form").trigger("reset");
                    window.location = "https://langmainternational.com/thank-you";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                    alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                });
            }
        });
    });
    // save add form ends here.....


</script>
{{-- program-submit ends here --}}

{{-- apply-submit --}}
<script>
    $(document).ready(function() {
        // save add form starts... #courses-submit
        $(document).on("click", "#apply-submit", function(e) {

            let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            //alert('success');
            let name = $("#name").val();
            let email = $("#email").val();
            let mobile = $("#mobile").val();
            let language = $("#language").val();
            let message = $("#message").val();
            let currenturl = $("#currenturl").val();

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);
            formData.append('language', language);
            formData.append('message', message);
            formData.append('currenturl', currenturl);
            //mobile.length > 10 || isNaN(mobile) ||

            if (name == '' || email == '' ||   mobile == '' || !Number(mobile) || mobile.length < 10 ||  language == '' || message == ''  || currenturl == ''   ) {
                //alert("Fill All The Form Inputs with 10 digit contact number");
                $("#error").show();
                $("#error").text("Fill All The Form Inputs with 10 digit contact number");
               
            } else {
                let jqXHR = $.ajax({
                    url: "/apply-submit",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 800000,
                    beforeSend: function( xhr ) {
                        $("#error").hide();
                        $("#preload").show();
                        $("#apply-submit").hide();
                   }
                });

                jqXHR.done(function(data, textStatus, jqXHR) {
                     
                    $("#show").show();// .fadeOut( 5000 )
                    $("#apply-form").trigger("reset");
                    window.location = "https://langmainternational.com/thank-you";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                    alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                });
            }
        });
    });
   // save add form ends here.....
</script>
{{-- apply-submit ends here --}}








{{-- apply-payment --}}
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $(document).on("click", "#rzp-button", function(e) {
    let token = $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

     e.preventDefault();

     let name = $('#name').val();
     let phone = $('#phone').val();
     let email = $('#email').val();
     let amount = $('#amount').val();
     let product_id =  $('#product_id').val();
     let description =  $('#description').val();

            // let formData = new FormData();
            // formData.append('name', name);
            // formData.append('email', email);
            // formData.append('phone', phone);
            // formData.append('description', description);
            // formData.append('amount', amount);
            // formData.append('product_id', product_id);

      if(amount!='' && phone!='' && email!='' && name!='' && description!=''){
        let options = {
          "key": "rzp_live_k1Q4kKwidvbaAl",
        //   "key": "rzp_test_yDPq1hOhTk89u8",
          "amount": (amount*100), // 2000 paise = INR 20
          "currency": "INR",
          "name": "Langma School of Languages",
          "description": description,
          "image": "https://langmainternational.com/normal_images/1589034655.png",

          "handler": function (response){

            let jqXHR =   $.ajax({
                url: "/payment",
                type: 'post',
                dataType: 'json',
                // contentType: false,
                //processData: false,
                 cache: false,
                timeout: 800000,
                // data: formData,
                data: { name: name, phone: phone, email:email, amount : amount, description:description, product_id : product_id, payment_id: response.razorpay_payment_id
                },
                statusCode: {
                    200: function() {
                            $("#show").show().fadeOut( 5000 );
                                $("#payment").trigger("reset");
                                $("#payment")[0].reset();
                                window.location = "https://langmainternational.com/thank-you";
                    }
                }
                });
                jqXHR.done(function(data, textStatus, jqXHR) {
                  //  alert(data);
                $("#show").show().fadeOut( 5000 );
                $("#payment").trigger("reset");
                window.location = "https://langmainternational.com/thank-you";
               // $("#show").show().fadeOut( 5000 );
                //     $("#payment").trigger("reset");
                    $("#payment")[0].reset();
                    window.location.href = "https://langmainternational.com/thank-you";
                });
                // jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                // alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                // });

                //   success: function (msg,data) {
                //      alert(data);
                //     $("#show").show().fadeOut( 5000 );
                //     $("#payment").trigger("reset");
                //     $("#payment")[0].reset();
                //     window.location.href = "https://langmainternational.com/thank-you";
            },
    "prefill": {
        "name": (name),
        "email": (email),
         "contact": (phone),
    },


            "theme": {
              "color": "#528FF0"
            }
          };

          var rzp1 = new Razorpay(options);
          rzp1.open();
          e.preventDefault();

    } else {
alert('Field could not be empty');
}




});
    </script>
{{-- apply-payment ends here --}}











{{-- career --}}
 <script>
//     $(document).ready(function() {
//         $(document).on("click", "#careerleads-submit", function(e) {

//             let token = $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 }
//             });
//             e.preventDefault();
//             let name = $("#name").val();
//             let email = $("#email").val();
//             let phone = $("#phone").val();
//             let languages = $("#languages").val();
//             let country = $("#country").val();
//             let message = $("#message").val();

//             let formData = new FormData();
//             formData.append('name', name);
//             formData.append('email', email);
//             formData.append('phone', phone);
//             formData.append('languages', languages);
//             formData.append('country', country);
//             formData.append('message', message);
//             //formData.append('currenturl', currenturl);
//             //formData.append('token', token);

//             if (name == '' || email == '' || phone == '' || phone.length < 10 || phone.length > 10 || languages == '' || country == '' || message == '') {
//                 alert("Fill All The Form with 10 digit contact number");
//             } else {
//                 let jqXHR = $.ajax({
//                     url: "/career-enquiry",
//                     method: "POST",
//                     enctype: 'multipart/form-data',
//                     data: formData,
//                     dataType: 'text',
//                     contentType: false,
//                     processData: false,
//                     cache: false,
//                     timeout: 800000,
//                 });

//                 jqXHR.done(function(data, textStatus, jqXHR) {
//                     $("#show").show().fadeOut( 5000 );
//                     $("#careerleads").trigger("reset");
//                     window.location = "https://langmainternational.com/thank-you";
//                 });

//                 jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
//                     alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
//                 });
//             }

//         });
//     });
    // save add form ends here.....


</script>
{{-- career  ends--}}

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
                   window.location = "https://langmainternational.com/thank-you";
                });

                jqXHR.fail(function(jqXHR, textStatus, errorThrown) {
                  //alert("fail" + " :" + jqXHR + " :" + textStatus + " :" + errorThrown);
                    $("#certificate-submit").hide();
                    $("#show").show().fadeOut( 5000 );
                    $("#certificate-form").trigger("reset");
                   window.location = "https://langmainternational.com/thank-you";
                });
            }

        });

    });
    // save add form ends here.....


</script>
{{-- certificate ends--}}

{{-- date picker --}}
<!--<script src="{{ asset('frontend/js/components/datepicker.js') }}" defer ></script>-->
<!--<script>-->
<!--    jQuery(document).ready( function(){-->

<!--        $('.input-daterange').datepicker({-->
<!--            autoclose: true,-->
<!--            startDate: "today",-->
<!--            todayHighlight: true-->
<!--        });-->

<!--        var pricingCAR = 0,-->
<!--            carValue = $( ".car-rent-price" ),-->
<!--            cars = $( 'input[name="select_batch"]' );-->

<!--        cars.change(function(){-->
<!--            pricingCAR = $(this).attr('data-price');-->
<!--            carValue.html( '$'+pricingCAR );-->
<!--        });-->

<!--        $('#car-rental').on( 'formSubmitSuccess', function(){-->
<!--            carValue.html( '$0' );-->
<!--        });-->

<!--    });-->
<!--</script>-->

 <!--Start of Tawk.to Script-->
    <script>
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5f0095ab223d045fcb7b4e85/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!--Google Tag Manager-->
       <script src="https://www.googletagmanager.com/gtag/js?id=UA-40542391-1"></script>
    <!--Google Tag Manager ends-->

<!--google conversion tracking-->
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-40542391-1');
    </script>
<!--google conversion tracking ends-->


<script>
  window.addEventListener('load', function() {

    if (window.location.pathname == ('thank-you') != -1) {
      gtag('event', 'conversion', {
        'send_to': 'AW-1001957978/vNXYCITy_YkDENrU4t0D'
      });
    }
  });
</script>

<!--google ads conversion tracking ends-->



 <!-- Facebook Pixel Code -->
<script>
   !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '750749878974211'); fbq('track', 'PageView');
  </script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=750749878974211&ev=PageView&noscript=1" alt="Facebook Pixel Code"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    
    <!--tranclet-->
     <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
        }, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        } else {
            event = document.createEventObject();
            event.eventType = eventName;
            element.fireEvent('on' + event.eventType, event);
        }
    }

    $(window).load(function() {
        $(".goog-logo-link").empty();
        $('.goog-te-gadget').html($('.goog-te-gadget').children());
    })
    </script>
    <!--trancelet ends-->
    <!--Structure-->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Langma School of Languages",
  "alternateName": "Official_Langma",
  "url": "https://langmainternational.com",
  "logo": "",
  "sameAs": [
    "https://www.facebook.com/officiallangma",
    "https://twitter.com/Official_Langma",
    "https://www.instagram.com/officiallangma/",
    "https://www.youtube.com/c/langmaschool/",
    "https://www.linkedin.com/school/langma-international/mycompany/verification",
    "https://in.pinterest.com/LangmaSchool",
    "https://langmainternational.com"
  ]
}
</script>
    
     <!--Structure ends-->
     
    
    <!--Disable view source starts-->
 <script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (https://www.arthurgareginyan.com)
    * For full source code, visit https://mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<!--Disable view source close-->


