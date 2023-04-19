<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Products Page Template
 *
 * Handles to show Products Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Products Page Content template.
	get_template_part('page-contents/content', 'products');
endwhile; //end of while
get_footer();?>