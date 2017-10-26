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

// FOR HEADER IMAGES
$customHeaderSettings = array(
	"default-image" => "../../../uploads/2017/10/placeholder.jpg",
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

// ADDING WIDGETS
function enaNavbarSetup(){
	$enaNavbarSettings = array(
		"name"          => "Sidebar",
		"id"            => "enanavbar-1",
		"description"   => "This is the sidebar.",
		"class"         => "custom",
		"before_widget" => "<div id='%1$s' class='widget %2$s'>",
		"after_widget"  => "</div>",
		"before_title"  => "<small class='widgettitle'>",
		"after_title"   => "</small>",
	);

	register_sidebar($enaNavbarSettings);
}

add_action("widgets_init", "enaNavbarSetup");

// ADDING FEATURED HEADER IMAGES FOR EACH POST
add_theme_support("post-thumbnails");



