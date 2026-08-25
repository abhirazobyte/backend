
<section id="slider" class="slider-element revslider-wrap h-auto include-header">

    <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="padding:0px;">
        <div class="video-background-holder">
            <div class="video-background-overlay"></div>
<!--langma-home-video.mp4-->
            <video autoplay loop playsinline muted class="w-100" src="https://langmainternational.com/normal_images/langma-new-video.mp4" ></video>
            <div class="video-background-content  embed-responsive-item">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100">
                        <div class="vertical-middle">
                            <div class="slider-title mb-5 dark clearfix">
                                <h1 id="changeText">WELCOME TO LANGMA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var text = ["Emerging Economy Needs Multilinguals", "Bridging the gap between Countries", " Bridging the gap between Culture"];
                var counter = 0;
                var elem = document.getElementById("changeText");
                var inst = setInterval(change, 2000);

                function change() {
                    elem.innerHTML = text[counter];
                    counter++;
                    if (counter >= text.length) {
                        counter = 0;
                        // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
                    }
                }
            </script>
        </div>
    </div>
</section>

<!-- Top Feature Start -->
