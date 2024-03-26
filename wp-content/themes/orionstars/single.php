<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package orionstars
 */

get_header();
?>


<section>
	<div class="breadcrumb">
		<div class="container">
			<div class="single-title">
				<div class="breadcrumb-block">
					<div>
						<?php echo the_post_thumbnail(); ?>
					</div>
					<div>
						<h1><?php the_title(); ?></h1>
						<div class="w-100"> <?php if (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endif; ?>
							</p>
						</div>
						<button class="btn-red">Register for Free</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Image Section -->
<section class="bg-brown image-container">
	<div class="container">
		<div class="row">
			<h2 class="pb-3">Take a Glimse at the sirius Stars</h2>

			<?php if (have_rows('game-list')) : ?>
			<div class="col-lg-8">
				<?php while (have_rows('video_screenshot')) : the_row();
					$video_screenshot = get_sub_field('video_screenshot');
					var_dump($video_screenshot);
				?>
					<div class="large-images">
						<?php echo $video_screenshot; ?>
					</div>
					<?php endwhile; ?>
			</div>
			
			<?php endif; ?>
			<div class="col-lg-4">
				<div class="d-flex justify-content-lg-between  gap-3 flex-wrap small-images">
					<?php
					$images = get_field('gallery');
					if ($images) : ?>
						<?php 	foreach ($images as $image) : ?>
							<div class="small-images-block">
								<a href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<p class="register-text text-center">Prepare to enhance your thrill with complimentary access to this game.
				<a href="#">Register for Free</a>
			</p>
		</div>
	</div>
</section>


<?php get_template_part('inc/contact-form'); ?>

<?php

get_footer();
