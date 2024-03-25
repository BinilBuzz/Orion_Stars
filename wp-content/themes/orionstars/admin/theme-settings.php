<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

//Theme Shortname
$shortname = "orionstars";

//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');

//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:");


//Access the WordPress Categories via an Array
$tt_categories = array();
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post");


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';


/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall


/* Option Page 1 - Basic Options */
$options[] = array( "name" => __('Basic Options','framework_localize'),
			"type" => "heading");



$options[] = array( "name" => __('Favicon','framework_localize'),
			"desc" => __('Upload a 16px x 16px image that will represent your website\'s favicon.<br /><br /><em>To ensure cross-browser compatibility, we recommend converting the favicon into .ico format before uploading. (<a href="http://www.favicon.cc/">www.favicon.cc</a>)</em>','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Google Map','framework_localize'),
			"desc" => "This is a textarea field.",
			"id" => $shortname."_google_map",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Youtube Video','framework_localize'),
			"desc" => "This is a textarea field.",
			"id" => $shortname."_youtube_video",
			"std" => "",
			"type" => "textarea");


$options[] = array( "name" => __('Tracking Code','framework_localize'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework_localize'),
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea");



/* Option Page 2 - Contact Details */
$options[] = array( "name" => __('Contact Details','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('Title','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_company_title",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Company Address','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_company_address",
			"std" => "",
			"type" => "text");

			$options[] = array( "name" => __('Company Phone','framework_localize'),
						"desc" => "This is a text field.",
						"id" => $shortname."_company_phone",
						"std" => "",
						"type" => "text");


		$options[] = array( "name" => __('Company Mobile No. 1','framework_localize'),
						"desc" => "This is a text field.",
						"id" => $shortname."_company_mobile_1",
						"std" => "",
						"type" => "text");

		$options[] = array( "name" => __('Company Mobile No. 2','framework_localize'),
						"desc" => "This is a text field.",
						"id" => $shortname."_company_mobile_2",
						"std" => "",
						"type" => "text");



			$options[] = array( "name" => __('Company Email','framework_localize'),
						"desc" => "This is a text field.",
						"id" => $shortname."_company_email",
						"std" => "",
						"type" => "text");


$options[] = array( "name" => __('Facebook Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_fb_link",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('Twitter Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_tw_link",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('Google Plus Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_gp_link",
			"std" => "",
			"type" => "text");

			$options[] = array( "name" => __('Youtube Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_yt_link",
			"std" => "",
			"type" => "text");

			$options[] = array( "name" => __('Linkedin Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_in_link",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Powered By Link','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_poweredby_link",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Company Copyright','framework_localize'),
			"desc" => "This is a text field.",
			"id" => $shortname."_copyright",
			"std" => "",
			"type" => "textarea");

update_option('of_template',$options);
update_option('of_themename',$themename);
update_option('of_shortname',$shortname);

}
}
?>