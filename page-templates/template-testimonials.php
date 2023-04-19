<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Testimonial Page Template
 *
 * Handles to show Testimonial Page Content
 * @since Velocity Automotive
 **/

// Loop Start Here
while (have_posts()): the_post();
	// Include the Testimonial Page Content template.
	get_template_part('page-contents/content', 'testimonials');
endwhile; //end of while
