<?php /* Template Name: Service Template */ ?>
<?php get_header();?>
    <?php if(get_theme_mod('service_service_setting', true ) == true):?>
		<div class='container' id="service_service_setting"></div>
        <?php get_template_part('template-parts/common/service-section');?>
	<?php endif;?>
    <?php if(get_theme_mod('service_sponsor_setting', true ) == true):?>
		<div class='container' id="service_sponsor_setting"></div>
        <?php get_template_part('template-parts/common/sponsor-section');?>
	<?php endif;?>
<?php get_footer();?>