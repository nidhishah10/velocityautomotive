    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Blog page Content
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since Velocity Automotive 1.0
 */
?>
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
<?php
$category = get_field('category_slug_name');
?>
<!-- <div id="primary" class="content-area"> -->
<main id="main" class="site-main" role="main">
<div class="grid-container" id="ajax-posts" data-category="<?php echo $category ?>">

                    <?php
//$paged = (get_query_var('page')) ? get_query_var('page') : 1;

$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'cat' => $category,
	'posts_per_page' => 10,

);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
																							<article class="grid-item" id="blog-posts">

																							<a href="<?php the_permalink();?>">
																							<?php the_post_thumbnail();?></a>


																							<header class="entry-header">
																							<h1 class="entry-title"><?php the_title();?></h1>
																							</header>
																							<div class="entry-content">
																							<p><?php $content = get_the_content();
	$content = wp_strip_all_tags($content);
	echo substr($content, 0, 250);?>...</p>
																							</div>
																							<a href="<?php the_permalink();?>" class="btn btn-primary">Read
																							More</a>
																							</article>
																																					<?php endwhile;?>
<?php endif;?>
                    <?php wp_reset_postdata();?>



</div>
<div class="load_more text-center">
                    <a href="javascript:void(0)" class="btn btn-circle btn-inverse btn-load-more" id="more_posts">Load More</a>
                </div>'
<!-- <div class="filter-reset">
                    <a href="javascript:void(0)" id="load-more-btn" data-paged="2" data-post="product" class="button btn-secondary">Load More</a>
                </div> --><!--
 -->    </main><!-- .site-main -->

<!-- </div> --><!-- .content-area -->
