<?php
/**
 * Template Name: blog
 */
get_header();


get_template_part('template-parts/global/navbar');
get_template_part('template-parts/blog-content-page/blog-content-page-header');
get_template_part('template-parts/blog-content-page/blog-image-and-content');
get_template_part('template-parts/blog-content-page/blog-content-page-related-news');
get_template_part('template-parts/global/most-read');
get_template_part('template-parts/global/help-form');



get_footer();
