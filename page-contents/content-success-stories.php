    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Success Stories page Content
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



              <!-- TWO COLUMN -->
       <section id="brian-benstock">
           <div class="container p-t-20">
               <div class="heading-text heading-section">
                  <?php $content_title = get_field('content_title');?>
           <?php if (isset($content_title) && !empty($content_title)): ?>
                   <h2 class="secondary-h2"><?php echo $content_title; ?></h2>
                   <?php endif;?>
               </div>

               <div class="row p-t-10">

                   <div class="col-lg-6 col-md-12"  data-animate="fadeIn" data-animate-delay="0">
                       <?php $story1 = get_field('story1');?>
           <?php if (isset($story1) && !empty($story1)): ?>
                   <h2 class="secondary-h2"><?php echo $story1; ?></h2>
                   <?php endif;?>

                   </div>

                   <div class="col-lg-6 col-md-12 p-t-10" data-animate="fadeInUp" data-animate-delay="200">
                        <div class="ratio ratio-16x9 ">
                            <iframe src="<?php echo get_field('video_url1'); ?>" allowfullscreen></iframe>
                        </div>

                        <div class="blockquote m-t-60">
                            <?php $small_desc1 = get_field('small_desc1');?>
           <?php if (isset($small_desc1) && !empty($small_desc1)): ?>
                   <h2 class="secondary-h2"><?php echo $small_desc1; ?></h2>
                   <?php endif;?>
                        </div>
                   </div>

               </div>
           </div>
       </section>
       <!-- END TWO COLUMN -->

       <div class="seperator m-t-0 m-b-0"><i class="fa fa-chevron-down"></i></div>

       <!-- TWO COLUMN -->
       <section>
           <div class="container p-t-20">
               <div class="row">
                   <div class="col-lg-6 col-md-12"  data-animate="fadeIn" data-animate-delay="0">
                      <?php $story2 = get_field('story2');?>
           <?php if (isset($story2) && !empty($story2)): ?>
                   <h2 class="secondary-h2"><?php echo $story2; ?></h2>
                   <?php endif;?>
                       <div class="blockquote m-t-40">
                            <?php $small_desc2 = get_field('small_desc2');?>
           <?php if (isset($small_desc2) && !empty($small_desc2)): ?>
                   <h2 class="secondary-h2"><?php echo $small_desc2; ?></h2>
                   <?php endif;?>
                        </div>
                   </div>

                   <div class="col-lg-6 col-md-12 p-t-10" data-animate="fadeInUp" data-animate-delay="200">
                        <div class="ratio ratio-16x9 ">
                            <iframe src="<?php echo get_field('video_url2'); ?>" allowfullscreen></iframe>
                    </div>


                   </div>
               </div>
           </div>
       </section>
       <!-- END TWO COLUMN -->

        <div class="seperator m-t-0 m-b-0"><i class="fa fa-chevron-down"></i></div>

        <!-- TWO COLUMN -->
          <section>
              <div class="container p-t-20">
                  <div class="row">
                      <div class="col-lg-6 col-md-12"  data-animate="fadeIn" data-animate-delay="0">
                          <?php $story3 = get_field('story3');?>
           <?php if (isset($story3) && !empty($story3)): ?>
                   <h2 class="secondary-h2"><?php echo $story3; ?></h2>
                   <?php endif;?>

                      </div>

                      <div class="col-lg-6 col-md-12 p-t-10" data-animate="fadeInUp" data-animate-delay="200">
                           <div class="ratio ratio-16x9 ">
                               <iframe src="<?php echo get_field('video_url3'); ?>" allowfullscreen></iframe>
                           </div>

                           <div class="blockquote m-t-60">
                               <?php $small_desc3 = get_field('small_desc3');?>
           <?php if (isset($small_desc3) && !empty($small_desc3)): ?>
                   <h2 class="secondary-h2"><?php echo $small_desc3; ?></h2>
                   <?php endif;?>
                           </div>
                      </div>
                  </div>
              </div>
          </section>
         <!-- END TWO COLUMN -->

        <div class="seperator m-t-0 m-b-0"><i class="fa fa-chevron-down"></i></div>

            <!-- TWO COLUMN -->
            <section>
                <div class="container p-t-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-12"  data-animate="fadeIn" data-animate-delay="0">
                            <?php $story4 = get_field('story4');?>
           <?php if (isset($story4) && !empty($story4)): ?>
                   <h2 class="secondary-h2"><?php echo $story4; ?></h2>
                   <?php endif;?>
                        </div>

                        <div class="col-lg-6 col-md-12 p-t-10" data-animate="fadeInUp" data-animate-delay="200">
                             <div class="ratio ratio-16x9 ">
                                 <iframe src="<?php echo get_field('video_url4'); ?>" allowfullscreen></iframe>
                        </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- END TWO COLUMN -->



<!-- Boast -->
        <div class="background-grey p-t-110 p-b-20">
            <div class="container">
                <script async defer src="https://widgets.boast.io/current/components.js"></script>
                <div data-boast-component="boast-display-widget" data-widget-id="1ba78deb-46fb-4bf3-8836-96cfe03afaf8">
                </div>
                <a style="display:block;margin:4em 0;font-size:11px;color:#BABABA; " href="https://boast.io">Collect video testimonials with Boast</a>
            </div>
        </div>
        <!-- END Boast -->

        <!-- Testimonial Grid -->

<!--         <section class="background-grey">

            <div class="container">

                <div class="grid-layout grid-3-columns testimonial" data- data-item="grid-item">
                  <?php
$args = array('post_type' => 'testimonials', 'order' => 'DSC');
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
																																																				                    <div class="grid-item">
																																																				                        <div class="testimonial-item">

																																																				                            <a href="<?php echo get_field('testimonial_video_url'); ?>" data-lightbox="iframe"><img src="<?php echo get_field('testimonial_image'); ?>" alt=""></a>

																																																				                            <?php echo get_the_content(); ?>

																																																				                            <span class="testimonials-text"><?php the_title();?></span>

																																																				                            <span class="testimonials-business"><?php echo get_field('testimonial_desc'); ?></span>

																																																				                        </div>
																																																				                    </div>
																																																				                      <?php endwhile;?>
<?php endif;?>
                    <?php wp_reset_postdata();?>

                </div>
            </div>

        </section> -->

        <!-- end: Testimonial Grid -->
