<?php get_header();?>
		<section class="blog-section" style=" border-top:2px solid black;">
		    <div class="container">
		        <div class="blog-wrap row">
		            <div class="col-md-8 sm-padding">
		                <div class="row">
                            <?php
                                if ( have_posts() ):
                                    while ( have_posts() ) :
                                        the_post();
                                        $cat = get_the_category($post->ID);
                            ?>
                                <div class="col-sm-6 padding-15">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="post">
                                            <span class="category"><a href="<?php echo get_category_link($cat [0]->cat_ID )?>"><?php echo esc_html($cat [0]->cat_name ); ?></a></span>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink()?>" class="read-more"><?php _e('Read More', 'arkit') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
		                </div>
		                <ul class="pagination-wrap text-center mt-30">
                            <?php
                                posts_nav_link(null, '<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>')
                            ?>
                        </ul><!-- Pagination -->
		            </div><!--/.col-md-8-->
		            <div class="col-md-4 padding-15">
		                <?php get_sidebar();?>
                    </div><!--/.col-md-4-->
		        </div><!--/.blog-wrap-->
		    </div>
		</section><!--/.blog-section-->
<?php get_footer();?>