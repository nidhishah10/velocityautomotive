                         <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Resoruces Page Content
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

        <!-- Content -->

        <section id="page-content p-t-100 ">

            <div class="container ">

                <!-- <div class="heading-text heading-section ">

                    <h2 class="secondary-h2">Velocity Automotive Resources</h2>

                    <span>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus. </span>

                </div> -->

                <div class="row team-members">
                    <?php $team_members_box = get_field('team_members_box');?>
                        <?php foreach ($team_members_box as $key => $team_members_box) {?>
                    <div class="col-lg-4">

                        <div class="team-member">

                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">

                                <div class="portfolio-item-wrap">

                                    <div class="portfolio-image">

                                        <a href="<?php echo $team_members_box['portfolio_url']; ?>"><img src="<?php echo $team_members_box['portfolio_img']; ?>" alt=""></a>

                                    </div>

                                    <div class="portfolio-description">

                                        <a class="btn btn-light btn-sm" href="<?php echo $team_members_box['portfolio_url']; ?>"><?php echo $team_members_box['portfolio_desc']; ?></a>

                                    </div>

                                </div>

                            </div>

                            <div class="team-desc">

                                <h2><?php echo $team_members_box['team_desc_title']; ?></h2>

                                <p><?php echo $team_members_box['team_desc']; ?></p>

                                <a href="<?php echo $team_members_box['portfolio_url1']; ?>"><button type="button" class="btn btn-primary"><?php echo $team_members_box['team_desc_btn']; ?></button></a>

                            </div>

                        </div>

                    </div>
                    <?php }?>

                   <!-- <div class="col-lg-3">

                        <div class="team-member">

                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">

                                <div class="portfolio-item-wrap">

                                    <div class="portfolio-image">

                                        <a href="faqs"><img src="images/resources-faqs.jpg" alt=""></a>

                                    </div>

                                    <div class="portfolio-description">

                                        <a class="btn btn-light btn-sm" href="faqs">View FAQs</a>

                                    </div>

                                </div>

                            </div>

                            <div class="team-desc">

                                <h3>FAQs</h3>

                                <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>

                                <a href="#"><button type="button" class="btn btn-primary">View FAQs</button></a>

                            </div>

                        </div>

                    </div>-->

                </div>

            </div>

        </section>

        <!-- end: Content -->

        <!-- Section -->
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

                        <div class="heading-text text-light col-lg-8">
                            <?php $title = get_field('title');?>
           <?php if (isset($title) && !empty($title)): ?>
                            <h2 class="fw-600 padding-mobile"><span><?php echo $title; ?></span></h2>
                            <?php endif;?>
                            <?php $desc = get_field('desc');?>
           <?php if (isset($desc) && !empty($desc)): ?>
                            <p class="p-b-10 m-b-0 tighten-lineheight fw-500"><?php echo $desc; ?></p>
                            <?php endif;?>
                            <?php $short_desc = get_field('short_desc');?>
           <?php if (isset($short_desc) && !empty($short_desc)): ?>
                            <p style="font-style: italic; font-size:110%;"> <?php echo $short_desc; ?></p>
                            <?php endif;?>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: Section -->