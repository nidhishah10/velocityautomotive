    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Home page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>
        <!-- Slider -->

        <div id="slider" class="inspiro-slider slider-halfscreen dots-creative">
             <?php $slider_box = get_field('slider_box');?>
            <?php foreach ($slider_box as $key => $slider_box) {?>



            <!-- Slide 1 -->

            <div class="slide kenburns" data-bg-image="<?php echo $slider_box['slider_image']; ?>">

                <div class="container">

                    <div class="slide-captions text-start">

                        <?php echo $slider_box['slider_captions']; ?>

                    </div>

                </div>

            </div>

            <!-- end: Slide 1 -->

            <?php }?>





        </div>

        <!--end: Slider -->



        <!-- Red Boxes -->

        <section class="no-padding equalize" data-equalize-item=".text-box">

            <div class="row col-no-margin">

                <!--Box 1-->
                <?php $red_boxes = get_field('red_boxes');?>
            <?php foreach ($red_boxes as $key => $red_boxes) {?>
                <div class="col-lg-3 four-main-boxes">

                    <div class="text-box">

                        <a href="<?php echo $red_boxes['redirect_url']; ?>">

                            <img class="icon-images" src="<?php echo $red_boxes['icon_images']; ?>" alt="">

                            <h3><?php echo $red_boxes['box_title']; ?></h3>

                            <p><?php echo $red_boxes['box_desc']; ?></p>

                        </a>

                    </div>

                </div>
                <?php }?>
                <!--End: Box 1-->


            </div>

        </section>

        <!-- end: Red Boxes -->



        <!-- TWO COLUMN -->

        <section>

            <div class="container p-t-20">

                <div class="heading-text heading-section">
                    <?php $title = get_field('title');?>
                        <?php if (isset($title) && !empty($title)): ?>
                         <h2><?php echo $title; ?></h2>
                        <?php endif;?>


                </div>

                <div class="row p-t-10">

                    <?php $content_box = get_field('content_box');?>
            <?php foreach ($content_box as $key => $content_box) {?>

                    <div class="col-lg-6 col-md-12"  data-animate="fadeInUp" data-animate-delay="0">

                        <h4><?php echo $content_box['content_title']; ?></h4>

                        <p><?php echo $content_box['content_desc']; ?>

                        </p>

                    </div>
                     <?php }?>

                </div>

            </div>

        </section>

        <!-- END TWO COLUMN -->



        <!-- RECON TO RETAIL -->

        <section class="p-b-40 background-grey">

            <div class="container">

                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                    <?php $retail_title = get_field('retail_title');?>
                    <?php if (isset($retail_title) && !empty($retail_title)): ?>
                    <h2><?php echo $retail_title; ?></h2>
                <?php endif;?>
                </div>

                <div class="row" data-animate="fadeInUp">
                    <?php $retail_image = get_field('retail_image');?>
                    <?php $retail_image_mob = get_field('retail_image_mob');?>
                    <?php if (isset($retail_image) && !empty($retail_image)): ?>
                    <div class="col-lg-12"> <img id="img-mobile-full" class="img-fluid" src="<?php echo $retail_image; ?>" alt="Velocity Info Graphic"><img id="img-mobile-small" class="img-fluid" src="<?php echo $retail_image_mob; ?>" alt="Velocity Info Graphic"> </div>
                    <?php endif;?>

                </div>

            </div>

        </section>

        <!-- end: RECON TO RETAIL -->



        <!-- TESTIMONIALS TITLE -->

        <section class="p-b-5">

            <div class="container p-t-10">

                <div class="heading-text heading-section" data-animate="fadeIn">
                    <?php $testimonial_title = get_field('testimonial_title');?>
                    <?php if (isset($testimonial_title) && !empty($testimonial_title)): ?>
                    <h2><?php echo $testimonial_title; ?></h2>
                    <?php endif;?>

                    <?php $testimonial_desc = get_field('testimonial_desc');?>
                    <?php if (isset($testimonial_desc) && !empty($testimonial_desc)): ?>
                    <span class="lead"><?php echo $testimonial_desc; ?></span>
                    <?php endif;?>

                </div>

            </div>

        </section>

        <!-- END TESTIMONIALS TITLE -->
<script async defer src="https://widgets.boast.io/current/components.js"></script> <div data-boast-component="boast-display-widget" data-widget-id="7dc3236c-0f98-458b-a070-ffffa5550fa2"></div> <a style="display:block;margin:4em 0;font-size:11px;color:#BABABA;" href="https://boast.io">Collect online reviews with Boast</a>


        <!-- Testimonial Carousel -->

  <!--       <section class="p-t-5 ">

            <div class="container-fluid p-b-50"  data-animate="fadeIn">



                <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="4" data-items-sm="2" data-items-xxs="1" data-equalize-item=".testimonial-item">


                    <?php
