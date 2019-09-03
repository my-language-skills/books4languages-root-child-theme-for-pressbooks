<?php
/*
Theme Name: Books4languages Book Child theme for Pressbooks
Version: 0.2
License: GPL v3 or later
GitHub Theme URI: my-language-skills/books4languages-book-child-theme-for-pressbooks
*/


function pbrc_login_logo() { ?>

    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header-logo.png) !important;
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'pbrc_login_logo', 1000 );



 function my_theme_enqueue_styles() {

     $parent_style = 'parent-style'; // This is 'aldine' for the Aldine theme.

     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
     wp_enqueue_style( 'child-style',
         get_stylesheet_directory_uri() . '/style.css',
         array( $parent_style ),
         wp_get_theme()->get('Version')
     );
 }

 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
