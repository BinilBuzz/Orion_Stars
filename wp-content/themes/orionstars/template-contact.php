<?php
/*
	Template Name: Contact
*/
get_header(); ?>


<section class="register">
	<div class="container">
		<div class="circle-white"></div>
	


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

<?php
get_footer();
