<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_work
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo get_bloginfo('name') ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site for Planet Earth" />
	<meta name="keywords" content="planet, Earth" />
	<meta name="author" content="PLANET" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="/"><?php the_custom_logo(); ?></a>
							</div>
						</div>
						<div class="col-md-6">
							<?php

							$args = array(
								'theme_location'  => '',
								'menu'            => 'Primary menu',
								'container'       => 'ul',
								'container_class' => 'nav text-center',
								'container_id'    => 'navbar',
								'menu_class'      => 'nav text-center',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="navbar" class="nav text-center">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							wp_nav_menu($args); ?>


						</div>

						<?php dynamic_sidebar('social_link'); ?>

					</div>
				</nav>
			</div>
		</header>