$args = array('post_type' => 'testimonials', 'order' => 'DSC');
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
			                            <div class="testimonial-item">

			                            <a href="<?php echo get_field('testimonial_video_url'); ?>" data-lightbox="iframe"><img src="<?php echo get_field('testimonial_image'); ?>" alt=""></a>

			                            <?php echo get_the_content(); ?>

			                            <span class="testimonials-text"><?php the_title();?></span>

			                            <span class="testimonials-business"><?php echo get_field('testimonial_desc'); ?></span>

			                            </div>
			                            <?php endwhile;?>
<?php endif;?>
                    <?php wp_reset_postdata();?>


                </div>



            </div>

        </section> -->

        <!-- end: Testimonial Carousel -->



        <!-- Image Testimonial Section -->
        <?php $testimonial_background_img = get_field('testimonial_background_img');?>
                    <?php if (isset($testimonial_background_img) && !empty($testimonial_background_img)): ?>
        <section class="halfscreen background-image" style="background-image:url(<?php echo $testimonial_background_img; ?>); background-position:71% 22%;">
             <?php endif;?>

            <div class="bg-overlay"></div>

            <div class="shape-divider" data-style="15"></div>

            <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true"></div>

            <div class="container">

                <div class="container-fullscreen">

                    <div class="text-middle">

                        <?php $testimonial_content = get_field('testimonial_content');?>
                    <?php if (isset($testimonial_content) && !empty($testimonial_content)): ?>
                    <?php echo $testimonial_content; ?>
                    <?php endif;?>
                    </div>

                </div>

            </div>

        </section>

        <!-- end: Image Testimonial Section -->



        <!-- CLIENTS -->

        <section class="p-t-20 p-b-130">

            <div class="container">

                <div class="heading-text heading-section text-center">
                    <?php $clients_title = get_field('clients_title');?>
                    <?php if (isset($clients_title) && !empty($clients_title)): ?>
                    <h2> <?php echo $clients_title; ?></h2>
                    <?php endif;?>

                    <?php $client_desc = get_field('client_desc');?>
                    <?php if (isset($client_desc) && !empty($client_desc)): ?>
                    <span class="lead"> <?php echo $client_desc; ?></span>
                    <?php endif;?>
                </div>

                <div class="carousel client-logos" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
                    <?php $clients_image_gallery = get_field('clients_image_gallery');?>
            <?php foreach ($clients_image_gallery as $key => $clients_image_gallery) {?>

                    <div>

                        <img alt="" src="<?php echo $clients_image_gallery['client_img']; ?>">

                    </div>
                     <?php }?>


                </div>

            </div>

        </section>

        <!-- end: CLIENTS -->



        <!-- Contact

        <section class="p-t-100 p-b-100 background-grey ">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-lg-12">

                                <h2 class="m-b-10">Get in Touch with Us</h2>

                                <p class="lead">Our Headquarters are in Destin, Florida </p>

                            </div>

                            <div class="col-lg-12 m-b-30">

                                <address>

                                     <strong>Headquarters:</strong><br>

                                     4481 Legendary Drive<br>

                                     Suite 200<br>

                                     Destin, FL 32541<br>

                                 </address>

                                <strong>Sales:</strong> <a style="text-decoration:none; color:#3F4444;" href="tel:850.669.5025">850.669.5025</a>

                                <br>

                                <strong>Support:</strong> <a style="text-decoration:none; color:#3F4444;" href="tel:850.616.6298">850.616.6298</a>

                                <br>

                                <strong>Email:</strong> <a style="text-decoration:none; color:#3F4444;" href="mailto:info@velocityautomotive.com">info@velocityautomotive.com</a>

                            </div>



                            <div class="col-lg-12 m-b-30">

                                <h4>We are social</h4>

                                <div class="social-icons social-icons-light social-icons-colored-hover">

                                    <ul>

                                        <li class="social-facebook"><a target="_blank" href="https://www.facebook.com/velocityautomotivesolutions"><i class="fab fa-facebook-f"></i></a></li>

                                        <li class="social-twitter"><a target="_blank" href="https://twitter.com/vas_software"><i class="fab fa-twitter"></i></a></li>

                                        <li class="social-youtube"><a target="_blank" href="https://www.youtube.com/channel/UCmR9nFHKD3onWIadMGIzoag"><i class="fab fa-youtube"></i></a></li>

                                        <li class="social-linkedin"><a target="_blank" href="https://www.linkedin.com/company/vas-velocityautomotivesolutions"><i class="fab fa-linkedin"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">

                            <div class="row">

                                <div class="form-group col-md-6">

                                    <label for="name">Name</label>

                                    <input type="text" aria-required="true" required name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="email">Email</label>

                                    <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="message">Message</label>

                                <textarea type="text" required name="widget-contact-form-message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>

                            </div>

                            <div class="form-group">

                                <button class="btn btn-light" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>

                            </div>

                        </form>



                    </div>

                </div>

            </div>

        </section>

        end: Contact -->



