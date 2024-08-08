<?php
global $post;

$post_type = get_post_type($post);

if ($post_type == 'submission') {
	include(get_template_directory() . '/page-templates/submission-template.php');
}
if (in_category('3')) {
	include(get_template_directory() . '/page-templates/journal-detail-template.php');
}
