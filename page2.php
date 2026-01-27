<?php
get_header();

global $post;

if ($post->post_parent == 0) {
    get_template_part('template-parts/page', 'parent');
} else {
    get_template_part('template-parts/page', 'child');
}

get_footer();
