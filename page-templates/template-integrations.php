<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Integrations Page Template
 *
 * Handles to show integrations Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Integrations Page Content template.
	get_template_part('page-contents/content', 'integrations');
endwhile; //end of while
get_footer();?>