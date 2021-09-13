<div class="sidebar-wrap">
    <div class="widget-content w-100">
        <?php if(is_active_sidebar('sidebar-5')):
            dynamic_sidebar('sidebar-5');
        endif;
        ?>
    </div>
    <div class="widget-content">
    <?php if(is_active_sidebar('sidebar-6')):
            dynamic_sidebar('sidebar-6');
        endif;
        ?>
    </div><!--categories-->
    <div class="widget-content">
        <h4><?php _e('Recent Posts', 'arkit') ?></h4>
        <ul class="thumb-post">
        <?php 
            // Define our WP Query Parameters
            $recent_posts = new WP_Query( 'posts_per_page=5' ); ?>
            

            <?php 
            // Start our WP Query
            while ($recent_posts -> have_posts()) : $recent_posts -> the_post(); 
            // Display the Post Title with Hyperlink
            ?>
            <li><img src="<?php echo get_the_post_thumbnail_url()?>" alt="post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php 
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div><!--tag clouds-->
    <div class="widget-content">
    <?php if(is_active_sidebar('sidebar-7')):
            dynamic_sidebar('sidebar-7');
        endif;
        ?>
    </div><!--tag clouds-->
</div><!--/.sidebar-wrap-->