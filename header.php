<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php
                                $options = get_option( 'theme_options' );
                                echo $options['meta_description'];
                            ?>" />
        <meta name="keywords" content="<?php
                                $options = get_option( 'theme_options' );
                                echo $options['meta_keywords'];
                            ?>" />

        <title> <?php wp_title('|', true,'right'); ?> <?php
                                $options = get_option( 'theme_options' );
                                echo $options['title'];
                            ?></title>
        
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="graviti">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-6 site-title">
							<h1 class="site-title-heading">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</h1>
						</div>
						<div class="col-6">
                            
                            <nav class="navbar navbar-toggleable-md navbar-light right">
                                
                                   <button class="btn btn-header" type="button">
                                        <i class="fa fa-bars"></i>
                                   </button>
                                   <?php
                                   wp_nav_menu([
                                     'menu'            => 'top',
                                     'theme_location'  => 'top',
                                     'container'       => 'div',
                                     'container_id'    => 'menu-navbar',
                                     'container_class' => '',
                                     'menu_id'         => false,
                                     'menu_class'      => 'navbar-nav mr-auto',
                                     'depth'           => 2,
                                     'fallback_cb'     => '',
                                   ]);
                                   ?>
                             </nav>
                             
                            <div class="login">
                                <a href="/wp-login.php" class="btn btn-header">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                            </div>
                             
                             <div class="header-search right">
                                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                    <div class="form-group search-wrapper">
                                        <i data-search="button" class="fa fa-search btn btn-header"></i>
                                        <div class="search-input-wrapper">
                                            <input type="search" class="form-control search-input" value="" name="s" id="s" placeholder="Search" />
                                            <button type="submit" class="form-control search-button btn btn-danger" id="searchsubmit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</header>