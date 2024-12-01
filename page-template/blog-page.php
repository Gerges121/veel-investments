<?php
/**
 * Template Name:  blogs page
 */
get_header();

get_template_part('template-parts/global/navbar');
get_template_part('template-parts/blog-page/blog-page-header');
get_template_part('template-parts/blog-page/blog-page-first-section');
get_template_part('template-parts/blog-page/first-related-section');
get_template_part('template-parts/blog-page/all-blogs');
get_template_part('template-parts/global/most-read');


get_footer();
