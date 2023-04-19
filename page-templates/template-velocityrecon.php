<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Velocityrecon Page Template
 *
 * Handles to show Velocityrecon Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Velocityrecon Page Content template.
	get_template_part('page-contents/content', 'velocityrecon');
endwhile; //end of while
get_footer();?>