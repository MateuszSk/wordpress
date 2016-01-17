<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    

  </head>
<body>

		<nav class="navbar navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
		    </div>

		    <div class="collapse navbar-collapse" id="myNavbar">
		    <?php

				$defaults = array(
					'theme_location'  => 'primary',
					'menu'            => 'ul',
					'container'       => 'ul',
					'container_class' => 'nav navbar-nav pull-right',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="nav navbar-nav pull-right"><li id="item-id" class="jakistam" ></li>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu($defaults );
				?>

		    
		    </div>

        	
		  </div>
		</nav>
	