<?php
/**
 * Template Name: HomePage Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php
get_header();
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    a{
        text-decoration: none;
        color: rgb(203 213 225/var(--tw-text-opacity));
    }
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background: rgb(15,23,42);
background: linear-gradient(90deg, rgba(15,23,42,1) 0%, rgba(58,60,139,1) 35%, rgba(83,52,136,1) 100%);
    margin: 6% auto;/* 15% from the top and centered */
    padding: 30px 40px;
    border: 1px solid #000;
    width: 33%;  /* Could be more or less, depending on screen size */
    border-radius: 10px;
    position: relative;
}
.modal-content1 {
    background: rgb(15,23,42);
background: linear-gradient(90deg, rgba(15,23,42,1) 0%, rgba(58,60,139,1) 35%, rgba(83,52,136,1) 100%);
    margin: 6% auto;/* 15% from the top and centered */
    padding: 30px 40px;
    border: 1px solid #000;
    width: 33%;  /* Could be more or less, depending on screen size */
    border-radius: 10px;
    position: relative;
}
.c-pointer{
    cursor: pointer;
}

/* The Close Button */
.close {
  color: #fff;
  float: right;
  font-size: 28px;
  position: absolute;
    right: 20px;
    top: 5px;
}

.close:hover,
.close:focus {
  color: #aaa;
  text-decoration: none;
  cursor: pointer;
}
.close1 {
  color: #fff;
  float: right;
  font-size: 28px;
  position: absolute;
    right: 20px;
    top: 5px;
}

.close1:hover,
.close1:focus {
  color: #aaa;
  text-decoration: none;
  cursor: pointer;
}
.c7zhe{font-size: 17px !important;}
.cd4l9{    width: 11rem;}
.c8iyv{transform: inherit !important;}
/* for banner button */

/*  */
.contact-form {
    width: 100%;
    color: black;
    margin: 6px 0;
    border-radius: 20px;
}
input#formSubmit {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    border-width: 1px;
    border-color: transparent;
    font-size: 0.875rem;
    line-height: 1.5715;
    font-weight: 500;
    width: auto;
    background: rgb(210,168,252);
    background: #2a1e36;
    padding: 6px 52px;
    color: #fff;
    font-size: 18px;
    margin: 0;
}
input#formSubmit:hover{
    background: #2a1e36ab;
    
}
input#formSubmit1 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    border-width: 1px;
    border-color: transparent;
    font-size: 0.875rem;
    line-height: 1.5715;
    font-weight: 500;
    width: auto;
    background: rgb(210,168,252);
    background: #2a1e36;
    padding: 6px 52px;
    color: #fff;
    font-size: 18px;
    margin: 0;
}
input#formSubmit1:hover{
    background: #2a1e36ab;
    
}
.form-content {
    margin: 6px 0px;
}
.form-content-submit-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 126px;
    margin-top: 24px;
}
.wpcf7-spinner {
    display: none;
}
label.formLabel span {
    font-size: 14px;
}
input,
input::placeholder {
    font-size: 14px;
    color: #6a6a6a;
}
@media (min-width: 768px)
{
.cu5h7 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.cni69 {
    height: 620px !important;
}
}

span.close {
    padding: 16px;
}

/* Pricing */


.specmain{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}
.spec {
    width: 60%;
    flex-grow: 0;
    padding: 10px 76px 30px;
    border-radius: 25px;
    background: linear-gradient(90deg, rgba(15,23,42,1) 0%, rgba(58,60,139,1) 35%, rgba(83,52,136,1) 100%);
}
i.fa-solid.fa-circle-check {
    color: #b570f8!important;
}
.bannersapration {
    height: 1px;
        margin: 30px 0px 20px 0px;
    display: block;
    background-image: linear-gradient(to right, rgba(53, 53, 53, 0) 0%, rgba(182, 182, 182, 0.6) 49%, rgba(53, 53, 53, 0) 100%);
}
.spec h1 {
  height: 52px;
  flex-grow: 0;
  font-size: 32px;
  font-weight: bold!important;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.6;
  letter-spacing: normal;
  text-align: center;
  color: rgb(203 213 225/var(--tw-text-opacity));
  margin-top: 10px;
}

.spec p {
  flex-grow: 0;
font-size: 16px;
    font-weight: 300!important;
    font-stretch: normal;
    font-style: normal;
    /* line-height: 1; */
    /* letter-spacing: 0.6px; */
    text-align: center;
    color: rgb(203 213 225/var(--tw-text-opacity));
    /* padding-top: 20px; */
    padding-bottom: 20px;
}
.spec h3 {
    flex-grow: 0;
        margin: 15px 0px 20px 15px;
    font-size: 17px;
    font-weight: 500!important;
    font-stretch: normal;
    font-style: normal;
    line-height: 0.8;
    letter-spacing: normal;
    text-align: left;
    color: #94a3b8;
}


.exclusive h3{
       text-align: center;
    font-size: 18px;
    color: #fff;
    margin: 0px 0px 13px 0px;
}

.exclusive span {
 font-size: 18px;
    font-weight: normal!important;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.35;
    letter-spacing: normal;
    text-align: left;
    color: #fff!important;
}


.exclusive h2 {
    font-weight: 800;
    color: #fff!important;
    padding-bottom: 10px;
    text-shadow: 4px 1px 5px #0000007a;
}

.Contact-us-for-early-adopter-pricing {
  height: 14px;
  flex-grow: 0;
  font-size: 16px;
  font-weight: 500!important;
  font-stretch: normal;
  font-style: normal;
  line-height: 1;
  letter-spacing: normal;
  text-align: center;
  color: rgb(203 213 225/var(--tw-text-opacity));
  border-bottom: 1px solid white;
}
div.centerend{
  text-align: center;
}
.exclusive button{
  width: 240px;
  border-radius: 25px;
  background-color: #a855f7;
  color: #fff;
  margin-bottom: 20px;


  font-size: 22px;
  font-weight: 500!important;
  font-stretch: normal;
  font-style: normal;
  letter-spacing: normal;
  text-align: center;
  border: none;
}

.exclusive{
  text-align: center;
}


@media (max-width: 767px) {
.spec {
  width: 384px;
  padding: 40px 26px 30px;
}
.spec h1 {
  margin: 0 0px 0px;
}
.spec p {
  margin: 20px -26px 60px;
  font-size: 16px;
}
.spec h3 {
  margin: 3px 8px 37px 0px;
  font-size: 16px;
  width: 350px;
}
.exclusive span {
    font-size: 18px;
}
.exclusive h1 {
  font-size: 40px;
  width: 366px;
}

}



/* About us */

/* .aboutush1 h1{
    font-size: 1.125rem;
} */
.imgabout{
    padding-top: 45px;
    padding-right: 35px;
}
.imgabout img {
    box-shadow: rgb(142 75 213 / 34%) 5px 5px, rgb(143 76 215 / 32%) 10px 10px, rgb(137 73 206 / 30%) 15px 15px, rgb(139 73 209 / 13%) 20px 20px, rgb(140 74 210 / 5%) 25px 25px;
}

/*  */


@media (min-width: 900px) and (max-width: 1024px){

.imgabout {
    padding-top: 128px;
    padding-right: 65px;
}
.modal-content {
            margin: 20% auto;
    width: 49%;  /* Could be more or less, depending on screen size */
}
}

@media (min-width: 768px) and (max-width: 900px){
    .spec {
  width: 600px;
}
.spec h1 {
  height: 50px;
  margin: 0 128px 20px;
}
.spec h3 {
  height: 16px;
  margin: 3px 11px 37px 15px;
  font-size: 16px;
}
.exclusive h1{
  margin: 0;
  padding-bottom: 80px;
}
    .modal-content {
            margin: 14% auto;
    width: 60%;  /* Could be more or less, depending on screen size */
}

.imgabout {
    padding-right: 35px;
    padding-left: 23px;
    padding-bottom: 31px;
}
}


