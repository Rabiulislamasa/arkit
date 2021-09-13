<?php /* Template Name: Team Page Template */ ?>
<?php get_header();?>
<?php if(get_theme_mod('team_team_setting', true ) == true):?>
		<div class='container' id="team_team_setting"></div>
        <?php get_template_part('template-parts/common/team-section');?>
	<?php endif;?>
    <?php if(get_theme_mod('team_sponsor_setting', true ) == true):?>
		<div class='container' id="team_sponsor_setting"></div>
        <?php get_template_part('template-parts/common/sponsor-section');?>
	<?php endif;?>
<?php get_footer();?>