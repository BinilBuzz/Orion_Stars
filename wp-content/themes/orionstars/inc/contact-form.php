<section class="register">
	<div class="container">
		<div class="circle-white"></div>
		<div class="row">
			<div class="section-title mb-5">
				<h2 class="text-center">Register & Play for Free</h2>
			</div>
		</div>

		<!-- 2 Col -->
		<div class="row">
			<?php if (have_rows('banner')) : ?>
				<?php while (have_rows('testimonials')) : the_row();
					$testimonial_title = get_sub_field('testimonial_title');
					$testimonial_content = get_sub_field('testimonial_content');
					$user_name = get_sub_field('user_name');
					$user_designation = get_sub_field('user_designation');
					$user_image = get_sub_field('user_image');

					 // Check if $user_image is an array and extract URL
					 $user_image_url = '';
					 if (is_array($user_image) && isset($user_image['url'])) {
						 $user_image_url = $user_image['url'];
					 } else {
						 $user_image_url = $user_image;
					 }
				?>
					<div class="col-lg-6 testimonails">
						<h5><?php echo $testimonial_title; ?></h5>
						<p class="pt-2"><?php echo $testimonial_content; ?></p>

						<div class="d-flex gap-3 pt-4">
							<div>
							<img src="<?php echo esc_url($user_image_url); ?>" alt="<?php echo esc_attr($user_name); ?>">
               
							</div>
							<div>
								<p class="mb-0 name"><?php echo $user_name; ?></p>
								<p><?php echo $user_designation; ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>


		<!-- Form -->
		<div class="row register-form">
			<div class="col-lg-6 ">
				<div class="img-wrapper">
					<img src=" https://orion.firekirinwebsite.com/wp-content/uploads/2024/03/contact-form-image.png">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-wrapper">
					<h2>Fill In The Form & Play</h2>
					<?php echo do_shortcode('[contact-form-7 id="cfcb946" title="Contact Form"]'); ?>
				</div>
			</div>
		</div>


	</div>
	</div>
</section>