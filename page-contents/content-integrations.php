                  <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Integrations Page Content
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
           <div class="slide kenburns" style="background-image:url('<?php echo $background_img; ?>');">
            <?php endif;?>
               <div class="container">

                   <div class="slide-captions text-left">
                        <?php $page_title = get_field('page_title');?>
           <?php if (isset($page_title) && !empty($page_title)): ?>
                       <h1 class="slider-h1-secondary"><?php echo $page_title; ?></h1>
                       <?php endif;?>
                   </div>

               </div>

           </div>

           <!-- end: Slide 2 -->

        </div>



        <!-- One Platform -->

        <section class="background-grey p-b-70">

            <div class="container">

                <div class="row">

                    <div class="col-lg-8 center">

                        <div class="heading-text heading-section text-center" data-animate="fadeInUp">
                            <?php $content_title = get_field('content_title');?>
           <?php if (isset($content_title) && !empty($content_title)): ?>
                            <h2><?php echo $content_title; ?></h2>
                            <?php endif;?>
                            <?php $platform_content = get_field('platform_content');?>
           <?php if (isset($platform_content) && !empty($platform_content)): ?>
                            <p class="lead fw-500"><?php echo $platform_content; ?></p>
                            <?php endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: one platform -->



        <!-- Content -->

        <section id="page-content">

            <div class="container p-t-100">

                <div class="heading-text heading-section text-center" data-animate="fadeIn">
                    <?php $dms_title = get_field('dms_title');?>
           <?php if (isset($dms_title) && !empty($dms_title)): ?>
                    <h2 class="secondary-h2"><?php echo $dms_title; ?></h2>
                    <?php endif;?>
                </div>

                <!-- Gallery -->

                <div class="grid-layout grid-6-columns grid-xs-3-columns" data-xs-margin="6" data-margin="20" data-item="grid-item" data-lightbox="gallery" data-animate="fadeInUp">
                    <?php $gallery_item_box = get_field('gallery_item_box');?>
                        <?php foreach ($gallery_item_box as $key => $gallery_item_box) {?>
                    <div class="grid-item">

                        <img class="img-width-100" src="<?php echo $gallery_item_box['image']; ?>">

                    </div>
                     <?php }?>
                </div>

                <!-- end: Gallery -->

            </div>

        </section>

        <!-- end: Content -->



        <!-- Content -->

        <section id="page-content">

            <div class="container p-t-50">

                <div class="heading-text heading-section text-center" data-animate="fadeIn">
                    <?php $crm_title = get_field('crm_title');?>
           <?php if (isset($crm_title) && !empty($crm_title)): ?>
                    <h2 class="secondary-h2"><?php echo $crm_title; ?></h2>
                    <?php endif;?>
                </div>

                <!-- Gallery -->

                <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery" data-animate="fadeInUp">

                   <?php $crm_images_box = get_field('crm_images_box');?>
                        <?php foreach ($crm_images_box as $key => $crm_images_box) {?>
                    <div class="grid-item">

                        <img class="img-width-100" src="<?php echo $crm_images_box['crm_images']; ?>">

                    </div>
                     <?php }?>

                </div>

                <!-- end: Gallery -->

            </div>

        </section>

        <!-- end: Content -->



        <!-- CLIENTS -->

        <section id="page-content">

            <div class="container p-t-50 p-b-100">

                <div class="heading-text heading-section text-center" data-animate="fadeIn">
                    <?php $client_title = get_field('client_title');?>
           <?php if (isset($client_title) && !empty($client_title)): ?>
                    <h2 class="secondary-h2"><?php echo $client_title; ?></h2>
                    <?php endif;?>
                </div>

                <div class="row" data-animate="fadeInUp" style="text-align:center !important;">
                  <?php $client_images_box = get_field('client_images_box');?>
                        <?php foreach ($client_images_box as $key => $client_images_box) {?>
                    <div class="col-lg-4 col-md-4 col-sm-6">

                        <img class="img-width-100px align-self-center" src="<?php echo $client_images_box['client_images']; ?>" alt="Manheim">

                    </div>
                     <?php }?>

                </div>



            </div>

        </section>

        <!-- end: CLIENTS -->
        <?php $window_background_img = get_field('window_background_img');?>
           <?php if (isset($window_background_img) && !empty($window_background_img)): ?>
       <section class="halfscreen background-image" style="background-image:url(<?php echo $window_background_img; ?>); background-position:71% 22%;">
         <?php endif;?>
           <div class="bg-overlay"></div>

           <div class="shape-divider" data-style="15"></div>

           <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true"></div>

           <div class="container">

               <div class="container-fullscreen">

                   <div class="text-middle">

                       <div class="heading-text text-light col-lg-8">
                          <?php $title = get_field('title');?>
           <?php if (isset($title) && !empty($title)): ?>
                           <h2 class="fw-600 padding-mobile"><span><?php echo $title; ?></span></h2>
                            <?php endif;?>

                           <?php $content = get_field('content');?>
           <?php if (isset($content) && !empty($content)): ?>
                           <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $content; ?></p>
                            <?php endif;?>

                           <?php $short_desc = get_field('short_desc');?>
           <?php if (isset($short_desc) && !empty($short_desc)): ?>
                           <p style="font-style: italic; font-size:110%;"><?php echo $short_desc; ?></p>
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