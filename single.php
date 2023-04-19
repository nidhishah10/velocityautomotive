<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since 1.0
 * @version 1.0
 */
get_header();?>

<div id="primary" class="content-area">
<!-- Step 2: Then load imagesloaded. imagesloaded makes sure the images are not displayed until they are fully loaded -->
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<!-- Step 3: we load masonry -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<main id="main" class="site-main" role="main">
<div class="main-content">
<div class="container">
<div class="main-row">
	<div id="primary">
			<div class="grid-container" id="sidebar" role="complementery">

				<article class="grid-item">
					<?php if (in_category('video')): ?>
													 <a href="<?php echo get_field('video_url'); ?>">
													<?php the_post_thumbnail();?></a>
													<?php else: ?>
					<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail();?></a>
			<?php endif?>
					<header class="entry-header">
					<h1 class="entry-title"><?php the_title();?></h1>
					<div class="post-details">
					<div class="post-counts">
						<a><?php echo get_the_date('d M Y'); ?></a><?php comments_popup_link(' 0 Comments ', ' 1 Comments ', ' % Comments ');?>
						<?php the_category(', ')?><i class="fa fa-tag"></i>

					</div>
						<div class="post-social">
						<a class="fab fa-facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_title();?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php the_title();?>"></a>


<a class="fab fa-twitter" onclick="window.open('http://twitter.com/share?url=<?php the_title();?>&amp;text=[Hushed%20Stories%20Part%202]%20:%20Hurt%20Men,%20Hurt%20Women.','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php the_title();?>&amp;text=[Hushed%20Stories%20Part%202]%20:%20Hurt%20Men,%20Hurt%20Women."></a>


<a class="fab fa-linkedin" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_title();?>','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;" href="http://www.smartredirect.de/redir/clickGate.php?m=1&amp;p=4WT4TpvS3c&amp;r=koala-apps.io&amp;s=SUBID&amp;t=SJ9wTdJO&amp;u=3YoxiiCO&amp;url=http%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.nashihapervin.com%2Fhushed-stories-part-2-hurt-men-hurt-women%2F"></a>



					</div>

</div>
				</header>
				<div class="entry-content">
					<p><?php echo get_the_content(); ?></p>
				</div>
				</article>
			</div>
		</div>
		 <?php get_sidebar();?>
	</div>

		</div>
    </div>


    </main><!-- .site-main -->
</div>


<?php

get_footer();
