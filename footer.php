<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
    .ft {
    grid-column: span 12/span 8;
    text-align: right;
}
@media screen and (max-width: 426px){
    .ft {
    grid-column: span 5/span 8 !important;
    text-align: right;
}
.cf81l {
    order: unset;
}

.b-footer__contact {
    padding-right: 30px;
    text-align: center!important;
    
}
.ce0ex {
    padding-bottom: 1rem!important;
}

.cf35v.c78gb{
    padding-top: 10px;
}
.cf35v {
    font-size: 0.8rem;
    line-height: 1.5715;
}

a.c-text-color--primary.c-text {
    font-size: 0.8rem;
}
.c7ccs.c8l6z.ce0ex.c2ctw.cu5h7 {
    display: block!important;
    justify-content: space-between;
}

}





@media screen and (max-width: 1024px){
    .cf81l {
    order: unset;
}
}
.c7ccs.c8l6z.ce0ex.c2ctw.cu5h7 {
    display: flex;
    justify-content: space-between;
}
.b-footer__contact {
    margin-top: 24px;
}
a.c-text-color--primary.c-text {
    padding-bottom: 30px;
}


</style>
<!-- Site footer -->
<footer>
    <div class="ct2ap cilao cu2zh c0rrv">

        <!-- Blocks -->
        <div class="c7ccs c8l6z ce0ex c2ctw cu5h7">
<!-- <div class="row"> -->
<!-- <div class="col-6"> -->
            <!-- 1st block -->
            <div class="cf81l cluwz c85nc cuf1v">
                <div class="chew8 c6upk c60yf cf1zc c9dvj cboec">
                    <div class="c1n5w c1qil">
                        <div class="c1n5w">
                            <!-- Logo -->
                            <a class="cxd0w" href="<?php echo home_url(); ?>" aria-label="AgileAI Labs">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/logo.png"
                                    width="200" alt="Stellar">
                            </a>
                        </div>

                        <a href="https://agileailabs.com/privacy-policy/" class="slink"
                            style="margin-left:16px;font-size:14px">Privacy Policy</a>
                        <!--<a href="#" class="slink" style="font-size:14px">Terms of Use</a>-->
                    </div>
                    <!-- Social links -->

                </div>
            </div>
            <!-- </div> -->

            <!-- 2nd block -->
            <!-- <div class="col-6"> -->
            <div class="ft">
                <div class="b-footer__contact">
                    <div>
                        <a class="c-text-color--primary c-text" href="mailto:hello@agileailabs.com"
                            title="Contact us">hello@agileailabs.com</a>
                    </div>
                    <div>



                        <!-- <a class="chew8 cjqs5 ch3z8 comen clhtr cdl9i cpypz cu60z"
                            href="https://www.linkedin.com/company/agileailabs/" aria-label="Twitter">

                            <svg height="32" viewBox="0 0 176 176" width="26" xmlns="http://www.w3.org/2000/svg">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="linkedin">
                                        <rect id="background" fill="#0077b5" height="176" rx="24" width="176" />
                                        <g id="icon" fill="#fff">
                                            <path d="m63.4 48a15 15 0 1 1 -15-15 15 15 0 0 1 15 15z" />
                                            <path
                                                d="m60 73v66.27a3.71 3.71 0 0 1 -3.71 3.73h-15.81a3.71 3.71 0 0 1 -3.72-3.72v-66.28a3.72 3.72 0 0 1 3.72-3.72h15.81a3.72 3.72 0 0 1 3.71 3.72z" />
                                            <path
                                                d="m142.64 107.5v32.08a3.41 3.41 0 0 1 -3.42 3.42h-17a3.41 3.41 0 0 1 -3.42-3.42v-31.09c0-4.64 1.36-20.32-12.13-20.32-10.45 0-12.58 10.73-13 15.55v35.86a3.42 3.42 0 0 1 -3.37 3.42h-16.42a3.41 3.41 0 0 1 -3.41-3.42v-66.87a3.41 3.41 0 0 1 3.41-3.42h16.42a3.42 3.42 0 0 1 3.42 3.42v5.78c3.88-5.82 9.63-10.31 21.9-10.31 27.18 0 27.02 25.38 27.02 39.32z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a> -->
                    </div>
                    <div class="cf35v c78gb">© AgileAI Labs.com <span class="c3kmo">-</span> All rights reserved.</div>
                </div>
            </div>
            <!-- </div> -->



        <!-- </div> -->
        </div>

    </div>
</footer>

</div>
<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <?php echo apply_shortcodes('[contact-form-7 id="e88feb7" title="Subscribe Now"]'); ?>
    </div>

</div>
<!-- The Modal -->
<div id="myModal1" class="modal1">

    <!-- Modal content -->
    <div class="modal-content1">
        <span class="close1">&times;</span>
        <?php echo apply_shortcodes('[contact-form-7 id="b50fcbb" title="Contact Us"]'); ?>
    </div>

</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // 
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn = document.getElementById("subscribeBtn");
       // Get the button that opens the modal
       var btn1 = document.getElementById("subscribeBtn1");
         // Get the button that opens the modal
         var btn2 = document.getElementById("subscribeBtn2");
                  // Get the button that opens the modal
                  var btn3 = document.getElementById("subscribeBtn3");
 // Get the button that opens the modal
                  var btn4 = document.getElementById("subscribeBtn4");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

        // Get the <span> element that closes the modal
        var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
        $('body').css("overflow", "hidden");
          $('.modal').fadeIn();
    }
    btn1.onclick = function () {
        modal.style.display = "block";
        $('body').css("overflow", "hidden");
          $('.modal').fadeIn();
    }
    btn2.onclick = function () {
        modal1.style.display = "block";
        $('body').css("overflow", "hidden");
          $('.modal1').fadeIn();
    }
    btn3.onclick = function () {
        modal.style.display = "block";
        $('body').css("overflow", "hidden");
          $('.modal').fadeIn();
    }
    btn4.onclick = function () {
        modal.style.display = "block";
        $('body').css("overflow", "hidden");
          $('.modal').fadeIn();
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        $('body').css("overflow", "auto");
          $('.modal').fadeOut();
    }
    span1.onclick = function () {
        modal1.style.display = "none";
        $('body').css("overflow", "auto");
          $('.modal1').fadeOut();
    }

    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function (event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //         $('body').css("overflow", "auto");
    //       $('.modal').fadeOut();
    //     }
    // }
    // window.onclick = function (event1) {
    //     if (event1.target == modal1) {
    //         modal1.style.display = "none";
    //         $('body').css("overflow", "auto");
    //       $('.modal1').fadeOut();
    //     }
    // }




    // For Video Pop Up
    // Function to open the popup and load the video
    function openPopup(videoSrc) {
        const popupContainer = document.querySelector(".popup-container");
        const popupVideo = document.querySelector("#popup-video");

        popupVideo.src = videoSrc;
        popupContainer.style.display = "block";
    }

    // Function to close the popup
    function closePopup() {
        const popupContainer = document.querySelector(".popup-container");
        const popupVideo = document.querySelector("#popup-video");

        popupVideo.src = "";
        popupContainer.style.display = "none";
    }

    $(document).ready(function () {
        $('#headerVideoLink').magnificPopup({
            type: 'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });
</script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/alpinejs.min.js" defer=""></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/aos.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/main.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/jquery.magnific-popup.min.js"></script>


</body>

</html>

<?php wp_footer(); ?>