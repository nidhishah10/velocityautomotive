<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Success Stories Page Template
 *
 * Handles to show success-stories Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Success Stories Page Content template.
	get_template_part('page-contents/content', 'success-stories');
endwhile; //end of while
get_footer();?>