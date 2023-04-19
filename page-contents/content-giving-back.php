            <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Giving Back page Content
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



        <!-- About us -->

        <section class="background-grey p-b-70 community-page">

            <div class="container">

                <div class="row">

                    <div class="col-lg-10 center">

                        <div class="heading-text heading-section text-center" data-animate="fadeInUp">
                            <?php $content_title = get_field('content_title');?>
                        <?php if (isset($content_title) && !empty($content_title)): ?>
                            <h2 style="line-height:45px;"><?php echo $content_title; ?><br />
                              <?php endif;?>
                              <?php $content_sub_title = get_field('content_sub_title');?>
                        <?php if (isset($content_sub_title) && !empty($content_sub_title)): ?>
                            <span style="font-size:25px; line-height:25px; font-weight:500;"><?php echo $content_sub_title; ?></span>
                            <?php endif;?>
                            </h2>
                            <?php $content = get_field('content');?>
                        <?php if (isset($content) && !empty($content)): ?>
                            <p class="lead fw-500"><?php echo $content; ?></p>
                            <?php endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: About us -->



        <!-- START SECTION -->
        <?php $givingback_box = get_field('givingback_box');?>
            <?php foreach ($givingback_box as $key => $givingback_box) {?>
        <section class="p-t-20 p-b-0">

            <div class="container">

                <div class="row heading-text heading-section">

                    <div class="col-lg-5" data-animate="fadeInUp">

                        <img class="img-fluid" src="<?php echo $givingback_box['image']; ?>" alt="Aletha’s Legacy">

                    </div>

                    <div class="col-lg-6 offset-lg-1 offset-md-0 offset-sm-0 p-t-40-flux" data-animate="fadeIn">

                        <h2 class="secondary-h2"><?php echo $givingback_box['givingback_title']; ?></h2>

                        <p class="paragraph-medium"><?php echo $givingback_box['givingback_content']; ?>

                        </p>

                        <a target="_blank" href="<?php echo $givingback_box['btn_url']; ?>" class="btn btn-primary"><span><?php echo $givingback_box['btn_name']; ?></span></a>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: -->
        <div class="seperator m-t-0 m-b-0"><i class="fa fa-chevron-down"></i></div>
         <?php }?>





