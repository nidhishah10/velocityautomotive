<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying Team Details page Content
 *
 * @package WordPress
 * @subpackage Velocity
 * @since Velocity Automotive 1.0
 */
//get_header();?>

<head>

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
</head>
<div class="portfolio-ajax-page">

<div class="project-description m-t-20">

        <h2><?php the_title();?></h2>

        <p class="heading-text-p"><?php echo get_field('designation'); ?></p>



        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                   <img class="img-fluid m-b-40" src="<?php echo get_field('member_img'); ?>" />

                </div>

                <div class="col-lg-7 offset-lg-1 offset-md-0 offset-sm-0">

                   <?php echo get_the_content(); ?>

                </div>

            </div>

        </div>

        <hr class="space">

    </div>


    <body>
        <noscript>
            <img src=https://ws.zoominfo.com/pixel/627c14cc3ef5dc0012eea313 width="1" height="1" style="display: none;" alt="websights"/>
                  </noscript>
</body>
</div>