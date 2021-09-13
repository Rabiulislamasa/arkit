<?php /* Template Name: About Us Template */ ?>

<?php get_header();?>	
<?php if(get_theme_mod('about_banner_setting', true ) == true):?>
		<section class="page-header padding" style="background-image:url('<?php echo esc_url(get_theme_mod('abouts_banner_img'))?>')">
		    <div class="container" id="about_banner_setting">
		        <div class="page-content text-center">
					<h2 id="abouts_banner_title"><?php echo get_theme_mod('abouts_banner_title')?></h2>
                    <p id="abouts_banner_desc"><?php echo get_theme_mod('abouts_banner_desc')?></p>
		        </div>
		    </div>
		</section><!--/.page-header-->
<?php endif;?>
	<?php if(get_theme_mod('about_aboutus_setting', true ) == true):?>
		<div class='container' id="about_aboutus_setting"></div>
        <?php get_template_part('template-parts/common/home-about');?>
	<?php endif;?>
	<?php if(get_theme_mod('about_service_setting', true ) == true):?>
		<div class='container' id="about_service_setting"></div>
        <?php get_template_part('template-parts/common/service-section');?>
	<?php endif;?>
	<?php if(get_theme_mod('about_team_setting', true ) == true):?>
		<div class='container' id="about_team_setting"></div>
        <?php get_template_part('template-parts/common/team-section');?>
	<?php endif;?>
	<?php if(get_theme_mod('about_testimonial_setting', true ) == true):?>
		<div class='container' id="about_testimonial_setting"></div>
        <?php get_template_part('template-parts/common/testimonial-section');?>
	<?php endif;?>
	<?php if(get_theme_mod('about_sponsor_setting', true ) == true):?>
		<div class='container' id="about_sponsor_setting"></div>
        <?php get_template_part('template-parts/common/sponsor-section');?>
	<?php endif;?>
<?php get_footer();?>