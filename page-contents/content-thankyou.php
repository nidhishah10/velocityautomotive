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



       <!-- Page title

       <section class="no-padding">

           <!-- Google Map

           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.640003841468!2d-86.41637148487672!3d30.389578781758107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88915caa2d212115%3A0xd639927ce80baabc!2s4481+Legendary+Dr%2C+Destin%2C+FL+32541!5e0!3m2!1sen!2sus!4v1562624398218!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

           <!-- end: Google Map

       </section>

       end: Page title -->





       <!-- Contact -->

        <section class="p-t-100 p-b-100 ">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-lg-12">
                                <?php $contact_title = get_field('contact_title');?>
                        <?php if (isset($contact_title) && !empty($contact_title)): ?>
                                <h2 class="m-b-10"><?php echo $contact_title; ?></h2>
                                <?php endif;?>
                                <?php $address = get_field('address');?>
                        <?php if (isset($address) && !empty($address)): ?>
                                <p class="lead"><?php echo $address; ?></p>
                                <?php endif;?>
                            </div>

                            <div class="col-lg-12 m-b-30">
                                <?php $address_in_detail = get_field('address_in_detail');?>
                        <?php if (isset($address_in_detail) && !empty($address_in_detail)): ?>
                                <?php echo $address_in_detail; ?>
                                <?php endif;?>
                            </div>



                            <div class="col-lg-12 m-b-30">
                                <?php $social_title = get_field('social_title');?>
                        <?php if (isset($social_title) && !empty($social_title)): ?>
                                <h4><?php echo $social_title; ?></h4>
                                <?php endif;?>
                                <div class="social-icons social-icons-light social-icons-colored-hover">

                                                                        <ul>
                        <?php $social_ions = get_field('social_ions');?>
                        <?php foreach ($social_ions as $key => $social_ions) {?>
                               <li class="<?php echo $social_ions['class_name']; ?>"><a target="_blank" href="<?php echo $social_ions['icons_url']; ?>"><i class="<?php echo $social_ions['icons_class']; ?>"></i></a></li>
                               <?php }?>
                           </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="col-lg-12">
                            <?php $thank_you_title = get_field('thank_you_title');?>
                        <?php if (isset($thank_you_title) && !empty($thank_you_title)): ?>
                            <h2 class="text-red"><?php echo $thank_you_title; ?></h2>
                            <?php endif;?>
                        </div>



                    </div>

                </div>

            </div>

        </section>

        <!-- end: Contact -->