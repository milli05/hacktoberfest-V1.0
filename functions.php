<?php
if(!function_exists('wesley_rodrigues_theme_setup'))
{
	function wesley_rodrigues_theme_setup() {
		register_nav_menus( array(
			'header' => __( 'Header Menu', 'wesley_rodriques' ),
			'sidebar'  => __( 'Sidebar Menu', 'wesley_rodriques' ),
		) );

	}

	add_action( 'after_setup_theme', 'wesley_rodrigues_theme_setup' );
}