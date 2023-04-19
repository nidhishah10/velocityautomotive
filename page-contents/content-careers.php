
        <!-- Secondary Header Image -->

        <div id="slider" class="inspiro-slider dots-creative slider-secondary" data-height-xs="360">

            <!-- Slide 2 -->
            <?php $career_banner_img = get_field('career_banner_img');?>
            <?php if (isset($career_banner_img) && !empty($career_banner_img)): ?>
            <div class="slide career-heading" style="background-image:url('<?php echo $career_banner_img; ?>'); ">
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




        <section class="p-t-40 background-grey">
            <div class="container">
                <div class="career-form-section">
                    <div class="heading-text heading-section text-center">
                        <h2>Our Mission is Simple.To Be Exceptional.</h2>
                        <?php the_content(); ?>
                    </div>

                    <div class="apply-form">
                        <?php $apply_now_btn = get_field('apply_now_btn');?>
                        <?php if (isset($apply_now_btn) && !empty($apply_now_btn)): ?>
                        <?php echo do_shortcode($apply_now_btn); ?>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </section>