.banner-schedule-btn {
        display: none;
}
@media (max-width: 768px){
    .banner-schedule-btn {
        padding-top: 30px;
        display: block;
}
.imgabout {
    padding-top: 7px;
    padding-right: 0px;
    padding-left: 0px;
    padding-bottom: 58px;
}
p.c80xi.c53t6.cbrqb {
    font-size: 16px;
    padding-left: 9px;
}

h1.cjkqd.c7jxr.chew2.cn8k2.cz3ez.c8yio.c2oxq.cqxyi {
    padding-left: 14px;
    padding-top: 22px;

}
a.cz7d1.cgmji.c7jxr.c4w32.cdgr0.c3d2w.c6mfv.clhtr.cdl9i.cpypz.cw05g.cwjtz {
    display: inline !important;
}
    }
    @media (max-width: 767px){
        .modal-content {
            margin: 14% auto;
    width: 70%;  /* Could be more or less, depending on screen size */
}
    }
    @media (max-width: 426px){
        
img, video {
    max-width: 70%;
    height: auto;
}
.chew8.c6upk.c60yf.c3f2a img{
    max-width: 100% !important;
}
.c43pr {
    padding-top: 6rem;
}

h1.ctu5h.c7jxr.chew2.cn8k2.cz3ez.c8yio.c2oxq.cqxyi.aos-init.aos-animate.h1lh {
    font-size: 32px!important;
}

p.c80xi.c53t6.c78gb.aos-init.aos-animate {
    font-size: 16px!important;
}

p.bp {
    font-size: 18px!important;
}
        .modal-content {
            margin: 24% auto;
    width: 90%;  /* Could be more or less, depending on screen size */
}
.imgabout {
    padding-top: 7px;
    padding-right: 0px;
    padding-left: 65px;
    padding-bottom: 58px;
}
        ol, ul {
    padding-left: 0rem;
}
.h1lh {
    line-height: 50px;
}
.ctu5h {
    font-size: 1.75rem;
    }
    .c53t6 {
    font-size: 1rem;
    line-height: 1.7;
    letter-spacing: -0.017em;
}
ul.chew8.crjun.cldwc.cjqs5.cfgkq {
    padding-top: 10px;
}
.b-footer__contact {
    padding-right: 30px;
}
.c43pr {
    padding-top: 6rem;
}
.bp {
font-size: 17px;
}
.spec p {
    margin: 20px -26px 30px;
}
a.cxd0w {
    width: 185px;
}
.spec {
    width: 357px;
    padding: 40px 26px 30px;
}
.spec h3 {
    margin: 3px 8px 37px 0px;
    font-size: 14px;
    width: 350px;
}
    }
    @media (max-width: 380px){
        a.cxd0w {
    width: 160px;
}
}

