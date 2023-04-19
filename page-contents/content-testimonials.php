<div class="portfolio-ajax-page">

    <div class="project-description m-t-20">
           <?php $testimonial_title = get_field('testimonial_title');?>
           <?php if (isset($testimonial_title) && !empty($testimonial_title)): ?>

        <h2><?php echo $testimonial_title; ?></h2>
            <?php endif;?>
            <?php $designation = get_field('designation');?>
           <?php if (isset($designation) && !empty($designation)): ?>
        <p class="heading-text-p"><?php echo $designation; ?></p>
            <?php endif;?>



        <div class="container">

            <div class="row">

                <div class="col-lg-4">
           <?php $testimonial_img = get_field('testimonial_img');?>
           <?php if (isset($testimonial_img) && !empty($testimonial_img)): ?>

                   <img class="img-fluid m-b-40" src="<?php echo $testimonial_img; ?>" />
            <?php endif;?>

                </div>

                <div class="col-lg-7 offset-lg-1 offset-md-0 offset-sm-0">


                    <?php echo get_the_content(); ?>


                </div>

            </div>

        </div>

        <hr class="space">

    </div>
    <body>
        <noscript>
            <img src=https://ws.zoominfo.com/pixel/627c14cc3ef5dc0012eea313 width="1" height="1" style="display: none;" alt="websights"/>
        </noscript>