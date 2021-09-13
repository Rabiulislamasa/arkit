<!doctype html>
    <html <?php language_attributes(); ?> >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Architecture & Interior HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title><?php wp_title()?></title>
        
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?> '/assets/img/favicon.png">
		<?php wp_head();?>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70" class="<?php body_class( $class ); ?>" <?php wp_body_open(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--<div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div> Preloader -->
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    
                    <a href="<?php echo site_url();?>" class="navbar-brand">
                        <?php if(has_custom_logo()):
                             echo the_custom_logo();
                            else:echo bloginfo('name');
                            endif; ?>
                    </a>
                   
                    <div class="d-flex menu-wrap">
                                <?php
                                    wp_nav_menu(
                                        array( 
                                            'theme_location' => 'primarymenu',
                                            'container_class'=>'mainmenu',
                                            'container_id'=>'mainmenu',
                                            'menu_class' => 'nav',
                                            ))
                                ?>
                        <?php if(get_theme_mod('header_top_setting', true ) == true): ?>
                            <ul class="nav d-none d-lg-block d-md-none">
                                <li class="phone" id="header_number"><i class="fa fa-phone"></i><?php echo esc_html( get_theme_mod('header_number'));?></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
		</header> <!--.header-section -->
		
        <div class="header-height"></div>
