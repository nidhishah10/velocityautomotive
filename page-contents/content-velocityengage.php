    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying VelocityEngage page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>
        <!-- Slider -->

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

        <!--end: Slider -->





        <!-- ABOUT -->

        <section>

            <div class="container">

                <div class="row">

                    <div class="col-lg-7" data-animate="fadeIn">
                        <?php $velocityengage_img = get_field('velocityengage_img');?>
                        <?php if (isset($velocityengage_img) && !empty($velocityengage_img)): ?>
                        <img class="m-b-20" style="max-width:320px;"src="<?php echo $velocityengage_img; ?>" alt="Velocity Engage">
                        <?php endif;?>

                        <?php $content_title = get_field('content_title');?>
                        <?php if (isset($content_title) && !empty($content_title)): ?>
                        <h2 class="secondary-h2"> <?php echo $content_title; ?></h2>
                        <?php endif;?>

                        <?php $content = get_field('content');?>
                        <?php if (isset($content) && !empty($content)): ?>
                        <?php echo $content; ?>
                       <?php endif;?>
                       <?php $sign_up_url = get_field('sign_up_url');?>
                       <?php $sign_up_btn = get_field('sign_up_btn');?>
                        <?php if (isset($sign_up_btn) && !empty($sign_up_btn)): ?>
                        <a href="<?php echo $sign_up_url; ?>" class="btn btn-outline btn-dark"><span><?php echo $sign_up_btn; ?></span></a>
                        <?php endif;?>
                    </div>

                    <div class="col-lg-5 m-t-90" data-animate="fadeInUp">
                        <?php $velocityengage_img1 = get_field('velocityengage_img1');?>
                        <?php if (isset($velocityengage_img1) && !empty($velocityengage_img1)): ?>
                        <img class="img-fluid" src="<?php echo $velocityengage_img1; ?>" alt="VelocityEngage">
                        <?php endif;?>
                    </div>

                </div>

            </div>

        </section>
        
        <section class="background-primary ">
            <div class="container p-t-50 p-b-0">
                <!--Default pie chart-->
                <div class="heading-text heading-line text-center" data-animate="fadeIn">
		    <?php $result_title = get_field('result_title');?>
                    <?php if (isset($result_title) && !empty($result_title)): ?>
                    <h2 class="secondary-h2 text-white p-b-30 fw-800" style="line-height:45px;"><?php echo $result_title; ?><br />
		    <?php endif; ?>
			<?php $result_sub_title = get_field('result_sub_title');?>
                        <?php if (isset($result_sub_title) && !empty($result_sub_title)): ?>
                        <span class="text-white" style="font-size:25px; line-height:25px; font-weight:500;"><?php echo $result_sub_title; ?></span>
                        <?php endif; ?>
                    </h2>
                </div>
		<?php $result_image = get_field('result_image');?>
                <?php if (isset($result_image) && !empty($result_image)): ?>
                <div class="row" data-animate="fadeInUp">
                    <div class="col-lg-12"> <img class="" src="<?php echo $result_image; ?>" alt="Velocity Info Graphic">
                    </div>
                </div>
		<?php endif; ?>                

                <div class="heading-text text-center" data-animate="fadeInUp">
                    <?php $profit_title = get_field('profit_title');?>
                    <?php if (isset($profit_title) && !empty($profit_title)): ?>
                    <h2 class="text-white p-b-30 p-t-80 gross-title" ><?php echo $profit_title; ?><br />
		    <?php endif; ?>
			<?php $profit_description = get_field('profit_description');?>
                        <?php if (isset($profit_description) && !empty($profit_description)): ?>
                        <span class="text-white gross-secondary"><?php echo $profit_description; ?></span>
		        <?php endif; ?>   
                    </h2>
                </div>
                <!--END: Default pie chart-->
            </div>
        </section>
       
        <!-- CONTENT -->
        <section class="p-b-40">
            <div class="container p-t-40">
                <div class="heading-text heading-section" data-animate="fadeIn">
                    <?php $power_title = get_field('power_title');?>
                    <?php if (isset($power_title) && !empty($power_title)): ?>
                    <h2><?php echo $power_title; ?></h2>
                    <?php endif; ?>
                    <?php $power_sub_title = get_field('power_sub_title');?>
                    <?php if (isset($power_sub_title) && !empty($power_sub_title)): ?>
                    <p class="lead fw-400"><?php echo $power_sub_title; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- START TIME SECTION -->
        <section class="p-t-0 m-t-0">
            <div class="container">
                <div class="row">
                    <?php $power_image = get_field('power_image');?>
                    <?php if (isset($power_image) && !empty($power_image)): ?>
                    <div class="col-lg-5" data-animate="fadeInUp">
                        <img class="img-fluid" src="<?php echo $power_image; ?>" alt="VelocityRecon">
                    </div>
                    <?php endif; ?>
                    <div class="col-lg-6 p-t-40-flux offset-lg-1 offset-md-0 offset-sm-0" data-animate="fadeIn">
                        <?php $power_sub_test = get_field('power_sub_test');?>
                        <?php if (isset($power_sub_test) && !empty($power_sub_test)): ?>
                        <h2 class="secondary-h2"><?php echo $power_sub_test; ?></h2>
                        <?php endif; ?>
			<?php $power_description = get_field('power_description');?>
                        <?php if (isset($power_description) && !empty($power_description)): ?>
			<?php echo $power_description; ?>
                        <?php endif; ?>
                        <?php $power_url_text = get_field('power_url_text');?>
                        <?php $power_url = get_field('power_url');?>
           		<?php if (isset($power_url) && !empty($power_url)): ?>
                        <a href="<?php echo $power_url; ?>" class="btn btn-outline btn-dark m-t-10"><span><?php echo $power_url_text; ?></span></a>
			<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: -->
        <!-- START PRICE SECTION -->
        <section class="background-grey">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7 p-t-60-flux " data-animate="fadeIn">
                        <?php $price_text = get_field('price_text');?>
           		<?php if (isset($price_text) && !empty($price_text)): ?>
                        <h2 class="secondary-h2"><?php echo $price_text; ?></h2>
                        <?php endif; ?>
                        <?php $price_sub_text = get_field('price_sub_text');?>
           		<?php if (isset($price_sub_text) && !empty($price_sub_text)): ?>
                        <p class="heading-text-p fw-500"><?php echo $price_sub_text; ?></p>
                        <?php endif; ?>
                        <?php $price_description = get_field('price_description');?>
           		<?php if (isset($price_description) && !empty($price_description)): ?>
                        <?php echo $price_description; ?>
                        <?php endif; ?>
                        <?php $price_btn_text = get_field('price_btn_text');?>
                        <?php $price_btn_url = get_field('price_btn_url');?>
           		<?php if (isset($price_btn_url) && !empty($price_btn_url)): ?>
                        <a href="<?php echo $price_btn_url; ?>" class="btn btn-outline btn-dark m-t-10"><span><?php echo $price_btn_text; ?></span></a>
                        <?php endif ?>
                    </div>
                    <?php $price_image = get_field('price_image');?>
                    <?php if (isset($price_image) && !empty($price_image)): ?>
                    <div class="col-lg-5 " data-animate="fadeInUp">
                        <img class="img-fluid" src="<?php echo $price_image; ?>" alt="VelocityRecon">
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
        <!-- end: -->
        
        <!-- WELCOME -->
        <section class="p-b-40">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                    <?php $map_title = get_field('map_title');?>
                       
           	     <?php if (isset($map_title) && !empty($map_title)): ?>
                    <h2 style="line-height:45px;"><?php echo $map_title; ?><br />
                     <?php endif;?>
                       <?php $map_sub_title = get_field('map_sub_title');?>
           		<?php if (isset($map_sub_title) && !empty($map_sub_title)): ?>
                        <span style="font-size:25px; line-height:25px; font-weight:500;"><?php echo $map_sub_title; ?></span>
                       <?php endif; ?>
                    </h2>
                    <?php $map_description = get_field('map_description');?>
           		<?php if (isset($map_description) && !empty($map_description)): ?>
                    <p class="fw-500"><?php echo $map_description; ?></p>
                    <?php endif; ?>
                </div>
                <?php $map_image = get_field('map_image');?>
           		<?php if (isset($map_image) && !empty($map_image)): ?>
                <div class="row" data-animate="fadeInUp">
                    <div class="col-lg-12"> <img class="img-fluid" src="<?php echo $map_image; ?>" alt="Velocity Heat Map"></div>
                </div>
		<?php endif; ?>
            </div>
        </section>
        <!-- end: WELCOME -->
        
       <!-- Section -->
       <?php $testimonial_image = get_field('testimonial_image');?>
           		<?php if (isset($testimonial_image) && !empty($testimonial_image)): ?>
       <section class="halfscreen background-image" style="background-image:url(<?php echo $testimonial_image; ?>); background-position:71% 22%;">
