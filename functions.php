<?php


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

/*
* Auto update from github
*
* @since 0.1
*/
require 'vendor/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/my-language-skills/books4languages-root-child-theme-for-pressbooks/',
		__FILE__,
		'books4languages-root-child-theme-for-pressbooks'
);
