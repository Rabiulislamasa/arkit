<?php /* Template Name: Testimonial Page Template */ ?>
<?php get_header();?>
    <?php if(get_theme_mod('testimonial_testimonial_setting', true ) == true):?>
		<div class='container' id="testimonial_testimonial_setting"></div>
        <?php get_template_part('template-parts/common/testimonial-section');?>
	<?php endif;?>
    <?php if(get_theme_mod('testimonial_sponsor_setting', true ) == true):?>
		<div class='container' id="testimonial_sponsor_setting"></div>
        <?php get_template_part('template-parts/common/sponsor-section');?>
	<?php endif;?>
<?php get_footer();?>