<?php
// Ensure you have access to the global post object
global $post;

// Get the post type of the current post
$post_type = get_post_type($post);

// Check if the post type is 'submission'
if ($post_type == 'submission') {
	// Include the custom template for 'submission'
	include(get_template_directory() . '/page-templates/submission-template.php');
} else {
	// Include the default single post template
	include(get_template_directory() . '/page-templates/single-default.php');
}
