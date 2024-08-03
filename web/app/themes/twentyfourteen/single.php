<?php
global $post;

$post_type = get_post_type($post);

if ($post_type == 'submission') {
	include(get_template_directory() . '/page-templates/submission-template.php');
} else if (in_category('1')) { // THIS IS ID EXAMPLE FOR CATEGORY ID
	include(get_template_directory() . '/page-templates/single-default.php');
} else {
	include(get_template_directory() . '/page-templates/single-default.php');
}
