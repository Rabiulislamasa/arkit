<?php /* Template Name: Project Template */ ?>
<?php get_header();?>
<?php if(get_theme_mod('project_banner_setting', true ) == true):?>
            <section class="page-header padding" style="background-image:url('<?php echo esc_url(get_theme_mod('projects_banner_img'))?>')">
                <div class="container" id="project_banner_setting">
                    <div class="page-content text-center">
                        <h2 id="projects_banner_title"><?php echo get_theme_mod('projects_banner_title','asa')?></h2>
                        <p id="projects_banner_desc"><?php echo get_theme_mod('projects_banner_desc')?></p>
                    </div>
                </div>
            </section><!--/.page-header-->
<?php endif;?>
<section class="projects-section padding">
            <div class="container-fluid" >
                <div class="container" id="project_setting"></div>
                <div class="section-heading text-center mb-40">
                    <span id="projects_title"><?php echo esc_html(get_theme_mod('projects_title'))?></span>
                    <h2 id="projects_desc "><?php echo esc_html(get_theme_mod('projects_desc'))?></h2>
                    
                </div><!--/.section-heading-->
                <div id="projects-carousel" class="projects-carousel owl-carousel">

                <?php 
            
                $project_args = array( 'post_type' => 'project', 'posts_per_page' => -1 );
                $project = new WP_Query( $project_args ); 
                if($project->have_posts()) :
                while($project->have_posts()):
                    $project->the_post();
                    $pro_cat = get_the_terms($project->ID, 'project_category');
                    
                    ?>
                    <div class="project-item">
                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="projects">
                        <div class="overlay"></div>
                        <a href="<?php echo get_the_post_thumbnail_url()?>" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="<?php echo get_term_link( $pro_cat[0]->term_id )?>" class="category"><?php echo ($pro_cat[0]->name); ?></a>
                            <h3><a href="<?php the_permalink()?>" class="tittle"><?php the_title();?></a></h3>
                        </div>
                    </div>
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <?php endif;?>
                </div>
            </div>
        </section><!--/.projects-section-->
<?php get_footer(); ?>