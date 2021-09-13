<?php /* Template Name: Contact Page Template */ ?>
<?php get_header();?>	

<?php if(get_theme_mod('contact_map_setting', true ) == true):?>	
		<div id="google-map">
            <div class="container" id="contact_map_setting"></div>
            <iframe src="<?php echo get_theme_mod('contact_map_link');?>" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
        </div><!-- /#google-map -->
<?php endif; ?>
		<section class="contact-section bg-grey padding">
            <div class="dots"></div>
		    <div class="container">
		        <div class="contact-wrap d-flex align-items-center row">
                    <div class="col-md-6 padding-15">
		                <div class="contact-info">
		                    <h2 id="contact_details_title"><?php echo esc_html(get_theme_mod('contact_details_title') )?></h2>
		                    <p id="contact_details_desc"><?php echo esc_html(get_theme_mod('contact_details_desc') )?></p>
		                    <h3 id="contact_details_adress"><?php echo esc_html(get_theme_mod('contact_details_adress') )?></h3>
		                    <div class="">
                                <h4><span><?php _e('Email:','arkit') ?></span><span id="contact_details_mail"><?php echo get_theme_mod('contact_details_mail') ?></span><br> 
                            </div>
                            <div class="">
                                <span><?php _e('Phone:','arkit') ?></span><span id="contact_details_phn"> <?php echo get_theme_mod('contact_details_phn'); ?></span><br>
                            </div>
                            
		                </div>
		            </div>
		            <div class="col-md-6 padding-15">
		                <div class="contact-form">
                            <form action="" method="post" id="ajax_form" class="form-horizontal">
                                <?php echo do_shortcode('[contact-form-7 id="222" title="Contact form 1"]') ?>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
		            </div>
		            
		        </div>
		    </div>
		</section><!--/.contact-section-->
<?php get_footer();?>