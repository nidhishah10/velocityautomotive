<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: VelocityEngage Page Template
 *
 * Handles to show VelocityEngage Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the VelocityEngage Page Content template.
	get_template_part('page-contents/content', 'velocityengage');
endwhile; //end of while
get_footer();?>