<?php endif; ?>
           <div class="bg-overlay"></div>
           <div class="shape-divider" data-style="15"></div>
           <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true"></div>
           <div class="container">
               <div class="container-fullscreen">
                   <div class="text-middle">
                       <div class="heading-text text-light col-lg-8">
                           <?php $testimonial_title = get_field('testimonial_title');?>
           		<?php if (isset($testimonial_title) && !empty($testimonial_title)): ?>
                           <h2 class="fw-600 padding-mobile"><span><?php echo $testimonial_title; ?></span></h2>
                           <?php endif; ?>
                           <?php $testimonial_description = get_field('testimonial_description');?>
           		<?php if (isset($testimonial_description) && !empty($testimonial_description)): ?>
                           <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $testimonial_description; ?></p>
                           <?php endif;?>
                           <?php $person_content = get_field('person_content');?>
           		<?php if (isset($person_content) && !empty($person_content)): ?>
                           <p style="font-style: italic; font-size:110%;"><?php echo $person_content; ?></p>
                           <?php endif;?>
                           <?php $read_more_btn = get_field('read_more_btn');?>
                                <?php $read_more_url = get_field('read_more_url');?>
           <?php if (isset($read_more_url) && !empty($read_more_url)): ?>
                           <a href="<?php echo $read_more_url; ?>" class="btn btn-light btn-outline btn-roundeded" data-lightbox="ajax"><?php echo $read_more_btn; ?></a>
                           <?php endif ?>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- end: Section -->