/* @media (min-width: 768px){
.cvaxf {
    grid-template-columns: repeat(5,minmax(0,1fr));
}
} */
.cjqs5ab {
    align-items: center;
    justify-content: center;
}
</style>

    <!-- Page wrapper -->
    <div class="chew8 ckycr c60yf clhrf">



        <!-- Page content -->
        <main class="crjun">

            <!-- Hero -->
            <section>
                <div class="cjne2 ct2ap cilao cu2zh c0rrv">

                    <!-- Particles animation -->
                    <div class="cg4uu cashl cav12" aria-hidden="true">
                        <canvas data-particle-animation="" width="2304" height="1164" style="width: 1152px; height: 582px;"></canvas>
                    </div>

                    <!-- Illustration -->
                    <div class="cvgqb cg4uu cashl cav12 c7y3f clhrf c1miq" aria-hidden="true">
                        <div class="cg4uu cmbp8 c2dhn cav12 cwfx1">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/glow-bottom.svg" class="c0tbu" width="2146" height="774" alt="Hero Illustration">
                        </div>
                    </div>

                    <div class="c2aba c43pr cs47s cz02k">

                        <!-- Hero content -->
                        <div class="ct2ap cb3bz cerne">
                            <div class="cm5tf aos-init aos-animate" data-aos="fade-down">
                                <!--<div class="cjne2 c78tq cw36e clx0i ccqhs c9mb9">
                                   
                                        <span class="cjne2 c78tq cjqs5">
                                           Agile AI Labs is now in beta <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq"></span>
                                        </span>
                                </div>-->
                            </div>
                            <h1 class="ctu5h c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi aos-init aos-animate h1lh" data-aos="fade-down">AI-Enhanced Agile Requirements Drive a Dramatic Reduction in Defects</h1>
                            <p class="c80xi c53t6 c78gb aos-init aos-animate" data-aos="fade-down" data-aos-delay="200">Spec2TestAI streamlines Agile requirements with real-time feedback, enhancing them using smart & invest frameworks and automating ambiguity removal, saving teams valuable time.</p>
                            <div class="ct2ap ctb7s clsmq czj10 cwpxi cnm6t cr8lb cpkim aos-init aos-animate" data-aos="fade-down" data-aos-delay="400">
                                <div>
                                    <a class="cz7d1 cgmji c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz" href="#your-benefits" >
                                        Explore the Benefits <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                    </a>
                                    <div class="banner-schedule-btn">
                                <a class="cz7d1 cjne2 cgmji c78gb clhtr cdl9i cpypz c0esz c6ow5 cw36e clx0i c8bk4 c1a95 cs1q0 cwjtz" id="subscribeBtn4" href="#banner-subscribeBtn">
                                    <span class="cjne2 c78tq cjqs5">
                                       Schedule a Demo <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                    </span>
                                </a>
                                </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Clients -->
            <section>
                <div class="cjne2 ct2ap cilao cu2zh c0rrv">

                    <!-- Particles animation -->
                    <div class="cg4uu cashl ct2ap cilao cu2zh c0rrv">
                        <div class="cg4uu cashl cav12" aria-hidden="true">
                            <canvas data-particle-animation="" data-particle-quantity="5" width="2304" height="330" style="width: 1152px; height: 165px;"></canvas>
                        </div>
                    </div>

                    <div class="cxs2s cy185">
                        <div class="clhrf">
                            <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
                            <!-- * Initialized in src/js/main.js -->
                            <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                            <div class="clients-carousel swiper-container cjne2 c6ow5 cw36e clx0i c1321 cx104 ci7jr c18yc chg6p cnopy cgk10 c6yee cvrc5 crwt1 c3yoo cp7au swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper cnglt cjqs5 chx1p" id="swiper-wrapper-54188174783a3a0e" aria-live="off" style="transition-duration: 5000ms; transform: translate3d(-2273px, 0px, 0px);"><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/np.svg" alt="Net Positive Labs" width="140" height="21">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/socx.svg" alt="SocialXperia" width="140" height="25">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="margin-right: 64px;">
                                        <img class="ci8l7" src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/arokee.svg" alt="Arokee" width="120" height="33">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/pasolite.png" alt="Pasolite" width="120" height="18">
                                    </div>
                                    <div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/sqa.png" alt="SQA" width="120" height="18">
                                    </div>
                                    <div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/qa.png" alt="QABunch" width="80" height="18">
                                    </div>
                                    <!-- Carousel items -->
                                    <div class="swiper-slide c9lwz swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/np.svg" alt="Net Positive Labs" width="140" height="21">
                                    </div>
                                    <div class="swiper-slide c9lwz swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/socx.svg" alt="SocialXperia" width="140" height="25">
                                    </div>
                                    <div class="swiper-slide c9lwz" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="margin-right: 64px;">
                                        <img class="ci8l7" src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/arokee.svg" alt="Arokee" width="120" height="33">
                                    </div>
                                    
                                    <div class="swiper-slide c9lwz" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/pasolite.svg" alt="Pasolite" width="120" height="18">
                                    </div>
                                     <div class="swiper-slide c9lwz" data-swiper-slide-index="3" role="group" aria-label="4 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/sqa.svg" alt="SQA" width="120" height="36">
                                    </div>
                                    <div class="swiper-slide c9lwz" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/qa.svg" alt="QABunch" width="80" height="18">
                                    </div>
                                    
                                <div class="swiper-slide c9lwz swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/np.svg" alt="Net Positive Labs" width="140" height="21">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/socx.svg" alt="SocialXperia" width="140" height="25">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="margin-right: 64px;">
                                        <img class="ci8l7" src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/arokee.svg" alt="Arokee" width="120" height="33">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/pasolite.svg" alt="Pasolite" width="120" height="18">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/sqa.svg" alt="SQA" width="120" height="36">
                                    </div><div class="swiper-slide c9lwz swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="margin-right: 64px;">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/qa.svg" alt="QABunch" width="80" height="18">
                                    </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section>
                <div class="cjne2 ct2ap cilao cu2zh c0rrv">

                    <!-- Illustration -->
                    <div class="cvgqb cg4uu cashl cav12 c7y3f clhrf cur0b" aria-hidden="true">
                        <div class="cg4uu c2dhn cqrzy cav12 cwfx1">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/glow-top.svg" class="c0tbu" width="1404" height="658" alt="Features Illustration">
                        </div>
                    </div>

                    <div class="cr01s cy0kk c6l07 cz02k">

                        <div x-data="{ tab: &#39;1&#39; }">

                            <!-- Section content -->
                            <div class="ct2ap chew8 ciq9j c60yf coisp cjvxo cpnnx cqp99 cf9td cvjfv c6ksj cclu7">

                                <!-- Content -->
                                <div class="cf81l cohew cyxw7 coezo c5dm1 aos-init aos-animate" data-aos="fade-down">
                                    <!-- Content #1 -->
                                    <div>
                                        <div class="c78tq c7jxr cxcp1 c4fya c8yio c1w3i c7zhe cqxyi">Delivering no-code generative AI SaaS tools</div>
                                    </div>
                                    <h3 class="cckei c7jxr chew2 cn8k2 cz3ez c8yio c1w3i cqxyi">A game changing agile development platform for project managers, scrum masters, and testers</h3>
                                    <p class="c80xi c53t6 cbrqb">Forget the iterative cycles to fine-tune your requirements. The Spec2TestAI deeply-trained AI engine processes and enhances requirements, equipping them with clearer context and heightened business relevance. This immediate augmentation bypasses prolonged refinement phases, enabling teams to jump into the developmental stages much quicker.</p>
                                </div>
                                <div class="co1w4 c5dm1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                    <div class="cjne2 ciifz czow1">

                                        <!-- Particles animation -->
                                        <div class="cg4uu cashl cav12">
                                            <canvas data-particle-animation="" data-particle-quantity="8" data-particle-staticity="30" width="1024" height="768" style="width: 512px; height: 384px;"></canvas>
                                        </div>

                                        <div class="chew8 cjqs5 ch3z8">
                                            <div class="cjne2 chew8 c4qq2 cvvl8 cjqs5 ch3z8">
                                                <!-- Halo effect -->
                                                <svg class="cvgqb cg4uu cashl c2dhn c4q1b cwfx1 cabct c8ik8 c538m cunh7" width="480" height="480" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient id="pulse-a" x1="50%" x2="50%" y1="100%" y2="0%">
                                                            <stop offset="0%" stop-color="#A855F7"></stop>
                                                            <stop offset="76.382%" stop-color="#FAF5FF"></stop>
                                                            <stop offset="100%" stop-color="#6366F1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g fill-rule="evenodd">
                                                        <path class="ctah1" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                                        <path class="ctah1 cswim" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                                        <path class="ctah1 cqixc" fill="url(#pulse-a)" fill-rule="evenodd" d="M240,0 C372.5484,0 480,107.4516 480,240 C480,372.5484 372.5484,480 240,480 C107.4516,480 0,372.5484 0,240 C0,107.4516 107.4516,0 240,0 Z M240,88.8 C156.4944,88.8 88.8,156.4944 88.8,240 C88.8,323.5056 156.4944,391.2 240,391.2 C323.5056,391.2 391.2,323.5056 391.2,240 C391.2,156.4944 323.5056,88.8 240,88.8 Z"></path>
                                                    </g>
                                                </svg>
                                                <!-- Grid -->
                                                <div class="cvgqb cg4uu cashl c2dhn c4q1b ctf42 cd4pg cwfx1 cabct c8ik8 clhrf cmbbk c0gla">
                                                    <div class="c2rud c73k7">
                                                        <div class="cg4uu cashl ck2lc cp4a0 c8mq8"></div>
                                                        <div class="cg4uu cashl c9nc1"></div>
                                                        <div class="cg4uu cashl ck2lc cp4a0 cs2ye"></div>
                                                        <div class="cg4uu cashl ch630"></div>
                                                    </div>
                                                </div>
                                                <!-- Icons -->
                                                <div x-show="tab === '1'" x-transition:enter="clhtr cl7fi csdbq c1i2p" x-transition:enter-start="cx0h4 cjl62" x-transition:enter-end="com23 cwqnp" x-transition:leave="clhtr cl7fi csdbq cg4uu" x-transition:leave-start="com23 cwqnp" x-transition:leave-end="cx0h4 cxht5">                                                
                                                <a class="popup-youtube" href="<?php echo esc_url(get_template_directory_uri()); ?>/agile/AgileAI-video.mp4">   
                                                <div class="cjne2 chew8 c4743 cd4l9 c8iyv cjqs5 ch3z8 cdt7o cpija c0758 cu0fj c0esz cw36e clx0i csrv7 c1a95">
                                                        <!-- <svg class="cjne2 c9p5t" xmlns="" width="23" height="25">
                                                            <path fill-rule="nonzero" d="M10.55 15.91H.442L14.153.826 12.856 9.91h10.107L9.253 24.991l1.297-9.082Zm.702-8.919L4.963 13.91h7.893l-.703 4.918 6.289-6.918H10.55l.702-4.918Z"></path>
                                                        </svg> -->
                                                        
                                                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/Video-icon.svg" alt="" width="30" height="30" class="video-logo">
                                                      <span style="    padding-left: 10px !important;font-weight:800;color:#fff;">Watch Video</span>
                                                        
                                                        </div></a>
                                                       
                                                </div>
                                                <div x-show="tab === '2'" x-transition:enter="clhtr cl7fi csdbq c1i2p" x-transition:enter-start="cx0h4 cjl62" x-transition:enter-end="com23 cwqnp" x-transition:leave="clhtr cl7fi csdbq cg4uu" x-transition:leave-start="com23 cwqnp" x-transition:leave-end="cx0h4 cxht5" style="display: none;">                                                
                                                    <div class="cjne2 chew8 c4743 cd4l9 c8iyv cjqs5 ch3z8 cdt7o cpija c0758 cu0fj c0esz cw36e clx0i csrv7 c1a95">
                                                        <svg class="cjne2 c9p5t" xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                                                            <path d="M18 14h-2V8h2c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4v2H8V4c0-2.2-1.8-4-4-4S0 1.8 0 4s1.8 4 4 4h2v6H4c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4v-2h6v2c0 2.2 1.8 4 4 4s4-1.8 4-4-1.8-4-4-4ZM16 4c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2h-2V4ZM2 4c0-1.1.9-2 2-2s2 .9 2 2v2H4c-1.1 0-2-.9-2-2Zm4 14c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2h2v2ZM8 8h6v6H8V8Zm10 12c-1.1 0-2-.9-2-2v-2h2c1.1 0 2 .9 2 2s-.9 2-2 2Z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div x-show="tab === '3'" x-transition:enter="clhtr cl7fi csdbq c1i2p" x-transition:enter-start="cx0h4 cjl62" x-transition:enter-end="com23 cwqnp" x-transition:leave="clhtr cl7fi csdbq cg4uu" x-transition:leave-start="com23 cwqnp" x-transition:leave-end="cx0h4 cxht5" style="display: none;">                                                
                                                    <div class="cjne2 chew8 c4743 cd4l9 c8iyv cjqs5 ch3z8 cdt7o cpija c0758 cu0fj c0esz cw36e clx0i csrv7 c1a95">
                                                        <svg class="cjne2 c9p5t" xmlns="http://www.w3.org/2000/svg" width="26" height="14">
                                                            <path fill-rule="nonzero" d="m10 5.414-8 8L.586 12 10 2.586l6 6 8-8L25.414 2 16 11.414z"></path>
                                                        </svg>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Features #2 -->
            <section class="cjne2">

                <!-- Particles animation -->
                <div class="cg4uu c2dhn cqrzy cav12 cgvoy cck3k caeyy cuewq cwfx1">
                    <div class="cg4uu cashl cav12" aria-hidden="true">
                        <canvas data-particle-animation="" data-particle-quantity="6" data-particle-staticity="30" width="640" height="640" style="width: 320px; height: 320px;"></canvas>
                    </div>
                </div>

                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="">

                        <!-- Highlighted boxes -->
                        <div class="cjne2 cr01s c6l07">
                            <!-- Blurred shape -->
                            <div class="cvgqb cg4uu cmbp8 c2dhn cjzyq cwfx1 cx4jr cb24t" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                                    <defs>
                                        <lineargradient id="bs2-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                            <stop offset="0%" stop-color="#6366F1"></stop>
                                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                        </lineargradient>
                                    </defs>
                                    <path fill="url(#bs2-a)" fill-rule="evenodd" d="m346 898 461 369-284 58z" transform="translate(-346 -898)"></path>
                                </svg>
                            </div>
                            <!-- Grid -->
                            <div class="c7ccs cvfcg cwjtz ccwci" data-highlighter="">
                                <!-- Box #1 -->
                                <!-- Box #2 -->
                                <div class="ccryi aos-init aos-animate" data-aos="fade-down">
                                    <div class="cjne2 c6upk clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cwrpd">
                                        <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq">
                                            <div class="chew8 c60yf">
                                                <!-- Radial gradient -->
                                                <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk c76ti cwfx1 cfm72" aria-hidden="true">
                                                    <div class="c2kwq cg4uu cashl cmbbk c4n1r ctsvc"></div>
                                                </div>
                                                <!-- Text -->
                                                <div class="cf81l cm1tw c3f2a csm8x cyxw7 cvwzm cq7sn">
                                                    <div>
                                                        <h3 class="c78tq c7jxr chew2 cn8k2 cz3ez c8yio cuynz czs2u c21tr cqxyi">One-Click Test Case Generation</h3>
                                                        <p class="cbrqb">Creating test cases can be a laborious process. However, with a single click, Spec2TestAI translates enhanced requirements into prioritized test cases. This instant generation means testing can commence sooner, and any potential defects are identified and addressed rapidly.</p>
                                                    </div>
                                                </div>
                                                <!-- Image -->
                                                <div class="cjne2 cctk3 cgmji clhrf cbm2a cn7y3">
                                                    <img class="cg4uu cmbp8 c2dhn ct2ap c0tbu cwfx1 cpinl c1mzm c90jf ck07g" src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/13.svg" width="680" height="300" alt="Feature 02">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box #3 -->
                                <div class="c4ajb aos-init aos-animate" data-aos="fade-down">
                                    <div class="cjne2 c6upk clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cwrpd">
                                        <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq">
                                            <div class="chew8 c60yf">
                                                <!-- Radial gradient -->
                                                <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk c76ti cwfx1 cfm72" aria-hidden="true">
                                                    <div class="c2kwq cg4uu cashl cmbbk c4n1r ctsvc"></div>
                                                </div>
                                                <!-- Text -->
                                                <div class="cf81l cm1tw c3f2a csm8x cyxw7 cvwzm cq7sn">
                                                    <div>
                                                        <h3 class="c78tq c7jxr chew2 cn8k2 cz3ez c8yio cuynz czs2u c21tr cqxyi">AI-Generated Security Requirements</h3>
                                                        <p class="cbrqb">Security, often a complicated and lengthy process, is now automated. Automated generation of security requirements ensures that teams don't spend additional cycles struggling to define relevant security criteria, as they are now prepared for you automatically alongside your AI-enhanced functional requirements.</p>
                                                    </div>
                                                 
                                                </div>
                                                <!-- Image -->
                                                <div class="cjne2 cctk3 cgmji clhrf cbm2a cn7y3">
                                                    <img class="cg4uu cmbp8 c2dhn ct2ap c0tbu cwfx1 cpinl c1mzm c90jf ck07g" src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/Group-63.png" width="300" height="300" alt="Feature 03">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Features list -->


                    </div>
                </div>
            </section>
               <!-- Features #3 -->
            <section class="cjne2">

                <!-- Blurred shape -->
                <div class="cvgqb cg4uu c2dhn cqrzy cav12 cwfx1 cg6k4 cx4jr cb24t" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                        <defs>
                            <lineargradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                <stop offset="0%" stop-color="#6366F1"></stop>
                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                            </lineargradient>
                        </defs>
                        <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)"></path>
                    </svg>
                </div>

                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="cv2cx c6v3h cr01s cy0kk c6l07 cx1od">
            

                        <div class="ct2ap cb3bz">
                            <div data-aos="fade-down" class="aos-init aos-animate">
                                <div class="cwjtz" data-highlighter="">
                                    <div class="cjne2 clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cwrpd">
                                        <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq">
                                            <!-- Radial gradient -->
                                            <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk c76ti cwfx1 cfm72" aria-hidden="true">
                                                <div class="c2kwq cg4uu cashl cmbbk c7tn2 c7b13"></div>
                                            </div>
                                            <p class="bp">AgileAI Labs Spec2TestAI™ SaaS platform addresses critical Agile stakeholder pain points x96 faster at a lower TCO with smarter generative AI. We enable SDLC value chain teams to mitigate risks, increase speed-to-market, and free up resources to focus on what matters the most. </p>
                                            <div style="margin-bottom:40px;text-align:center;">
                                <a class="cz7d1 c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz" id="subscribeBtn1" href="#specai">
                                    Schedule a Demo <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                </a>
                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>

                        <!-- Features #4 -->
            <section id="specai" class="cjne2">
                <div class="cjne2 ct2ap cilao cu2zh c0rrv">

                    <!-- Blurred shape -->
                    <div class="cvgqb cg4uu c1ish cqrzy cav12 c8dqa cck3k ctnnt cb24t" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                            <defs>
                                <lineargradient id="bs4-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                    <stop offset="0%" stop-color="#A855F7"></stop>
                                    <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                </lineargradient>
                            </defs>
                            <path fill="url(#bs4-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
                        </svg>
                    </div>

                    <div class="cr01s cy0kk c6l07 cx5od">
            
                        <!-- Section header -->
                        <div class="cb3bz cr01s c6l07" id="your-benefits">
                            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Spec2TestAI</h2>
                            <p class="c53t6 cbrqb">Spec2TestAI encapsulates a transformative approach to one of the most fundamental aspects of software development, enabled by the power of advanced artificial intelligence.</p>
                        </div>

                        <!-- Rows -->
                        <div class="cqzgu cn60j">
                            <!-- Row -->
                            <div class="ce0ex cnrav cnfgy">
                                <div>
                                    <div class="c78tq c7jxr cxcp1 c4fya c8yio cz7oz c7zhe cqxyi">Business Benefits</div>
                                </div>
                                <div class="charx c7ccs c8l6z c5yyc cu4y8">
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M13 16c-.153 0-.306-.035-.447-.105l-3.851-1.926c-.231.02-.465.031-.702.031-4.411 0-8-3.14-8-7s3.589-7 8-7 8 3.14 8 7c0 1.723-.707 3.351-2 4.63V15a1.003 1.003 0 0 1-1 1Zm-4.108-4.054c.155 0 .308.036.447.105L12 13.382v-2.187c0-.288.125-.562.341-.752C13.411 9.506 14 8.284 14 7c0-2.757-2.691-5-6-5S2 4.243 2 7s2.691 5 6 5c.266 0 .526-.02.783-.048a1.01 1.01 0 0 1 .109-.006Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Cost Savings</h4>
                                        </div>
                                        <p class="cf35v cbrqb">The application can analyze a large set of complex requirements in just 60 seconds, a task that would normally take an agile team an hour. This leads to substantial cost savings.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M15 9a3.841 3.841 0 0 0-2.661 1.545A2.524 2.524 0 0 0 10 9a1 1 0 1 0 0 2c.361 0 .57.279.89 1.284C10.243 13.08 9.441 14 9 14a1 1 0 0 0 0 2 3.841 3.841 0 0 0 2.661-1.545A2.524 2.524 0 0 0 14 16a1 1 0 0 0 0-2c-.361 0-.571-.279-.89-1.284C13.757 11.92 14.559 11 15 11a1 1 0 0 0 0-2Z"></path><path d="M10 8a1 1 0 0 0 0-2H7.825c.432-2.421.983-4 2.175-4a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0-3-3C7.193 0 6.313 2.9 5.793 6H3a1 1 0 1 0 0 2h2.49c-.506 3.52-1 6-2.49 6a1 1 0 0 1-1-1 1 1 0 0 0-2 0 3 3 0 0 0 3 3c3.367 0 3.964-4.175 4.49-7.858L7.51 8H10Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Improved Quality</h4>
                                        </div>
                                        <p class="cf35v cbrqb">By generating and analyzing requirements based on best practices, you're ensuring higher product quality which can lead to increased customer satisfaction and reduced post-release maintenance costs.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7ZM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5ZM15.707 14.293 13.314 11.9a8.019 8.019 0 0 1-1.414 1.414l2.393 2.393a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Enhanced Productivity</h4>
                                        </div>
                                        <p class="cf35v cbrqb">Automatic generation of BDD assets, test cases, and an automated testing framework allows the team to focus on core product development instead of manual test creation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="ce0ex">
                                <div>
                                    <div class="c78tq c7jxr cxcp1 c4fya c8yio cz7oz c7zhe cqxyi">User Benefits</div>
                                </div>
                                <div class="charx c7ccs c8l6z c5yyc cu4y8">
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M2 6H0V2a2 2 0 0 1 2-2h4v2H2v4ZM16 6h-2V2h-4V0h4a2 2 0 0 1 2 2v4ZM14 16h-4v-2h4v-4h2v4a2 2 0 0 1-2 2ZM6 16H2a2 2 0 0 1-2-2v-4h2v4h4v2Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Efficient Requirements Elicitation</h4>
                                        </div>
                                        <p class="cf35v cbrqb">The application's deep AI analysis of requirements helps product owners and stakeholders refine requirements at the start of the sprint, saving time and preventing scope changes mid-sprint.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Streamlined Daily Scrums</h4>
                                        </div>
                                        <p class="cf35v cbrqb">With AI-generated insights and commentaries, daily stand-ups can be more data-driven and focused.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1ZM3 2h10v8H9v4H3V2Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Informed Sprint Retrospectives</h4>
                                        </div>
                                        <p class="cf35v cbrqb">Traceability and coverage analysis provides teams with concrete data to analyze in retrospectives, fostering continuous improvement.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="ce0ex">
                                <div>
                                    <div class="c78tq c7jxr cxcp1 c4fya c8yio cz7oz c7zhe cqxyi">Technology Benefits</div>
                                </div>
                                <div class="charx c7ccs c8l6z c5yyc cu4y8">
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M15.5 11H13a5.022 5.022 0 0 1-3.453-1.4l-1.2 1.607A7.065 7.065 0 0 0 12 12.92v1.586a.5.5 0 0 0 .853.349l3-3A.5.5 0 0 0 15.5 11ZM1 5a5.022 5.022 0 0 1 3.453 1.4l1.205-1.61A7.028 7.028 0 0 0 1 3a1 1 0 1 0 0 2ZM13 5h2.5a.5.5 0 0 0 .354-.853l-3-3A.5.5 0 0 0 12 1.5v1.58a7.032 7.032 0 0 0-4.6 2.72L5 9a5.025 5.025 0 0 1-4 2 1 1 0 0 0 0 2 7.034 7.034 0 0 0 5.6-2.8L9 7a5.025 5.025 0 0 1 4-2Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Multi-language Support</h4>
                                        </div>
                                        <p class="cf35v cbrqb">Teams have the flexibility to choose from Python, Java, JavaScript, and Ruby for their BDD assets and testing frameworks.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M14 14H2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2ZM7.293 11.707a1 1 0 0 0 1.414 0l5-5a1 1 0 1 0-1.414-1.414L9 8.586V1a1 1 0 1 0-2 0v7.586L3.707 5.293a1 1 0 0 0-1.414 1.414l5 5Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Innovation AI</h4>
                                        </div>
                                        <p class="cf35v cbrqb">The deep-trained AI understands well-formed requirements, providing teams with enhanced, context-rich requirements.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M14.6.085 8 2.885 1.4.085c-.5-.2-1.4-.1-1.4.9v11c0 .4.2.8.6.9l7 3c.3.1.5.1.8 0l7-3c.4-.2.6-.5.6-.9v-11c0-1-.9-1.1-1.4-.9ZM2 2.485l5 2.1v8.8l-5-2.1v-8.8Zm12 8.8-5 2.1v-8.7l5-2.1v8.7Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Robust Test Generation</h4>
                                        </div>
                                        <p class="cf35v cbrqb">Utilizing mathematical models and decision tables ensures comprehensive and effective test cases, reducing the chances of defects slipping through.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Row -->
                            <div class="ce0ex">
                                <div>
                                    <div class="c78tq c7jxr cxcp1 c4fya c8yio cz7oz c7zhe cqxyi">Other Benefits</div>
                                </div>
                                <div class="charx c7ccs c8l6z c5yyc cu4y8">
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M15.5 11H13a5.022 5.022 0 0 1-3.453-1.4l-1.2 1.607A7.065 7.065 0 0 0 12 12.92v1.586a.5.5 0 0 0 .853.349l3-3A.5.5 0 0 0 15.5 11ZM1 5a5.022 5.022 0 0 1 3.453 1.4l1.205-1.61A7.028 7.028 0 0 0 1 3a1 1 0 1 0 0 2ZM13 5h2.5a.5.5 0 0 0 .354-.853l-3-3A.5.5 0 0 0 12 1.5v1.58a7.032 7.032 0 0 0-4.6 2.72L5 9a5.025 5.025 0 0 1-4 2 1 1 0 0 0 0 2 7.034 7.034 0 0 0 5.6-2.8L9 7a5.025 5.025 0 0 1 4-2Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Learning and Improvement:</h4>
                                        </div>
                                        <p class="cf35v cbrqb">AI commentary not only points out the deficiencies but also educates the users on why certain requirements are of high quality, helping teams learn and improve over time.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M14 14H2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2ZM7.293 11.707a1 1 0 0 0 1.414 0l5-5a1 1 0 1 0-1.414-1.414L9 8.586V1a1 1 0 1 0-2 0v7.586L3.707 5.293a1 1 0 0 0-1.414 1.414l5 5Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Defect Prevention</h4>
                                        </div>
                                        <p class="cf35v cbrqb">By identifying ambiguities and enhancing requirements, the application helps in preventing defects at the source.</p>
                                    </div>
                                    <!-- Feature -->
                                    <div>
                                        <div class="czxdk chew8 cjqs5 ckdvs">
                                            <svg class="cm1tw cb3zk" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                                <path d="M14.6.085 8 2.885 1.4.085c-.5-.2-1.4-.1-1.4.9v11c0 .4.2.8.6.9l7 3c.3.1.5.1.8 0l7-3c.4-.2.6-.5.6-.9v-11c0-1-.9-1.1-1.4-.9ZM2 2.485l5 2.1v8.8l-5-2.1v-8.8Zm12 8.8-5 2.1v-8.7l5-2.1v8.7Z"></path>
                                            </svg>
                                            <h4 class="c7zhe csn3x">Consistency and Standardization</h4>
                                        </div>
                                        <p class="cf35v cbrqb">The application provides a standardized way of creating, analyzing, and testing requirements, ensuring consistent quality across all agile projects.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>

            <!-- About us -->


            <section class="cjne2" id="abt">

