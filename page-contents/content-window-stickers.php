           <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Window Stickers Page Content
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



        <!-- About us -->

        <section class="p-b-0">

            <div class="container">

                <div class="row" data-animate="fadeIn">

                    <div class="col-lg-5 p-b-40" >
                      <?php $content_title = get_field('content_title');?>
           <?php if (isset($content_title) && !empty($content_title)): ?>
                        <h2 class="m-b-5"><?php echo $content_title; ?></h2>
                          <?php endif;?>

                        <?php $content_img = get_field('content_img');?>
           <?php if (isset($content_img) && !empty($content_img)): ?>
                        <img class="m-b-20" style="max-width:400px;"src="<?php echo $content_img; ?>" alt="Velocity Window Stickers">
                        <?php endif;?>
                        <?php $content1 = get_field('content1');?>
           <?php if (isset($content1) && !empty($content1)): ?>
                            <?php echo $content1; ?>
                        <?php endif;?>
                        <?php $sign_up_btn = get_field('sign_up_btn');?>
                        <?php $sign_up_url = get_field('sign_up_url');?>
           <?php if (isset($sign_up_btn) && !empty($sign_up_btn)): ?>
                        <a href="<?php echo $sign_up_url; ?>" class="btn btn-dark btn-outline btn-roundeded"><?php echo $sign_up_btn; ?></a>
                         <?php endif;?>
                    </div>

                    <div class="col-lg-6 offset-lg-1 offset-md-0 offset-sm-0">
                        <?php $content2 = get_field('content2');?>
           <?php if (isset($content2) && !empty($content2)): ?>
                        <p class="lead"><?php echo $content2; ?></p>
                        <?php endif;?>
                    </div>

                    <!-- end features box -->

                </div>

                <div class="row" data-animate="fadeInUp">

                    <div class="col-lg-12">
                      <?php $window_sticker_img = get_field('window_sticker_img');?>
           <?php if (isset($window_sticker_img) && !empty($window_sticker_img)): ?>
                        <img class="img-fluid" src="<?php echo $window_sticker_img; ?>" alt="Window Stickers">
                         <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: About us -->



        <!-- IMAGE BLOCK -->

        <section id="image-block" class="image-block-red no-padding">

            <div class="container-fluid">

                <div class="row">
                    <?php $window_sticker_computer_img = get_field('window_sticker_computer_img');?>
           <?php if (isset($window_sticker_computer_img) && !empty($window_sticker_computer_img)): ?>
                    <div class="col-lg-6 half-img-height" style="background:url(<?php echo $window_sticker_computer_img; ?>) 50% 50% / cover no-repeat;">
                      <?php endif;?>
                    </div>

                    <div class="col-lg-6" data-animate="fadeIn">

                        <div class="heading-text heading-section-red">
                            <?php $title = get_field('title');?>
           <?php if (isset($title) && !empty($title)): ?>
                            <h2 class="secondary-h2 text-white"><?php echo $title; ?></h2>
                            <?php endif;?>

                            <?php $content = get_field('content');?>
           <?php if (isset($content) && !empty($content)): ?>
                            <p class="lead fw-400 text-white"><?php echo $content; ?></p>
                            <?php endif;?>
                        </div>
                        <?php $sign_up_btn1 = get_field('sign_up_btn1');?>
                        <?php $sign_up_url1 = get_field('sign_up_url1');?>
           <?php if (isset($sign_up_btn1) && !empty($sign_up_btn1)): ?>
                        <a href="<?php echo $sign_up_url1; ?>" class="btn btn-light btn-outline"><span><?php echo $sign_up_btn1; ?></span></a>
                        <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: IMAGE BLOCK -->



        <!-- PORTFOLIO -->

        <section class="p-b-75">

            <div class="container">

                <div class="row" data-animate="fadeIn">

                    <div class="heading-text heading-section col-lg-8">
                        <?php $integration_title = get_field('integration_title');?>
           <?php if (isset($integration_title) && !empty($integration_title)): ?>
                        <h2><?php echo $integration_title; ?></h2>
                        <?php endif;?>
                        <?php $integration_content = get_field('integration_content');?>
           <?php if (isset($integration_content) && !empty($integration_content)): ?>
                        <p class="lead fw-400"><?php echo $integration_content; ?></p>
                      <?php endif;?>
                    </div>

                    <div class="col-lg-4 v-auto" data-animate="fadeInUp">

                        <?php $integration_url = get_field('integration_url');?>
                         <?php $integration_img = get_field('integration_img');?>
           <?php if (isset($integration_img) && !empty($integration_img)): ?>
                        <a href="<?php echo $integration_url; ?>" target="_blank"><img class="img-fluid" src="<?php echo $integration_img; ?>" alt="VAuto"></a>
                        <?php endif;?>
                    </div>

                </div>

            </div>

        </section>



        <!-- Section -->
            <?php $toyota_img = get_field('toyota_img');?>
           <?php if (isset($toyota_img) && !empty($toyota_img)): ?>
           <section class="halfscreen background-image" style="background-image:url(<?php echo $toyota_img; ?>); background-position:71% 22%;" >
              <?php endif;?>
               <div class="bg-overlay"></div>

               <div class="shape-divider" data-style="15"></div>

               <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true"></div>

               <div class="container">

                   <div class="container-fullscreen">

                       <div class="text-middle">

                           <div class="heading-text text-light col-lg-8">
                              <?php $img_title = get_field('img_title');?>
           <?php if (isset($img_title) && !empty($img_title)): ?>
                               <h2 class="fw-600 padding-mobile"><span><?php echo $img_title; ?></span></h2>
                                <?php endif;?>

                              <?php $img_content = get_field('img_content');?>
           <?php if (isset($img_content) && !empty($img_content)): ?>
                               <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $img_content; ?></p>
                                <?php endif;?>

                               <?php $person_name = get_field('person_name');?>
           <?php if (isset($person_name) && !empty($person_name)): ?>
                               <p style="font-style: italic; font-size:110%;"><?php echo $person_name; ?></p>
                                <?php endif;?>


                                <?php $read_more_url = get_field('read_more_url');?>
                                <?php $read_more_btn = get_field('read_more_btn');?>
           <?php if (isset($read_more_btn) && !empty($read_more_btn)): ?>
                              <a href="<?php echo $read_more_url; ?>" class="btn btn-light btn-outline btn-roundeded" data-lightbox="ajax"><?php echo $read_more_btn; ?></a>
                               <?php endif;?>
                           </div>

                       </div>

                   </div>

               </div>

           </section>

        <!-- end: Section -->