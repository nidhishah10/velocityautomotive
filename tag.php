<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage
 * @since 1.0
 * @version 1.0
 */
/*
Template Name: Tag
 */
get_header();?>
<div id="content" role="main">
    <div class="container">
        <div class="blog-post-container">
			<article class="grid-item" id="blog-posts">
				<div class="blog-post-image">
					<span class="post-category"><?php the_category(', ')?></span>
           					<a href="<?php the_permalink();?>"></a>
            <?php the_post_thumbnail();?>
        </div>
        <div class="blog-post-info">
            <header class="entry-header">
				<h1 class="entry-title"><?php the_title();?></h1>
				<div class="post-details">
					<div class="post-counts">
						<a><?php echo get_the_date('d M Y'); ?></a><?php comments_popup_link(' 0 Comments ', ' 1 Comments ', ' % Comments ');?>

						<div class="post-category"><i class="fa fa-tag"></i><?php the_category(', ')?></div>
					</div>
				</div>
				</header>
            <div class="entry-content">
				<p><?php $content = get_the_content();

$content = wp_strip_all_tags($content);

echo substr($content, 0, 250);
?></p>
				</div>
            <a href="<?php the_permalink();?>" class="btn btn-primary">Read
				More</a>
        </div>


			</article>
		      </div>
    </div>
</div>

<?php

get_footer();
