    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js" async data-pagespeed-no-defer></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- carousel end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" data-pagespeed-no-defer></script>
    <script>
        $("#nameid").select2({
            placeholder: "Select Language You Want to Learn",
            allowClear: true
        });
    </script>

    <script>
        $("#nameido").select2({
            placeholder: "Select Language You Want to Learn",
            allowClear: true
        });
    </script>

    <script src="{{ asset('frontend/css/langma-components/lib/wow/wow.min.js') }}" ></script>
    <script src="{{ asset('frontend/css/langma-components/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/css/langma-components/lib/waypoints/waypoints.min.js') }}"></script>
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="{{ asset('frontend/css/langma-components/lib/counterup/counterup.min.js') }} "></script>
    <script src="{{ asset('frontend/css/langma-components/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/css/langma-components/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/css/langma-components/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.map"></script> -->
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/css/langma-components/js/main.js') }}"  async></script>
<!--<script>-->
<!--    var input = document.querySelector("#phone");-->
<!--    intlTelInput(input, {-->
<!--        initialCountry: "auto",-->
<!--        geoIpLookup: function(success, failure) {-->
<!--            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {-->
<!--                var countryCode = (resp && resp.country) ? resp.country : "us";-->
<!--                success(countryCode);-->
<!--            });-->
<!--        },-->
<!--    });-->
<!--</script>-->

<script>
    jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
</script>

{{-- select country --}}
<script>
    $(document).ready(function() {
         
     $('#nameid').change(function() {  
	window.location = $(this).val();  
}); 

    });
    // save add form ends here.....
</script>
 <!--tranclet-->
 
