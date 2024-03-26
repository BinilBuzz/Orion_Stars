<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orionstars
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<!-- Template Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scss/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header fixed-top ">
		<div class="container">
			<div class="d-flex justify-content-between align-self-start align-center align-items-center  border-b">
				<div class="nav-items">
					<nav class="navbar navbar-expand-lg bg-transparent">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<?php
							echo  wp_nav_menu(
								array(
									'menu'              => 'header-menu',
									'theme_location'    => 'primary',
									'depth'             => 3,
									'container'         => 'div',
									'container_class'   => 'd-flex flex-wrap gap-3',
									'container_id'      => 'navbarCollapse',
									'menu_class'        => 'navbar-nav ms-auto py-0',
								)
							);
							?>
						</div>
					</nav>
				</div>
				<div class="text-center logo-wrapper">
					<a href="<?php echo get_home_url(); ?>" class="navbar-brand p-0">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<div class="btn-wrapper d-flex align-items-center justify-content-end">
					<a href="#"> Register Account</a>
				</div>
			</div>
		</div>
	</header>