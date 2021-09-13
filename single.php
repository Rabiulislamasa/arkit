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
		<section class="blog-section padding">
		    <div class="container">
		        <div class="blog-wrap row">
		            <div class="col-md-8 padding-15">
		                 <?php
                                while ( have_posts() ) :
                                    the_post();
                            ?>
                        <div class="blog-single-wrap">
		                    <div class="blog-thumb">
		                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="img">
		                    </div>
		                    <div class="blog-single-content">
                           
		                        <h2><a href="#"><?php the_title();?></a></h2>
		                        <ul class="single-post-meta">
                                    <li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_ID())?>"><?php echo get_the_author_meta( "display_name" );?></a></li>
                                    <li><i class="fa fa-calendar"></i> <a href="#"><?php the_date(); ?></a></li>
                                    <li><i class="fa fa-comments"></i> <a href="#"><?php echo comments_number(); ?></a></li>
                                </ul>
                                <?php the_content();?>

                                <ul class="post-tags">
                                <?php $post_tags = get_the_tags();
                                    if($post_tags):
                                        foreach($post_tags as $post_tag):
                                ?>

                                    <li><a href="<?php echo get_tag_link( $post_tag ) ?>"><?php echo esc_html($post_tag->name)?></a></li>
                                    <?php endforeach;
                                    endif; ?>
                                </ul><!--/.post-tags-->
                                <div class="author-box bg-grey">
                                <?php
                                                echo get_avatar( get_the_author_meta( "ID" ) );
                                                ?>
                                    <div class="author-info">
                                        <h3><?php echo get_the_author_meta( "display_name" ); ?></h3>
                                        <p><?php echo get_the_author_meta( "description" ); ?></p>
                                        <ul class="social-icon">
                                            <?php
                                                $user_id   = get_current_user_id();
                                                $user_meta = get_user_meta( $user_id, 'my_profile_options', true );
                                                $pro_fb = $user_meta['fb-link'];
                                                $pro_twitter = $user_meta['twitter-link'];
                                                $pro_instagram = $user_meta['instagram-link'];
                                                $pro_pintrset = $user_meta['pinterest-link'];
                                                $pro_youtube = $user_meta['youtube-link'];
                                            ?>
                                            <?php if($pro_fb):?>
                                            <li><a href="<?php echo esc_url($pro_fb);?>"><i class="ti-facebook"></i></a></li>
                                            <?php endif;
                                                if($pro_twitter):
                                            ?>
                                            <li><a href="<?php echo esc_url($pro_twitter) ?>"><i class="ti-twitter"></i></a></li>
                                            <?php endif;
                                                if($pro_instagram):
                                            ?>
                                            <li><a href="<?php echo esc_url($pro_instagram) ?>"><i class="ti-instagram"></i></a></li>
                                            <?php endif;
                                                if($pro_pintrset):
                                            ?>
                                            <li><a href="<?php echo esc_url($pro_pintrset) ?>"><i class="ti-pinterest"></i></a></li>
                                            <?php endif;
                                                if($pro_youtube):
                                            ?>
                                            <li><a href="<?php echo esc_url($pro_youtube); ?>"><i class="ti-youtube"></i></a></li>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                </div><!--/.author-box-->
                           
                                <div class="post-navigation row">
                                    <div class="col prev-post">
                                        <?php previous_post_link() ?>
                                    </div>
                                    <div class="col next-post">
                                        <?php next_post_link()?>
                                    </div>
                                </div><!--.post-navigation-->
                                    <?php if ( comments_open() || get_comments_number()) :
                                        comments_template();
                                    endif; ?>
                                
		                    </div>
		                </div><!--/.blog-single-->
                        <?php endwhile;?>
		            </div><!--/.col-md-8-->
		            <div class="col-md-4 padding-15">
		                <?php get_sidebar();?>
                    </div><!--/.col-md-4-->
		        </div><!--/.blog-wrap-->
		    </div>
		</section><!--/.blog-section-->
		
<?php get_footer();?>