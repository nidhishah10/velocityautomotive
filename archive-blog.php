<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since 1.0
 * @version 1.0
 */
/*
Template Name: Blog Archives
 */
get_header();?>


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
<div id="primary" class="content-area">
       <!-- Step 2: Then load imagesloaded. imagesloaded makes sure the images are not displayed until they are fully loaded -->
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

        <!-- Step 3: we load masonry -->
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <main id="main" class="site-main" role="main">
    	<div class="grid-container">

    <?php
$url = $_SERVER["REQUEST_URI"];
$isItBlog = strpos($url, 'blog');
$isItNews = strpos($url, 'news');
$isItVideo = strpos($url, 'video');

if (($isItNews !== false) && ($isItVideo !== false)) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'isItNews',
		'posts_per_page' => -1,
		'paged' => $paged,
	);
	$arr_posts = new WP_Query($args);

	if ($arr_posts->have_posts()):

		while ($arr_posts->have_posts()):
			$arr_posts->the_post();

			?>
																						<article class="grid-item">
																						<?php the_post_thumbnail();?>
																						<header class="entry-header">
																						    <h1 class="entry-title"><?php the_title();?></h1>
																						</header>
																						<div class="entry-content">
																						    <p><?php $content = get_the_content();

			$content = wp_strip_all_tags($content);

			echo substr($content, 0, 250);
			?></p>
																						    <a href="<?php the_permalink();?>" class="btn btn-primary">Read
																						        More</a>
																						</div>
																						</article>


																																																																																																																		<?php
	endwhile;
		wp_pagenavi(
			array(
				'query' => $arr_posts,
			)
		);
	endif;
} else {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'isItBlog',
		'posts_per_page' => -1,
		'paged' => $paged,
	);
	$arr_posts = new WP_Query($args);

	if ($arr_posts->have_posts()):

		while ($arr_posts->have_posts()):
			$arr_posts->the_post();

			?>
																						<article class="grid-item">
																						<?php the_post_thumbnail();?>
																						<header class="entry-header">
																						    <h1 class="entry-title"><?php the_title();?></h1>
																						</header>
																						<div class="entry-content">
																						    <p><?php $content = get_the_content();

			$content = wp_strip_all_tags($content);

			echo substr($content, 0, 250);
			?></p>
																						    <a href="<?php the_permalink();?>" class="btn btn-primary">Read
																						        More</a>
																						</div>
																						</article>


																																																																																																																		<?php
	endwhile;
		wp_pagenavi(
			array(
				'query' => $arr_posts,
			)
		);
	endif;
}?>


</div>
    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_sidebar();?>
<?php

get_footer();
