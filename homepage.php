<?php /* Template Name: Homepage Template */ ?>
<?php
get_header(); 
        get_template_part('template-parts/slider');
    
        get_template_part('template-parts/home-about');
        get_template_part('template-parts/service-section');
        get_template_part('template-parts/project-section');
        get_template_part('template-parts/team-section');
        get_template_part('template-parts/testimonial-section');
        get_template_part('template-parts/blog-section');
        get_template_part('template-parts/sponsor-section');
    
get_footer(); ?>