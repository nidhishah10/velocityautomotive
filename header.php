<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content=""> -->
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Include google fonts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/css?family='Montserrat':400">


    <script type="text/javascript">

        function setREVStartSize(e) {

            try {

                var i = jQuery(window).width(),

                    t = 9999,

                    r = 0,

                    n = 0,

                    l = 0,

                    f = 0,

                    s = 0,

                    h = 0;

                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {

                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)

                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {

                    var u = (e.c.width(), jQuery(window).height());

                    if (void 0 != e.fullScreenOffsetContainer) {

                        var c = e.fullScreenOffsetContainer.split(",");

                        if (c) jQuery.each(c, function(e, i) {

                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u

                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))

                    }

                    f = u

                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);

                e.c.closest(".rev_slider_wrapper").css({

                    height: f

                })

            } catch (d) {

                console.log("Failure at Presize of Slider:" + d)

            }

        };

    </script>

      <script>



        (function () {

          var zi = document.createElement('script');

          zi.type = 'text/javascript';

          zi.async = true;

          zi.referrerPolicy = 'unsafe-url';

          zi.src = 'https://ws.zoominfo.com/pixel/627c14cc3ef5dc0012eea313';

          var s = document.getElementsByTagName('script')[0];

          s.parentNode.insertBefore(zi, s);

        })();

      </script>
    <!-- End of google fonts -->
    <?php wp_head();?>

</head>

<!-- <body <?php body_class();?>> -->
    <div class="body-inner">
    <div id="wrapper">
             <!-- Header -->

        <header id="header" data-fullwidth="true">

            <div class="header-inner">

                <div class="container">

                    <!--Logo-->
                    <div id="logo">
                        <?php $logo = get_field('header_logo', 'option');?>

                    <?php if (isset($logo) && !empty($logo)): ?>
                        <a href="<?php bloginfo('url');?>">
                            <img src="<?php echo $logo; ?>" class="logo-default">
                        </a>
                         <?php endif;?>
                    </div>

                    <!--End: Logo-->

                    <!--Navigation Resposnive Trigger-->

                    <div id="mainMenu-trigger">

                        <a class="lines-button x"><span class="lines"></span></a>

                    </div>

                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->

                    <div id="mainMenu">

                        <div class="container">

                            <nav>

                                <?php
if (has_nav_menu('main-menu')):
	wp_nav_menu(array("link_after" => ' <i class="fa fa-angle-down"></i>', 'theme_location' => 'main-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s <li><a href="http://64.4.160.99/velocityautomotive/contact/" class="btn btn-roundeded btn-nav">Schedule Demo</a></li></ul>'));
endif;
?>

                            </nav>

                        </div>

                    </div>

                    <!--end: Navigation-->

                </div>

            </div>

        </header>

        <!-- end: Header -->