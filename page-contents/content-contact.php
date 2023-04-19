           <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Contact Page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>


        <div id="slider" class="inspiro-slider dots-creative slider-secondary" data-height-xs="360">

            <!-- Slide 2 -->
            <?php $banner_img = get_field('banner_img');?>
           <?php if (isset($banner_img) && !empty($banner_img)): ?>
            <div class="slide contact-us" style="background-image:url('<?php echo $banner_img; ?>'); ">
              <?php endif;?>
                <div class="container">

                    <div class="slide-captions text-left">
<?php $banner_title = get_field('banner_title');?>
           <?php if (isset($banner_title) && !empty($banner_title)): ?>
                        <h1 class="slider-h1-secondary"><?php echo $banner_title; ?></h1>
                        <?php endif;?>
                    </div>

                </div>

            </div>

            <!-- end: Slide 2 -->

        </div>


       <!-- Contact -->

        <section class="p-t-100 p-b-100 ">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-lg-12">
                                <?php $page_title = get_field('page_title');?>
           <?php if (isset($page_title) && !empty($page_title)): ?>
                                <h2 class="m-b-10"><?php echo $page_title; ?></h2>
                                <?php endif;?>

                                <?php $address = get_field('address');?>
           <?php if (isset($address) && !empty($address)): ?>
                                <p class="lead"><?php echo $address; ?></p>
                                <?php endif;?>
                            </div>

                            <div class="col-lg-12 m-b-30">
                                <?php $headquarters_address = get_field('headquarters_address');?>
           <?php if (isset($headquarters_address) && !empty($headquarters_address)): ?>
           <?php echo $headquarters_address; ?>
           <?php endif;?>

                            </div>



                            <div class="col-lg-12 m-b-30">
                                <?php $social_title = get_field('social_title');?>
           <?php if (isset($social_title) && !empty($social_title)): ?>
                                <h4><?php echo $social_title; ?></h4>
                                <?php endif;?>

                                <div class="social-icons social-icons-light social-icons-colored-hover">

                                    <ul>
                        <?php $social_icon_box = get_field('social_icon_box');?>
                        <?php foreach ($social_icon_box as $key => $social_icon_box) {?>
                               <li class="<?php echo $social_icon_box['class_name']; ?>"><a target="_blank" href="<?php echo $social_icon_box['icon_url']; ?>"><i class="<?php echo $social_icon_box['icon_class']; ?>"></i></a></li>
                               <?php }?>
                           </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php if (get_field('contact_us_form_code')): ?>
                        <div class="col-lg-6">
                            <?php echo get_field('contact_us_form_code'); ?>
                        </div>
                    <?php endif ?>

                </div>

            </div>

        </section>

        <!-- end: Contact -->