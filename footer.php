		
        <section class="widget-section padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <?php if(is_active_sidebar('widget-1')):
                                dynamic_sidebar('widget-1');
                            endif;
                            ?>
                    </div>
                    <div class="col-lg-2 col-sm-6 sm-padding">
                        <div class="widget-content">
                        <?php if(is_active_sidebar('widget-2')):
                                dynamic_sidebar('widget-2');
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <?php if(is_active_sidebar('widget-3')):
                                dynamic_sidebar('widget-3');
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <?php if(is_active_sidebar('widget-4')):
                                    dynamic_sidebar('widget-4');
                                endif;
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.widget-section-->
        
		<footer class="footer-section align-center">
			<div class="container">
				<p>&copy; 2019 Arkit Powered by DynamicLayers</p>
			</div>
		</footer><!-- /.footer-section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	<?php wp_footer();?>
    </body>
</html>