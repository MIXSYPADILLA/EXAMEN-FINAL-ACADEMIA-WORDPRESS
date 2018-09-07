<?php

function dl_enqueue_style() {
    $theme_data = wp_get_theme();

    wp_register_style('bootstrap-min-css', get_parent_theme_file_uri('/assets/css/bootstrap.min.css'), null, $theme_data->get( 'Version' ), 'screen');

    
    wp_register_style('style', get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');
    
    
    wp_register_style('fonts-1',"https://fonts.googleapis.com/css?family=Montserrat:300,400,500");
    
    wp_register_style('fonts-2',"https://fonts.googleapis.com/css?family=Felipa");

    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_style('style');
    wp_enqueue_style('fonts-1');
    wp_enqueue_style('fonts-2');
    
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');

function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();

    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );

    wp_register_script('jquery-2', get_parent_theme_file_uri('assets/js/jquery-2.2.3.min.js'), null, '2.2.3', true);

    wp_register_script('responsiveslides', get_parent_theme_file_uri('assets/js/responsiveslides.min.js'), array('jquery-2'), null, true);

    wp_register_script('jquery-waypoints', get_parent_theme_file_uri('assets/js/jquery.waypoints.min.js'), array('jquery-2'), null, true);

    wp_register_script('jquery-countup', get_parent_theme_file_uri('assets/js/jquery.countup.js'), array('jquery-2'), null, true);

    wp_register_script('jquery-flexisel', get_parent_theme_file_uri('assets/js/jquery.flexisel.js'), array('jquery-2'), null, true);

    wp_register_script('lsb-min', get_parent_theme_file_uri('assets/js/lsb.min.js'), array('jquery-2'), null, true);
    wp_register_script('move-top', get_parent_theme_file_uri('assets/js/move-top.js'), array('jquery-2'), null, true);
    wp_register_script('easing', get_parent_theme_file_uri('assets/js/easing.js'), array('jquery-2'), null, true);

    wp_register_script('bootstrap-min', get_parent_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery-2'), null, true);
    wp_register_script('lightbox-plus-jquery', get_parent_theme_file_uri('assets/js/lightbox-plus-jquery.min.js'), array('jquery-2'), null, true);
   wp_register_script('mi-scripts', get_parent_theme_file_uri('assets/js/mi-scripts.js'), array('jquery-2'), null, true);
    
    
    wp_enqueue_script('jquery-2');
    wp_enqueue_script('bootstrap-min');
    wp_enqueue_script('responsiveslides');
    wp_enqueue_script('jquery-waypoints');
    wp_enqueue_script('jquery-countup');
    wp_enqueue_script('jquery-flexisel');
    wp_enqueue_script('lsb-min');
    wp_enqueue_script('move-top');
    wp_enqueue_script('easing');
    wp_enqueue_script('lightbox-plus-jquery');
     wp_enqueue_script('mi-scripts');

    
    
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
?>