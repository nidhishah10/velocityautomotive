           <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Velocityrecon Page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>
        <!-- Secondary Header Image -->

        <div id="slider" class="inspiro-slider dots-creative slider-secondary" data-height-xs="360">

           <!-- Slide 2 -->
                      <?php $background_img = get_field('background_img');?>
            <?php if (isset($background_img) && !empty($background_img)): ?>
           <div class="slide kenburns" style="background-image:url(<?php echo $background_img; ?>);">
                        <?php endif;?>
               <div class="container">

                   <div class="slide-captions text-left">
                                 <?php $page_title = get_field('page_title');?>
            <?php if (isset($page_title) && !empty($page_title)): ?>
                       <h1 class="slider-h1-secondary"><span class="text-black"><?php echo $page_title; ?></h1>
                                   <?php endif;?>
                   </div>

               </div>

           </div>

           <!-- end: Slide 2 -->

        </div>



        <!-- START TIME SECTION -->

        <section>

            <div class="container">

                <div class="row">

                    <div class="col-lg-7" data-animate="fadeIn">
                                   <?php $velocity_img = get_field('velocity_img');?>
            <?php if (isset($velocity_img) && !empty($velocity_img)): ?>
                        <img class="m-b-20" style="max-width:300px;"src="<?php echo $velocity_img; ?>" alt="Velocity Recon">
                                    <?php endif;?>

                                   <?php $content_title = get_field('content_title');?>
            <?php if (isset($content_title) && !empty($content_title)): ?>
                        <h2 class="secondary-h2"><?php echo $content_title; ?></h2>
                                    <?php endif;?>

                                   <?php $content = get_field('content');?>
            <?php if (isset($content) && !empty($content)): ?>
                        <?php echo $content; ?>
                                    <?php endif;?>

                                    <?php $sign_up_url = get_field('sign_up_url');?>
                                    <?php $sign_up_btn = get_field('sign_up_btn');?>
            <?php if (isset($sign_up_btn) && !empty($sign_up_btn)): ?>
                        <a href="<?php echo $sign_up_url; ?>" class="btn btn-outline btn-dark m-t-30"><span><?php echo $sign_up_btn; ?></span></a>
                                    <?php endif;?>
                    </div>

                    <div class="col-lg-5" data-animate="fadeInUp">
                        <?php $velocity_img1 = get_field('velocity_img1');?>
            <?php if (isset($velocity_img1) && !empty($velocity_img1)): ?>
                        <img class="img-fluid" src="<?php echo $velocity_img1; ?>" alt="VelocityRecon">
                                    <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: -->



        <!-- WELCOME -->

        <section class="background-grey">

            <div class="container">

                <div class="heading-text heading-section text-center m-b-10" data-animate="fadeIn">
                  <?php $recon_title = get_field('recon_title');?>
            <?php if (isset($recon_title) && !empty($recon_title)): ?>
                    <h2><?php echo $recon_title; ?></h2>
                                <?php endif;?>
                </div>

                <div class="row" data-animate="fadeInUp">
                    <?php $recon_img = get_field('recon_img');?>
            <?php if (isset($recon_img) && !empty($recon_img)): ?>
                    <div class="col-lg-12"> <img class="img-fluid" src="<?php echo $recon_img; ?>" alt="Velocity Info Graphic">
                                  <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: WELCOME -->



        <!-- START PROMOTE SECTION -->

        <section>

            <div class="container">

                <div class="row heading-text heading-section">

                    <div class="col-lg-5" data-animate="fadeInUp">
                        <?php $velocityrecon_img = get_field('velocityrecon_img');?>
            <?php if (isset($velocityrecon_img) && !empty($velocityrecon_img)): ?>
                        <img class="img-fluid" src="<?php echo $velocityrecon_img; ?>" alt="VelocityRecon">
                         <?php endif;?>
                    </div>

                    <div class="col-lg-7 p-t-40-flux" data-animate="fadeIn">
                        <?php $title1 = get_field('title1');?>
            <?php if (isset($title1) && !empty($title1)): ?>
                        <h2 class="secondary-h2"><?php echo $title1; ?>t</h2>
                        <?php endif;?>

                        <?php $content1 = get_field('content1');?>
            <?php if (isset($content1) && !empty($content1)): ?>
                        <p class="fw-500"><?php echo $content1; ?></p>
                        <?php endif;?>

                        <?php $demo_url = get_field('demo_url');?>
                        <?php $demo_btn = get_field('demo_btn');?>
            <?php if (isset($demo_btn) && !empty($demo_btn)): ?>
                        <a href="<?php echo $demo_url; ?>" class="btn btn-outline btn-dark m-t-10"><span><?php echo $demo_btn; ?></span></a>
                        <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: -->



        <!-- Section -->
        <?php $background_img1 = get_field('background_img1');?>
            <?php if (isset($background_img1) && !empty($background_img1)): ?>
        <section class="halfscreen background-image" style="background-image:url(<?php echo $background_img1; ?>); background-position:71% 22%;">
          <?php endif;?>
           <div class="bg-overlay"></div>

           <div class="shape-divider" data-style="15"></div>

           <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true"></div>

           <div class="container">

               <div class="container-fullscreen">

                   <div class="text-middle">

                       <div class="heading-text text-light col-lg-8">
                          <?php $title2 = get_field('title2');?>
            <?php if (isset($title2) && !empty($title2)): ?>
                           <h2 class="fw-600 padding-mobile"><span><?php echo $title2; ?></span></h2>
                           <?php endif;?>

                           <?php $content2 = get_field('content2');?>
            <?php if (isset($content2) && !empty($content2)): ?>
                           <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $content2; ?></p>
                           <?php endif;?>

                           <?php $short_desc = get_field('short_desc');?>
            <?php if (isset($short_desc) && !empty($short_desc)): ?>
                           <p style="font-style: italic; font-size:110%;"><?php echo $short_desc; ?></p>
                           <?php endif;?>

                           <?php $read_more_btn = get_field('read_more_btn');?>
                           <?php $btn_url = get_field('btn_url');?>
            <?php if (isset($read_more_btn) && !empty($read_more_btn)): ?>
                           <a href="<?php echo $btn_url; ?>" class="btn btn-light btn-outline btn-roundeded"><?php echo $read_more_btn; ?></a>
                           <?php endif;?>
                       </div>

                   </div>

               </div>

           </div>

        </section>

        <!-- end: Section -->