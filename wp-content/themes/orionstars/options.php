<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'orionstars' ),
		'two' => __( 'Two', 'orionstars' ),
		'three' => __( 'Three', 'orionstars' ),
		'four' => __( 'Four', 'orionstars' ),
		'five' => __( 'Five', 'orionstars' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'orionstars' ),
		'two' => __( 'Pancake', 'orionstars' ),
		'three' => __( 'Omelette', 'orionstars' ),
		'four' => __( 'Crepe', 'orionstars' ),
		'five' => __( 'Waffle', 'orionstars' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'orionstars' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Address:', 'orionstars' ),
		'placeholder' => __( 'Your Address.', 'orionstars' ),
		'id' => 'address',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Phone No:', 'orionstars' ),
		'placeholder' => __( 'Enter Phone No.', 'orionstars' ),
		'id' => 'phone',
		'type' => 'text'
	);

		$options[] = array(
		'name' => __( 'Email:', 'orionstars' ),
		'placeholder' => __( 'Enter Email', 'orionstars' ),
		'id' => 'email',
		'type' => 'text'
	);

	
    $options[] = array(
		'name' => __( 'Facebook:', 'orionstars' ),
		'placeholder' => __( 'Enter Facebook link.', 'orionstars' ),
		'id' => 'fb',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'LinkdIn:', 'orionstars' ),
		'placeholder' => __( 'Enter LinkdIn link', 'orionstars' ),
		'id' => 'in',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Instagram:', 'orionstars' ),
		'placeholder' => __( 'Enter instagram link', 'orionstars' ),
		'id' => 'ig',
		'type' => 'text'
	);
	
	
		$options[] = array(
		'name' => __( 'Add Google Map:', 'orionstars' ),
		'id' => 'gmap',
		'type' => 'editor',
		//'settings' => $wp_editor_setting
		);



	$options[] = array(
		'name' => __( 'Footer Text', 'orionstars' ),
		'type' => 'heading'
	);



    $options[] = array( "name" => __('Footer Logo','framework_localize'),
        "id" => "flogo",
        "std" => "",
        "type" => "upload"
    );

	$options[] = array(
		'name' => __( 'Footer Bottom Content:', 'orionstars' ),
		'id' => 'foo-bottom-content',
		'type' => 'editor',
		//'settings' => $wp_editor_setting
		);
		

	return $options;
	
}