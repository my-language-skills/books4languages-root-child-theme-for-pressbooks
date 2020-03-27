<?php
/*
Theme Name: Books4languages Book Child theme for Pressbooks
Version: 0.3
License: GPL v3 or later
GitHub Theme URI: my-language-skills/books4languages-book-child-theme-for-pressbooks
*/



/**
* Enqueue the styles
*
* SINCE v0.2
*/
function my_theme_enqueue_styles() {

     $parent_style = 'parent-style'; // This is 'aldine' for the Aldine theme.

     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
     wp_enqueue_style( 'child-style',
         get_stylesheet_directory_uri() . '/style.css',
         array( $parent_style ),
         wp_get_theme()->get('Version')
     );
 }

add_action( 'wp_enqueue_styles', 'my_theme_enqueue_styles' );
/** End of modified code */

/**
* Function for correct display of company logo on login page.
*
* SINCE v0.1
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
/** End of modified code */

/**
* Function for adding a new RCP Template (mails).
* https://docs.restrictcontentpro.com/article/1760-rcp-email-templates
*
* SINCE v0.3
*/

function ag_rcp_email_templates( $templates ) {
    $templates['books4languages'] = __( 'Books4Languages Template' );

    return $templates;
}

add_filter( 'rcp_email_templates', 'ag_rcp_email_templates' );
/** End of modified code */
