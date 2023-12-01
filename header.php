<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<style type="text/css">
    .nav__signup .sxbtn {
        padding: 16px 20px !important;
        cursor: pointer;
    }

    .same {
        padding-right: 22px;
        font-size: 14 !important;
    }

    .same1 {
        font-size: 14 !important;
    }

    @media (max-width: 768px) {
        li.cqclp.header-schedule-btn {
            display: none;
        }
    }
</style>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/agile/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/agile/swiper-bundle.min.css">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/agile/style.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/agile/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer="" data-domain="https://agileailabs.com/"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/script.js"></script>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    @media (max-width: 426px) {
        .modal-content {
            margin: 24% auto;
            width: 90%;
            /* Could be more or less, depending on screen size */
        }

        ol,
        ul {
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
    }

    @media (max-width: 375px) {
        a.cf35v.c78gb.clhtr.cdl9i.cpypz.cs1q0.same {
            font-size: 12px;
        }

        a.cxd0w {
            width: 154px;
        }

        a.cf35v.c78gb.clhtr.cdl9i.cpypz.cs1q0.same1 {
            font-size: 12px;
        }
    }
</style>

<body class="cdkzq c9ryp crgkv ckxb8 cmtn4" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
    data-aos-delay="0">
    <!-- Site header -->
    <header class="cg4uu c558b cgmji">
        <div class="ct2ap cilao cu2zh c0rrv">
            <div class="chew8 c4743 cjqs5 cf1zc csy2v">

                <!-- Site branding -->
                <div class="c1slj cm1tw">
                    <!-- Logo -->
                    <a class="cxd0w" href="<?php echo home_url(); ?>" aria-label="AgileAI Labs">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/agile/logo.png" width="200"
                            alt="AgileAI Labs">
                    </a>
                </div>

                <!-- Desktop navigation -->
                <nav class="chew8 crjun">

                    <!-- Desktop sign in links -->
                    <ul class="chew8 crjun cldwc cjqs5 cfgkq">
                        <li>
                            <a class="cf35v c78gb clhtr cdl9i cpypz cs1q0 same" href="#abt">About Us</a>
                        </li>
                        <li>
                            <a class="cf35v c78gb clhtr cdl9i cpypz cs1q0 same1" href="#prc">Pricing</a>
                        </li>
                        <li class="cqclp header-schedule-btn">
                            <a class="cz7d1 cjne2 cgmji c78gb clhtr cdl9i cpypz c0esz c6ow5 cw36e clx0i c8bk4 c1a95 cs1q0 cwjtz"
                                id="subscribeBtn" href="#">
                                <span class="cjne2 c78tq cjqs5">
                                    Schedule a Demo <span class="c5psi cwkvg comen c26ks cdl9i cpypz c01sq">-&gt;</span>
                                </span>
                            </a>
                        </li>
                        <li class="cqclp header-schedule-btn">
                            <a class="cz7d1 cjne2 cgmji c78gb clhtr cdl9i cpypz c0esz c6ow5 cw36e clx0i c8bk4 c1a95 cs1q0 cwjtz"
                                id="subscribeBtn" href="https://www.linkedin.com/company/agileailabs/" target="_blank">
                                <span class="cjne2 c78tq cjqs5">
                                    Follow Us &nbsp;<i class="fa-brands fa-linkedin"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                </nav>

            </div>
        </div>
    </header>