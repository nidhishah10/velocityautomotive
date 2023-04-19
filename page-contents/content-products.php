    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Product Page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>

       <!-- Secondary Header Image -->

       <div id="slider" class="inspiro-slider dots-creative slider-secondary" data-height-xs="360">

           <!-- Slide 2 -->
           <?php $slider_img = get_field('slider_img');?>
            <?php if (isset($slider_img) && !empty($slider_img)): ?>
           <div class="slide kenburns" style="background-image:url('<?php echo $slider_img; ?>');">
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

        <section>

            <div class="container">

                <div class="heading-text heading-section text-center p-b-5" data-animate="fadeIn">
                    <?php $page_sub_title = get_field('page_sub_title');?>
            <?php if (isset($page_sub_title) && !empty($page_sub_title)): ?>
                    <h2 class="secondary-h2"><?php echo $page_sub_title; ?></h2>
                    <?php endif;?>

                    <?php $page_sub_desc = get_field('page_sub_desc');?>
            <?php if (isset($page_sub_desc) && !empty($page_sub_desc)): ?>
                    <p><?php echo $page_sub_desc; ?></p>
                    <?php endif;?>


                </div>

                <div class="row" data-animate="fadeInUp">
                    <?php
$args = array('post_type' => 'velocity', 'order' => 'ASC');
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
																									<div class="col-lg-4">

																									<div class="icon-box text-center effect border color">

																									<div><a href="window-stickers"><img class="icon-images" src="<?php echo get_field('velocity_icon'); ?>" alt=""></a></div>

																									<h3 class="icon-text-on-white"> <?php the_title();?></h3>

																									<p class="lead"><?php echo get_the_content(); ?></p>

																									<a href="<?php echo get_field('velocity_url'); ?>"><button type="button" class="btn btn-outline btn-dark"><?php echo get_field('button_name'); ?></button></a>

																									</div>

																									</div>
																									<?php endwhile;?>
<?php endif;?>
                    <?php wp_reset_postdata();?>

                </div>

            </div>

        </section>

        <!-- Section -->
        <?php $background_img = get_field('background_img');?>
            <?php if (isset($background_img) && !empty($background_img)): ?>
        <section class="halfscreen background-image" style="background-image:url(<?php echo $background_img; ?>); background-position:71% 22%;">
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
                            <p style="font-style: italic; font-size:110%;"><?php echo $short_desc; ?></p>
                            <?php endif;?>
                            <?php $button_url = get_field('button_url');?>
                            <?php $button = get_field('button');?>
            <?php if (isset($button) && !empty($button)): ?>
                            <a href="<?php echo $button_url; ?>" class="btn btn-light btn-outline btn-roundeded" data-lightbox="ajax"><?php echo $button; ?></a>
                            <?php endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </section>