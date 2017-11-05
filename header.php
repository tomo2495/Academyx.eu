<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/print.css" type="text/css" media="print" />
<meta property="og:type" content="website" />
    <meta property="og:title" content="Academy X | školenia a predaj softvéru pre 2D a 3D grafiku" />
    <meta property="og:description" content="Podpora architektov, grafikov, dizajnérov. Ponúkame hardvér, softvér a školenia zamerané na prácu s technológiami pre dizajn, architektúru a 3D tlač." />
    <meta property="og:url" content="https://academyx.eu" />
    <meta property="og:site_name" content="Academy X | školenia a predaj softvéru pre 2D a 3D grafiku" />
    <meta property="og:image" content="https://www.academyx.eu/wp-content/uploads/2017/03/academyx.png" />

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
							<div class="site-title-heading">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php //bloginfo('name'); ?><img src="/wp-content/uploads/2017/03/academyx.png" alt="AcademyX logo" /></a>
							</div>
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
