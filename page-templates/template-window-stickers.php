<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Window Sticker Page Template
 *
 * Handles to show window stickers Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Window Sticker Page Content template.
	get_template_part('page-contents/content', 'window-stickers');
endwhile; //end of while
get_footer();?>