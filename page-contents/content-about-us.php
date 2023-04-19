 <!-- Secondary Header Image -->

       <div id="slider" class="inspiro-slider dots-creative slider-secondary" data-height-xs="360">

           <!-- Slide 2 -->
           <?php $background_img = get_field('background_img');?>
                    <?php if (isset($background_img) && !empty($background_img)): ?>

           <div class="slide kenburns" style="background-image:url('<?php echo $background_img; ?>">
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

                <div class="row">

                    <div class="col-lg-3">

                        <div class="heading-text heading-section">
                            <?php $content_title = get_field('content_title');?>
                    <?php if (isset($content_title) && !empty($content_title)): ?>
                            <h2 class="secondary-h2"><?php echo $content_title; ?></h2>

                            <?php endif;?>

                        </div>

                    </div>

                    <div class="col-lg-9">

                        <div class="row heading-text-p">
                    <?php $content1 = get_field('content1');?>
                    <?php if (isset($content1) && !empty($content1)): ?>
                            <div class="col-lg-6"><?php echo $content1; ?></div>
                             <?php endif;?>


                             <?php $content2 = get_field('content2');?>
                    <?php if (isset($content2) && !empty($content2)): ?>
                            <div class="col-lg-6"><?php echo $content2; ?></div>
                             <?php endif;?>



                        </div>

                    </div>



                </div>

            </div>

        </section>



        <section class="background-grey p-b-50">

            <div class="container">

                <div class="heading-text heading-section text-center">
                    <?php $leadership_title = get_field('leadership_title');?>
                    <?php if (isset($leadership_title) && !empty($leadership_title)): ?>
                    <h2><?php echo $leadership_title; ?></h2>
                    <?php endif;?>
                </div>

                <div class="row team-members team-members-shadow m-b-40">
                    <?php
$args = array('post_type' => 'teams', 'order' => 'ASC');
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
																		<div class="col-lg-4">

																		<div class="team-member">

																		<div class="team-image">

																		<div class="grid-item">

																		<div class="grid-item-wrap">

																		<div class="grid-image"> <img alt="Image Lightbox" src="<?php echo get_field('member_img'); ?>" />

																		</div>

																		<div class="grid-description">

																		<a href="<?php echo the_permalink(); ?>" data-lightbox="ajax"><i class="fas fa-external-link-square-alt"></i></a>

																		</div>

																		</div>

																		</div>

																		</div>

																		<div class="team-desc">

																		<h3><?php the_title();?></h3>

																		<span><?php echo get_field('designation'); ?></span>

																		<p><?php $content = get_the_content();
	echo substr($content, 0, 150);
	?></p>

																		<div class="align-center">

																		<a href="<?php echo the_permalink(); ?>" data-lightbox="ajax"><button type="button" class="btn btn-primary btn-xs"><?php echo get_field('read_more_btn'); ?></button></a>

																		</div>

																		</div>

																		</div>

																		</div>
																		<?php endwhile;?>
<?php endif;?>
                    <?php wp_reset_postdata();?>

                </div>

            </div>

        </section>



        <!-- PORTFOLIO -->

        <section class="p-b-70">

            <div class="container p-t-10">

                <div class="heading-text heading-section" data-animate="fadeIn">
                    <?php $customer_title = get_field('customer_title');?>
                    <?php if (isset($customer_title) && !empty($customer_title)): ?>
                    <h2><?php echo $customer_title; ?></h2>
                    <?php endif;?>

                    <?php $customer_info = get_field('customer_info');?>
                    <?php if (isset($customer_info) && !empty($customer_info)): ?>
                    <p class="lead fw-400"><?php echo $customer_info; ?></p>
                    <?php endif;?>

                </div>

            </div>

        </section>



        <section class="box-fancy section-fullwidth text-light p-b-0 p-t-0">

            <div class="row">

                <div class="row">
                <?php $customer_box = get_field('customer_box');?>
            <?php foreach ($customer_box as $key => $customer_box) {?>
                <div style="<?php echo $customer_box['background_color']; ?>" class="col-lg-4">

                    <img class="icon-images m-b-20" src="<?php echo $customer_box['customer_icon_img']; ?>" alt="">

                    <h3><?php echo $customer_box['customer_service_title']; ?></h3>

                    <p><?php echo $customer_box['customer_service_info']; ?> </p>

                </div>

                 <?php }?>

            </div>

            </div>

        </section>



        <!-- START AWARD SECTION -->

        <section >

            <div class="container">

                <div class="row">



                    <div class="col-lg-7 p-b-20" data-animate="fadeIn">
                        <?php $award_sec_title = get_field('award_sec_title');?>
                    <?php if (isset($award_sec_title) && !empty($award_sec_title)): ?>
                        <h2 class="secondary-h2"><?php echo $award_sec_title; ?></h2>
                        <?php endif;?>

                        <?php $award_sec_info = get_field('award_sec_info');?>
                    <?php if (isset($award_sec_info) && !empty($customer_title)): ?>
                        <p><?php echo $award_sec_info; ?></p>
                        <?php endif;?>

                        <?php $award_sec_detail = get_field('award_sec_detail');?>
                    <?php if (isset($award_sec_detail) && !empty($award_sec_detail)): ?>
                        <p class="p-b-10"><?php echo $award_sec_detail; ?></p>
                        <?php endif;?>

                        <?php $read_more_btn = get_field('read_more_btn');?>
                        <?php $btn_url = get_field('btn_url');?>
                    <?php if (isset($read_more_btn) && !empty($read_more_btn)): ?>
                        <a href="<?php echo $btn_url; ?>"><button type="button" class="btn btn-primary"><?php echo $read_more_btn; ?></button></a>
                        <?php endif;?>


                    </div>

                    <div class="col-lg-5 " data-animate="fadeInUp">
                        <?php $velocityrecon_img = get_field('velocityrecon_img');?>
                         <?php if (isset($velocityrecon_img) && !empty($velocityrecon_img)): ?>
                        <img class="img-fluid" src="<?php echo $velocityrecon_img; ?>" alt="VelocityRecon">
                        <?php endif;?>

                    </div>

                </div>

            </div>

        </section>

        <!-- end: -->