<?php
 
function  u_enqueue(){
  wp_register_style( 'u_font_rubik_and_pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap' );
    wp_register_style( 'u_bootstrap_icons', get_theme_file_uri( '/assets/bootstrap-icons/bootstrap-icons.css' ) );
    wp_register_style( 'u_main_style', get_theme_file_uri( '/assets/public/index.css' ) );
}