<!-- Blurred shape -->
<div class="cvgqb cg4uu c2dhn cqrzy cav12 cwfx1 cg6k4 cx4jr cb24t" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
        <defs>
            <linearGradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                <stop offset="0%" stop-color="#6366F1"></stop>
                <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
            </linearGradient>
        </defs>
        <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)"></path>
    </svg>
</div>

<div class="ct2ap cilao cu2zh c0rrv">
    <div class="cv2cx c6v3h cr01s ">

        <!-- Section header -->
        <div class="ct2ap cb3bz cr01s cerne c6l07">
            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">About Us</h2>
            <p class="c53t6 cbrqb">AgileAI Labs was founded by a team of experienced software quality leaders and AI experts who saw the need for a more efficient and effective way to develop software in an Agile environment.</p>
        </div>

        <div class="ct2ap cb3bz">
            <div data-aos="fade-down" class="aos-init aos-animate">
                <div class="cwjtz" data-highlighter="">
                    <div class="cjne2 clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cwrpd" style="--mouse-x: 760px; --mouse-y: 75.46875px;">
                        <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq">
                            <!-- Radial gradient -->
                            <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk c76ti cwfx1 cfm72" aria-hidden="true">
                                <div class="c2kwq cg4uu cashl cmbbk c7tn2 c7b13"></div>
                            </div>
                         <div class="row">

                         <div class="col-12 col-lg-6"><div class="aboutush1 cq7sn cq7sn">
                            <h1 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Mission statement</h1>
                            <p class="c80xi c53t6 cbrqb">At AgileAI Labs, our mission is to revolutionize the software development process through the use of advanced AI technology. We strive to optimize the Agile process by enhancing requirements and generating effective test cases. Our goal is to help our clients achieve faster, more efficient development cycles and ultimately deliver high-quality software products.</p></div></div>
                         <div class="col-12 col-lg-6"><div class="imgabout"><img src="https://agileailabs.com/wp-content/uploads/2023/06/israel-andrade-YI_9SivVt_s-unsplash-scaled_yx5zKN1l-2048x1366.webp" alt=""></div></div>

                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>


            <!--  -->







            <section class="cjne2" >

                <!-- Blurred shape -->
                <div class="cvgqb cg4uu c2dhn cqrzy cav12 cwfx1 cg6k4 cx4jr cb24t" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                        <defs>
                            <linearGradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                <stop offset="0%" stop-color="#6366F1"></stop>
                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)"></path>
                    </svg>
                </div>

                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="cv2cx c6v3h cr01s cy0kk c6l07">
            
                        <!-- Section header -->
                        <div class="ct2ap cb3bz cr01s cerne">
                            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Pricing</h2>
                            <!--<p class="c53t6 cbrqb">There are many variations available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>-->
                        </div>
            
                        <div class="ct2ap cb3bz">
                            <div data-aos="fade-down" class="aos-init aos-animate">
                                <div class="cwjtz" data-highlighter="">
                                    <!-- <div class="cjne2 clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cwrpd" style="--mouse-x: 760px; --mouse-y: 75.46875px;"> -->
                                        <!-- <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq"> -->
                                            <!-- Radial gradient -->
                                            <!-- <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk c76ti cwfx1 cfm72" aria-hidden="true">
                                                <div class="c2kwq cg4uu cashl cmbbk c7tn2 c7b13"></div>
                                            </div> -->
                                            <div class="col-12">
      <div class="specmain" id="prc">
      <div class="spec">
        <h1>Spec2TestAI</h1>
        <p>AI requirements analysis/generation & automatic test case generation platform</p>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;AI Requirements Analysis</h3>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;Ambiguity Identification and Correction</h3>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;AI Test Case Generation</h3>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;BDD Files</h3>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;Security Requirements Generation</h3>
        <h3><i class="fa-solid fa-circle-check" style="color: #00aaff;"></i>&nbsp;&nbsp;&nbsp;Security Tests Automatically Generated</h3>
        <div class="bannersapration"></div>
        <div class="exclusive">
          <h3>At an exclusive Price</h3>
          <h2><span><s>$599</s> </span>$499 <span>/Monthly</span></h2>
          <button type="button" class="btn btn-light">Buy Now ></button>
         
        </div>
        <div class="centerend">
        <a href="#subscribeBtn3" id="subscribeBtn3"><span class="Contact-us-for-early-adopter-pricing">
          Contact us for early adopter pricing
        </span></a>
      </div>
      

      </div>
      
    </div>
    </div>
                                        <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>



            <!--  -->


            <section class="cjne2">
                <!-- Radial gradient -->
                <div class="cvgqb cg4uu cashl cav12 clhrf" aria-hidden="true">
                    <div class="cg4uu c2dhn cqrzy chew8 cpvxk clczn cwfx1 cabct cjqs5 cjqs5ab ch3z8">
                        <div class="c2kwq cg4uu cashl cmbbk c7tn2 cx4jr c7b13"></div>
                    </div>
                </div>
                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="cxs2s cmwrj">
                        <!-- Content -->
                        <div class="ct2ap cb3bz cr01s cerne c6l07">
                            <div>
                                <div class="c78tq c7jxr cxcp1 c4fya c8yio c1w3i c7zhe cqxyi">Pricing plans</div>
                            </div>
                            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Flexible plans and features</h2>
                            <p class="c53t6 cbrqb">All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                        </div>
                        <!-- Pricing tabs -->
                        <div class="cjne2">
                            <!-- Blurred shape -->
                            <div class="cvgqb cg4uu cmbp8 c4utp cjzyq cwfx1 ctnnt cb24t cedz1" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                                    <defs>
                                        <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                            <stop offset="0%" stop-color="#A855F7"></stop>
                                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#bs5-a)" fill-rule="evenodd" d="m661 736 461 369-284 58z" transform="matrix(1 0 0 -1 -661 1163)"></path>
                                </svg>
                            </div>
                            <!-- Content -->
                            <div class="c7ccs cf35v cvaxf cg46j cpse6 cuil8 cxda5 cv562 c72w9 c23yk cszs3 ctfzd c181h csj0b c8lh7 cq9q7 cte1g csayg c8lg5 c8s1y c0cco cojam c2pz1 cq01d crmxt c0kum cxpo2 c013a cbd8p c3ywc" x-data="{ annual: true }">
                                <!-- Pricing toggle -->
                                <!-- <div class="chew8 c60yf cfgkq chkj1"> -->
                                    <!-- <div class="c6v3h c0g5m c3azt"> -->
                                        <!-- Toggle switch -->
                                        <!-- <div class="cohew">
                                            <div class="c78tq cjqs5 cjqs5ab c5d8b">
                                                <div class="cnbp1 cf35v c7zhe c3kmo cnedv">Monthly</div>
                                                <div class="cjne2">
                                                    <input type="checkbox" id="toggle" class="cgt9x cqcn8" x-model="annual">
                                                    <label for="toggle" class="cjne2 chew8 c31ol c4sr9 cj6k7 cjqs5 cjqs5ab cmbbk co6ic cfta0 cayac cw83r cfydy c5c2d c8bk4 c5fcj co715 cig9p cso7r cyi0b cs5o9 cjvi3 c5fcv cktw0 czepc">
                                                        <span class="cgt9x">Pay Yearly</span>
                                                    </label>
                                                </div>
                                                <div class="c7how cf35v c7zhe c3kmo">Yearly <span class="c2ycg">(-20%)</span></div>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!-- Pro price -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c1n5w crjun cv2cx c6v3h c2oxq">
                                        <div class="c7jxr cxcp1 c4fya c8yio cijka cnz8d c7zhe cqxyi"></div>
                                        <!-- <div class="czxdk">
                                            <span class="c53t6 c7zhe c3kmo">$</span><span class="ck29s c21tr csn3x" x-text="annual ? '24' : '29'">24</span><span class="cf35v c7zhe c39n2">/mo</span>
                                        </div> -->
                                        <!-- <div class="c3kmo">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cv2cx c6v3h c2oxq">
                                        <a class="c8bta cgmji c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz" href="#0">
                                            Get Started <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                        </a>
                                    </div> -->
                                </div>
                                </div>
                                <!-- Team price -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c1n5w crjun cv2cx c6v3h c2oxq">
                                        <div class="c7jxr cxcp1 c4fya c8yio cijka cnz8d c7zhe cqxyi">AgileAI Labs</div>
                                        <!-- <div class="czxdk">
                                            <span class="c53t6 c7zhe c3kmo">$</span><span class="ck29s c21tr csn3x" x-text="annual ? '49' : '54'">49</span><span class="cf35v c7zhe c39n2">/mo</span>
                                        </div> -->
                                        <!-- <div class="c3kmo">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cv2cx c6v3h c2oxq">
                                        <a class="c8bta cgmji c7tn2 co8ex clhtr cdl9i cpypz c9lm5 cwjtz" href="#0">
                                            Get Started <span class="c5psi cwkvg clv48 c26ks cdl9i cpypz c01sq">-&gt;</span>
                                        </a>
                                    </div> -->
                                </div>
                                </div>
                                <!-- Enterprise price -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c1n5w crjun cv2cx c6v3h c2oxq">
                                        <div class="c7jxr cxcp1 c4fya c8yio cijka cnz8d c7zhe cqxyi">Competitor #1</div>
                                        <!-- <div class="czxdk">
                                            <span class="c53t6 c7zhe c3kmo">$</span><span class="ck29s c21tr csn3x" x-text="annual ? '79' : '85'">79</span><span class="cf35v c7zhe c39n2">/mo</span>
                                        </div> -->
                                        <!-- <div class="c3kmo">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cv2cx c6v3h c2oxq">
                                        <a class="c8bta cgmji c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz" href="#0">
                                            Get Started <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                        </a>
                                    </div> -->
                                </div>
                                </div>

                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c1n5w crjun cv2cx c6v3h c2oxq">
                                        <div class="c7jxr cxcp1 c4fya c8yio cijka cnz8d c7zhe cqxyi">Competitor #2</div>
                                        <!-- <div class="czxdk">
                                            <span class="c53t6 c7zhe c3kmo">$</span><span class="ck29s c21tr csn3x" x-text="annual ? '79' : '85'">79</span><span class="cf35v c7zhe c39n2">/mo</span>
                                        </div> -->
                                        <!-- <div class="c3kmo">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cv2cx c6v3h c2oxq">
                                        <a class="c8bta cgmji c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz" href="#0">
                                            Get Started <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                        </a>
                                    </div> -->
                                </div>
                                </div>

                        



                                <!-- # Usage -->
                                <!-- <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x">Usage</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Usage</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Usage</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Usage</div>
                                </div> -->
                                <!-- Social Connections -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">No-Code Cross-Functional Stakeholder Project Scoping & Planning</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">No-Code Cross-Functional Stakeholder Project Scoping & Planning</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">No-Code Cross-Functional Stakeholder Project Scoping & Planning</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">No-Code Cross-Functional Stakeholder Project Scoping & Planning</span></span>
                                    </div>
                                </div>
                                <!-- Custom Domains -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Risk Management Office, PMO, Dev, Test</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Custom Domains</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Custom Domains</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Custom Domains</span></span>
                                    </div>
                                </div>
                                <!-- User Role Management -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Requirements Generation</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">User Role Management</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">User Role Management</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">User Role Management</span></span>
                                    </div>
                                </div>
                                <!-- External Databases -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Auditing, Measurement & Optimization</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">External Databases</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">External Databases</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">External Databases</span></span>
                                    </div>
                                </div>
                                <!-- # Features -->
                                <!-- <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x">Features</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Features</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Features</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Features</div>
                                </div> -->
                                <!-- Custom Connection -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Test Case Creation</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Custom Connection</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Custom Connection</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Custom Connection</span></span>
                                    </div>
                                </div>
                                <!-- Advanced Deployment Options -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Prioritization based on requirements
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <!-- Extra Add-ons -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">SMART, REAL, INVEST, COMPLETENESS, AMBIGUITY, SECURITY</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <!-- Admin Roles -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Full Suite of Test Case Generation Based on User Stories & Acceptance
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Admin Roles</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Admin Roles</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Admin Roles</span></span>
                                    </div>
                                </div>
                                <!-- Deploy and Monitor -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Measured & Complete Test Coverage
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <!-- Enterprise Add-ons -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Model Based Testing (Cucumber)
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <!-- # Support -->
                                <!-- <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x">Support</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v c4d0d cut3s c7zhe csn3x">Support</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Support</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="c5e5v cut3s c7zhe csn3x cq0ie">Support</div>
                                </div> -->
                                <!-- Premium Support -->
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Platform Agnostic BDD Asset Generation</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Premium Support</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Premium Support</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span>Web Apps Only<span class="cq0ie">Premium Support</span></span>
                                    </div>
                                </div>


                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Mathematical Models

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>

                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Bulk Processing
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Technical Tests (API, Security)

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Platform Agnostic Applications
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                       
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Web, Mobile, OS's, Devices, Desktop, API
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                       
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Poor Requirements Analysis and Generative Framework Delivery
</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Defect Remediation

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Secure Cloud Solution

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Automatic Generation of Selenium and Robot Code

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                               
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">Per License, Per Month Test & Requirements Generation

