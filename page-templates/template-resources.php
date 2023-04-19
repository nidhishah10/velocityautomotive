<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Resources Page Template
 *
 * Handles to show Resources Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Resources Page Content template.
	get_template_part('page-contents/content', 'resources');
endwhile; //end of while
get_footer();?>