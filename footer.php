<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aldine
 */
?>

<?php
$network_facebook = get_option( 'pb_network_facebook' );
$network_twitter = get_option( 'pb_network_twitter' );
$pb_network_contact_form = get_option( 'pb_network_contact_form' );
?>

	</div><!-- #content -->

	<?php
	if ( $pb_network_contact_form ) :
		include( locate_template( 'partials/contact-form.php' ) );
	endif;
	?>

	<footer class="footer" role="contentinfo">
	<div class="footer__inner">
		<div class="footer__network">
			<?php if ( is_active_sidebar( 'network-footer-block-1' ) ) { ?>
				<div class="footer__network__block footer__network__block--1">
					<?php dynamic_sidebar( 'network-footer-block-1' ); ?>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'network-footer-block-2' ) || ! empty( $network_facebook ) || ! empty( $network_twitter ) ) { ?>
				<div class="footer__network__block footer__network__block--2">
					<?php dynamic_sidebar( 'network-footer-block-2' ); ?>
					<div class="social-media">
						<?php if ( ! empty( $network_facebook ) ) { ?>
							<?php /* translators: %s network name */ ?>
							<a class="facebook" href="<?php echo $network_facebook; ?>" title="<?php printf( __( '%s on Facebook', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?>">
								<svg class="icon--svg">
									<use xlink:href="#facebook" />
								</svg>
								<?php /* translators: %s network name */ ?>
								<span class="screen-reader-text"><?php printf( __( '%s on Facebook', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?></span>
							</a>
						<?php } ?>
						<?php if ( ! empty( $network_twitter ) ) { ?>
							<?php /* translators: %s network name */ ?>
							<a class="twitter" href="<?php echo $network_twitter; ?>" title="<?php printf( __( '%s on Twitter', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?>">
								<svg class="icon--svg">
									<use xlink:href="#twitter" />
								</svg>
								<?php /* translators: %s network name */ ?>
								<span class="screen-reader-text"><?php printf( __( '%s on Twitter', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?></span>
							</a>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			<div class="footer__network__block footer__network__menu">
				<?php wp_nav_menu( [ 'theme_location' => 'network-footer-menu' ] ); ?>
			</div>
		</div>
		<section class="footer__pressbooks">
			<a class="footer__pressbooks__icon" href="https://books4languages.com/" title="Books4Languages">
				<?php // TODO ?>
<!--
-				Updated logo with company logo.
-
-				SINCE v0.1
-->
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/empty.gif" style="width: 44px; height: 44px;
				background: url('../wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/css_sprites.png') -10px -10px;" alt="books4languages">
			</a>
			<div class="footer__pressbooks__links">
				<?php /* translators: %s Pressbooks */ ?>
				<p class="footer__pressbooks__links__title"><?php printf( __( 'Insolently created with use of %s', 'pressbooks-book' ), '<span class="pressbooks">Wordpress and Pressbooks</span>' ); ?></p>
<!-- End of modified code -->

<!--
-				Updated links to correct ones.
-				Privacy Policy menu slug added.(v0.2)
-
-				SINCE v0.1
-->

				<ul class="footer__pressbooks__links__list">
					<li><a href="https://books4languages.com/"><?php _e( 'Home', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://open.books4languages.com/multisite-index/"><?php _e( 'Site index', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://worksheet.books4languages.com/"><?php _e( 'Exercises', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://books4languages.com/legal/"><?php _e( 'Legal', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://books4languages.com/legal/privacy-policy/"><?php _e( 'Privacy', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://questions4languages.wordpress.com/"><?php _e( 'Forum', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://books4languages.com/contact/"><?php _e( 'Contact', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://open.books4languages.com/register/your-membership/"><?php _e( 'Membership', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://books4languages.com/newsletter/"><?php _e( 'Newsletter', 'pressbooks-book' ); ?></a>
				</ul>
			</div>
			<div class="footer__pressbooks__social">
				<a class="facebook" href="https://www.facebook.com/Books4Languages/" target="_blank" title="<?php _e( 'Books4Languages on Facebook', 'pressbooks-book' ); ?>" rel=”noopener”>
						<img id="facebook-logo" src="/wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/empty.gif" style="width: 24px; height: 24px;;
			    	background: url('../wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/css_sprites.png') -10px -74px;" alt="facebook bfl">
					<span class="screen-reader-text"><?php _e( 'Books4Languages on Facebook', 'pressbooks-aldine' ); ?></span>
				</a>

				<a class="twitter" href="https://twitter.com/bookslanguages" target="_blank" title="<?php _e( 'Books4Languages on Twitter', 'pressbooks-book' ); ?>" rel=”noopener”>
					<img id="twitter-logo" src="/wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/empty.gif" style="width: 24px; height: 24px;
				    background: url('../wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/css_sprites.png') -74px -10px;" alt="twitter bfl">
						<span class="screen-reader-text"><?php _e( 'Books4Languages on Twitter', 'pressbooks-aldine' ); ?></span>
				</a>
<!-- End of modified code -->

			</div>
		</section>
	</div><!-- .container -->
</footer><!-- .footer -->

<?php get_template_part( 'partials/content', 'accessibility-toolbar' ); ?>

</div> <!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