</div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span><center>500</center><span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span>~175*<span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span>5<span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                               
                                     <!-- Enterprise Add-ons -->
                                     <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="cv2cx c6v3h cut3s cbrqb">PRICE PER USER!
</div>
                                </div>
                           
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                    <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span>$499<span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb cedz1">
                                        <span>$300<span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="chew8 c60yf cfgkq chkj1">
                                    <div class="chew8 c6upk cjqs5 cjqs5ab cv2cx c6v3h cut3s cbrqb">
                                        <!-- <svg class="cwtx0 cm1tw c3nxk" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg> -->
                                        <span>$299<span class="cq0ie">Enterprise Add-ons</span></span>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--  -->
         

            <!-- Testimonials carousel -->
            <section>    
                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="c3mbg cero0">
            
                        <!-- Section header -->
                        <div class="ct2ap cb3bz cr01s cerne">
                            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Insights</h2>
                            <p class="c53t6 cbrqb">Articles from the AgileAI Labs Team</p>
                        </div>
            
                        <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
                        <!-- * Initialized in src/js/main.js -->
                        <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                        <div class="cjne2 cw36e clx0i ccp1d ci744 cdyb2 c8t6t cr06e cj46s cnopy cgk10 cepcx cwfuc cyng3 c13a4 cm9tn c78wz">
                            <div class="testimonials-carousel swiper-container cwjtz swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper cggiy" data-highlighter="" style="cursor: grab; transform: translate3d(-752px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-d5507c9445477427" aria-live="polite">
                                    <!-- Carousel items -->
                                    <?php
                                    /**
                                     * Setup query to show the ‘services’ post type with ‘8’ posts.
                                     * Output the title with an excerpt.
                                     */
                                    $args = array(
                                        'post_type' => 'blog',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                        'orderby' => 'title',
                                        'order' => 'ASC',
                                    );

                                    $loop = new WP_Query($args);

                                    while ($loop->have_posts()):
                                        $loop->the_post();

                                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        if ($featured_img_url == '') {
                                            $featured_img_url = '';
                                        }
                                        ?>
                                                <div class="swiper-slide cjne2 cni69 clhrf ctw2r c4n1r cwx6w c6ow5 cw36e ccsca c7g16 ckeed cwhpv cotkg ccneb cymev c8bk4 ccqhs c7yxd cmpg5 cd36m cdvt9 cnopy cgk10 cvrc5 cu4dw cfsgb c6a7c c8u16 coqvf cw5hb cq7i0 cwrpd" role="group" aria-label="1 / 5" style="width: 352px; margin-right: 24px; --mouse-x: 1016.5px; --mouse-y: 216.6328125px;">
                                                    <div class="cjne2 ce92n c6upk clhrf cwktf cdkzq">
                                                        <!-- Particles animation -->
                                                        <div class="cg4uu cashl cav12 cx0h4 ctwcx cagel cpypz cz860 cny2z" aria-hidden="true">
                                                            <canvas data-particle-animation="" data-particle-quantity="3" width="700" height="462" style="width: 350px; height: 231px;"></canvas>
                                                        </div>                                            
                                                        <!-- Radial gradient -->
                                                        <div class="cvgqb cg4uu cmbp8 c2dhn cav12 cpvxk clczn cwfx1 cfm72" aria-hidden="true">
                                                            <div class="c2kwq cg4uu cashl cmbbk c4n1r cb024 cw83r cagel cpypz cdas9"></div>
                                                        </div>
                                            

                                                                <div class="chew8 c6upk c60yf c3f2a">
                                                                    <img class="c91fa" src="<?php echo esc_url($featured_img_url); ?>" alt="Icon 01">
                                                                    <div class="crjun">
                                                                        <div class="czxdk c53t6 c21tr"><?php echo get_the_title(); ?></div>
                                                                        <div class="c91fa cbrqb"><?php echo wp_trim_words(get_the_content(), 30); ?></div>
                                                                    </div>
                                                                    <div class="cmals">
                                                                        <a class="c78tq cjqs5 cjqs5ab cf35v c7zhe c78gb clhtr cdl9i cpypz cs1q0 cwjtz" href="<?php echo get_the_permalink(); ?>">Learn More <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span></a>
                                                                    </div>
                                                                </div>

                                                    </div>
                                                </div> 
                                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>

                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                        <!-- View More Button  -->
                        <div>

                                </div>
                        <!-- Arrows -->
                        <div class="cdjom chew8 cfgkq">
                        <a class="cz7d1 cjne2 c78gb clhtr cdl9i cpypz c0esz c6ow5 cw36e clx0i c8bk4 c1a95 cs1q0 cwjtz" id="subscribeBtn" href="http://dev.arokee.com/agileai_wp/blog">
                                    <span class="cjne2 c78tq cjqs5">
                                       View all blogs<span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                    </span>
                                </a>
                           <!-- <button class="carousel-prev cjne2 ce92n chew8 c6rqt c621r cjqs5 ch3z8 cwjtz" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-d5507c9445477427" aria-disabled="false">
                                <span class="cgt9x">Previous</span>
                                <svg class="clf2b c18zl cenob clhtr cdl9i cpypz chsox" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z"></path>
                                </svg>
                            </button>
                            <button class="carousel-next cjne2 ce92n chew8 c6rqt c621r cjqs5 ch3z8 cwjtz swiper-button-disabled" tabindex="-1" aria-label="Next slide" aria-controls="swiper-wrapper-d5507c9445477427" aria-disabled="true" disabled="">
                                <span class="cgt9x">Next</span>
                                <svg class="clf2b c18zl cenob clhtr cdl9i cpypz chsox" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z"></path>
                                </svg>
                            </button> -->
                        </div>
            
                    </div>
                </div>
            </section>






            <!-- CTA -->
            <section style="margin-top:60px;">
                <div class="ct2ap cilao cu2zh c0rrv">
                    <div class="cjne2 clhrf cb6bd cyjao cxs2s cmwrj">
                        <!-- Radial gradient -->
                        <div class="cvgqb cg4uu c2dhn cqrzy cav12 chew8 cpvxk clczn cwfx1 cabct cjqs5 ch3z8" aria-hidden="true">
                            <div class="c2kwq cg4uu cashl cmbbk c7tn2 ctnnt c7b13"></div>
                            <div class="c2kwq cg4uu cj0ke c4sd1 cmbbk cvyfm c9841"></div>
                        </div>
                        <!-- Blurred shape -->
                        <div class="cvgqb cg4uu cmbp8 c1ish cav12 cfm72 cx4jr cb24t" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                                <defs>
                                    <lineargradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                        <stop offset="0%" stop-color="#A855F7"></stop>
                                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                    </lineargradient>
                                </defs>
                                <path fill="url(#bs5-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
                            </svg>
                        </div>
                        <!-- Content -->
                        <div id="startt-with-us"></div>
                        <div class="ct2ap cb3bz cerne" >
                            <div>
                                <div class="c78tq c7jxr cxcp1 c4fya c8yio c1w3i c7zhe cqxyi">Delivering no-code generative AI SaaS tools</div>
                            </div>
                            <h2 class="cjkqd c7jxr chew2 cn8k2 cz3ez c8yio c2oxq cqxyi">Ready to get started?</h2>
                            <p class="c80xi c53t6 cbrqb">AI advancements generate massive cost savings as well as significant increases in your teams' agile velocity.</p>
                            <div>
                                <a class="cz7d1 c7jxr c4w32 cdgr0 c3d2w c6mfv clhtr cdl9i cpypz cw05g cwjtz c-pointer" id="subscribeBtn2">
                                    Contact Us <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

        </main>
<?php
get_footer();