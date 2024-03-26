<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Index
 * @package orionstars
 */

get_header();
?>
<section class="banner-wrapper d-flex align-items-center justify-content-center">
	<img class="banner-bg" width="100%" src="https://orion.firekirinwebsite.com/wp-content/uploads/2024/03/hero-banner.png">
	<div class="container banner-container">
		<div class="row">
			<div class="col-lg-8">
				<?php if (have_rows('banner')) : ?>
					<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<?php $first = true; ?>
							<?php while (have_rows('banner')) : the_row();
								$banner_title = get_sub_field('banner_title');
								$banner_content = get_sub_field('banner_content');
								$banner_link = get_sub_field('banner_link');
							?>
								<div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
									<h1><?php echo $banner_title; ?></h1>
									<?php echo $banner_content; ?>
									<a href="<?php echo esc_url($banner_link); ?>">
										<button class="btn-red"><?php the_sub_field('banner_button_title'); ?></button>
									</a>
								</div>
								<?php $first = false; ?>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-4 d-none d-lg-block">
				<div class="banner-video">
				<iframe  src="https://www.youtube.com/embed/3vbZ4xR2DHE" title="Orion stars|High bet and winning gameplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FEATURED GAMES CURATED FOR YOU -->
<section class="featured relative">
	<div class="container">
		<div class="circle-red"></div>
		<div class="row">
			<div class="section-title">
				<h2 class="text-center">Featured Games curated for you</h2>
			</div>
			<div class="featured-wrapper relative pt-4">
				<?php
				$counter = 1; // Initialize counter variable
				query_posts('post_type=game-list && order=asc');
				while (have_posts()) : the_post();
				?>
					<div class="featured-block item<?php echo $counter; ?>">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('thumbnail', array('class' => 'block-image-' . $counter)); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<?php $counter++; // Increment the counter 
					?>
				<?php endwhile;
				wp_reset_query();
				?>
			</div>
		</div>

		<!-- Btn -->
		<div class="mt-5 d-flex justify-content-center">
			<a class="btn-red" href="<?php bloginfo('template_url'); ?>/our-games/">View All Games</a>
		</div>
	</div>
	</div>
</section>

<!-- REGISTER & PLAY -->
<?php get_template_part('inc/contact-form'); ?>

<?php
get_footer();