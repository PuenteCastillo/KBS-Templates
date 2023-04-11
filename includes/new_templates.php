<?php 

//? this file is for additional templates
//? add additional templates into the $template_array if needed. 


// teplate array function 

function kbs_new_page_templates_array() {

	$template_array = [
		'kbs_faq.php' => 'KBS FAQ',
	];
	
	return $template_array;


	
}

// regester template function

function kbs_register_template( $page_template, $theme, $post ) {
	$template_array = kbs_new_page_templates_array();

	foreach( $template_array as $tk => $tv) {
		$page_template[$tk] = $tv;


	}
	
	return $page_template;

	
	

}
	
add_filter( 'theme_page_templates', 'kbs_register_template', 10 , 3 );

// create template function
function KBS_new_template_select($template){

	global $post, $wp_query, $wpdb;

	$page_temp_slug = get_page_template_slug($post->ID);

	// echo $page_temp_slug;

	$templates = kbs_new_page_templates_array();

	// echo '<pre>';
	// print_r($templates);
	// echo '</pre>';

	if( isset( $templates[$page_temp_slug] ) ) {
		$template = plugin_dir_path( __DIR__ ) . $page_temp_slug;
		// echo $template;
	}

	
	return $template;
}
add_filter('template_include', 'KBS_new_template_select', 99);


