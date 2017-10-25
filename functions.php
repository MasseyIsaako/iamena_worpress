<?php 
function enaThemeEnqueues(){
	// Adding the Custom CSS stylsheet
	wp_enqueue_style( "enaCSS", get_template_directory_uri() . "/css/style.css", array(), "1.0.0", "all" );

	//Adding Custom JS and jQuery
	wp_enqueue_script("jquery");
	wp_enqueue_script("enaJS", get_template_directory_uri() . "/js/script.js", array(), "1.0.0", true);
}

add_action( "wp_enqueue_scripts", "enaThemeEnqueues" );
add_theme_support("custom-background");

// For header images
$customHeaderSettings = array(
	"default-image" => "",
	"width" => 100,
	"height" => 50,
	"flex-height" => true,
	"flex-width" => true,
	"default-text-color" => "",
	"header-text" => true,
	"uploads" => true,
	"video" => false
);

add_theme_support("custom-header", $customHeaderSettings);