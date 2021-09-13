<?php get_header();?>
<?php if(get_theme_mod('single_banner_setting', true ) == true):?>
		<section class="page-header padding" style="background-image:url('<?php echo esc_url(get_theme_mod('single_banner_img'))?>')">
		    <div class="container" id="single_banner_setting">
		        <div class="page-content text-center">
					<h2 id="single_banner_title"><?php echo get_theme_mod('single_banner_title')?></h2>
                    <p id="single_banner_desc"><?php echo get_theme_mod('single_banner_desc')?></p>
		        </div>
		    </div>
		</section><!--/.page-header-->
<?php endif;?>
		
		<section class="project-single-section bg-grey padding">

            <div class="dots"></div>
            <?php
		if(have_posts()) :
		while(have_posts()):
			the_post();
		?>
		    <div class="container">
		        <div class="row project-single-wrap">
		            <div class="col-sm-6 padding-15">
		                <div id="project-single-carousel" class="project-single-carousel owl-carousel">
							<?php if(has_post_thumbnail()):?>
		                    <div class="single-carousel">
		                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="img">
		                    </div><?php endif;?>
		                    <?php
                                $project_dtls = get_post_meta($post->ID, 'my_project_option', true);
                                $project_imgs = $project_dtls['project-img-group'];
                                
                                if($project_imgs):
                                    foreach($project_imgs as $project_img):
                                        $project_image = $project_img['pro-image'];
										$pro_img = $project_image['url'];
										
                                ?>
									<div class="single-carousel">
										<img src="<?php echo esc_url($pro_img)?>" alt="img">
									</div>
		                        <?php endforeach; endif;?>
		                
		                </div>
		            </div>
		            <div class="col-sm-6 padding-15">
		                <div class="project-single-content">
		                    <h2><?php the_title(); ?></h2>
		                    <p><?php the_content();?></p>
		                    <ul class="project-details">
                                <?php
                                $project_detls = get_post_meta($post->ID, 'my_project_option', true);
                                $project_extras = $project_detls['project-group'];
                                
                                if($project_extras):
                                    foreach($project_extras as $project_extra):
                                        $project_title = $project_extra['project-title'];
                                		$project_desc = $project_extra['project-desc'];
                                ?>
		                        <li><span><?php echo esc_html($project_title) ?></span><?php _e(':', 'arkit');?> <?php echo esc_html($project_desc) ?></li>
		                        <?php endforeach; endif;?>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
            <?php endwhile;?>
        <?php endif;?>
		</section><!--/.project-single-section-->
		
		<section class="projects-section padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                   <span> <?php _e('Projects', 'arkit') ?></span>
                   <h2><?php _e('Related works', 'arkit') ?></h2>
                </div><!--/.section-heading-->
                <div id="projects-carousel" class="projects-carousel owl-carousel">
                <?php
                    $project_args = array( 'post_type' => 'project', 'posts_per_page' => 6 );
                    $project = new WP_Query( $project_args ); 
                    if($project->have_posts()) :
                    while($project->have_posts()):
                        $project->the_post();
                        $cat = get_the_terms($sliders->ID, 'project_category');
                        
                        ?>
                        <div class="project-item">
                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="projects">
                            <div class="overlay"></div>
                            <a href="<?php echo get_the_post_thumbnail_url()?>" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                            <div class="projects-content">
                                <a href="<?php echo get_term_link($cat [0]->term_id )?>" class="category"><?php echo esc_html($cat[0]->name); ?></a>
                                <h3><a href="<?php the_permalink()?>" class="tittle"><?php the_title();?></a></h3>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif;?>
                </div>
            </div>
        </section><!--/.projects-section-->
		
		<?php get_template_part('template-parts/sponsor-section');?>
<?php get_footer();?>