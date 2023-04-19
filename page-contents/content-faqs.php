                  <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Faqs Page Content
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

                   <div class="slide-captions text-left offset-lg-1 offset-md-0 offset-sm-0">
                        <?php $page_title = get_field('page_title');?>
           <?php if (isset($page_title) && !empty($page_title)): ?>
                       <h1 class="slider-h1-secondary"><?php echo $page_title; ?></h1>
                       <?php endif;?>
                   </div>

               </div>

           </div>

           <!-- end: Slide 2 -->

       </div>

        <!-- Content -->

        <section id="page-content" class="p-t-100 p-b-100  background-grey">

            <div class="container ">

                <div class="heading-text heading-section col-lg-10 offset-lg-1 offset-md-0 offset-sm-0 ">
                    <?php $faqs_title = get_field('faqs_title');?>
           <?php if (isset($faqs_title) && !empty($faqs_title)): ?>
                    <h2 class="secondary-h2"><?php echo $faqs_title; ?></h2>
                    <?php endif;?>

                    <?php $faqs_desc = get_field('faqs_desc');?>
           <?php if (isset($faqs_desc) && !empty($faqs_desc)): ?>
                    <p><?php echo $faqs_desc; ?></p>
                    <?php endif;?>
                </div>

                <div class="row">

                    <div class="content col-lg-10 offset-lg-1 offset-md-0 offset-sm-0">

                        <!-- Accordion -->

                        <div class="accordion accordion-simple">
                                         <?php $faqs_box = get_field('faqs_box');?>
            <?php foreach ($faqs_box as $key => $faqs_box) {?>
                            <div class="ac-item">

                                <h5 class="ac-title"><?php echo $faqs_box['questions']; ?></h5>

                                <div class="ac-content">

                                    <?php echo $faqs_box['answers']; ?>

                                </div>

                            </div>
                            <?php }?>


                        </div>

                        <!-- end: Accordion -->

                    </div>

                </div>

            </div>

        </section>

        <!-- end: Content -->



        <!-- Content -->

        <section id="page-content" class="p-t-100 p-b-100" >

            <div class="container ">

                <div class="heading-text heading-section col-lg-10 offset-lg-1 offset-md-0 offset-sm-0 ">
                    <?php $reconvelocity_title = get_field('reconvelocity_title');?>
           <?php if (isset($reconvelocity_title) && !empty($reconvelocity_title)): ?>
                    <h2 class="secondary-h2"><?php echo $reconvelocity_title; ?></h2>
                    <?php endif;?>
                    <?php $reconvelocity_desc = get_field('reconvelocity_desc');?>
           <?php if (isset($reconvelocity_desc) && !empty($reconvelocity_desc)): ?>
                    <p><?php echo $reconvelocity_desc; ?></p>
                    <?php endif;?>
                </div>

                <div class="row">

                    <div class="content col-lg-10 offset-lg-1 offset-md-0 offset-sm-0">

                        <!-- Accordion -->

                        <div class="accordion accordion-simple">
                            <?php $faqs_box1 = get_field('faqs_box1');?>
            <?php foreach ($faqs_box1 as $key => $faqs_box1) {?>
                            <div class="ac-item">

                                <h5 class="ac-title"><?php echo $faqs_box1['questions1']; ?></h5>

                                <div class="ac-content">

                                    <?php echo $faqs_box1['answers1']; ?>

                                </div>

                            </div>
            <?php }?>

                        </div>

                        <!-- end: Accordion -->

                    </div>

                </div>

            </div>

        </section>

        <!-- end: Content -->


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
                            <?php $content_title = get_field('content_title');?>
           <?php if (isset($content_title) && !empty($content_title)): ?>
                            <h2 class="fw-600 padding-mobile"><span><?php echo $content_title; ?></span></h2>
                            <?php endif;?>

                            <?php $content = get_field('content');?>
           <?php if (isset($content) && !empty($content)): ?>
                            <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $content; ?></p>
                            <?php endif;?>

                            <?php $short_desc = get_field('short_desc');?>
           <?php if (isset($short_desc) && !empty($short_desc)): ?>
                            <p style="font-style: italic; font-size:110%;"> <?php echo $short_desc; ?></p>
                            <?php endif;?>

                            <?php $read_more_btn = get_field('read_more_btn');?>
           <?php if (isset($read_more_btn) && !empty($read_more_btn)): ?>
                            <a href="page-testimonial-joshua.html" class="btn btn-light btn-outline btn-roundeded" data-lightbox="ajax"><?php echo $read_more_btn; ?></a>
                            <?php endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: Section -->
