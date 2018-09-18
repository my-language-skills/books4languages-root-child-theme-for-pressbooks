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

	<?php if ( $pb_network_contact_form ) :
		include( locate_template( 'partials/contact-form.php' ) );
	endif; ?>

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
							<a class="facebook" href="<?php echo $network_facebook; ?>" title="<?php printf( __( '%s on Facebook', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?>">
								<svg class="icon--svg">
									<use xlink:href="#facebook" />
								</svg>
								<span class="screen-reader-text"><?php printf( __( '%s on Facebook', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?></span>
							</a>
						<?php } ?>
						<?php if ( ! empty( $network_twitter ) ) { ?>
							<a class="twitter" href="<?php echo $network_twitter; ?>" title="<?php printf( __( '%s on Twitter', 'pressbooks-aldine' ), get_bloginfo( 'name', 'display' ) ); ?>">
								<svg class="icon--svg">
									<use xlink:href="#twitter" />
								</svg>
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
		  <a class="footer__pressbooks__icon" href="https://books4languages.com/" title="Books For Languages">
				<?php // TODO ?>
				<img src="/wp-content/themes/books4languages-root-child-theme-for-pressbooks/assets/images/icon-bfl.png">
			</a>
			<div class="footer__pressbooks__links">
				
				<?php /* translators: %s: Pressbooks */ ?>
				<p class="footer__pressbooks__links__title"><?php printf( __( 'Insolently created with use of %s', 'pressbooks-book' ), '<span class="pressbooks">Wordpress and Pressbooks</span>' ); ?></p>
				<ul class="footer__pressbooks__links__list">
					<li><a href="https://books4languages.com/"><?php _e( 'Books4Languages', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://worksheet.books4languages.com/"><?php _e( 'Exercises', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://books4languages.com/legal/"><?php _e( 'Policy', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="https://questions4languages.wordpress.com/"><?php _e( 'Forum', 'pressbooks-book' ); ?></a> |</li>
					<li><a href="./register/your-membership"><?php _e( 'Your Membership', 'pressbooks-book' ); ?></a> </li>
				</ul>
			</div>
			<div class="footer__pressbooks__social">
				<a class="facebook" href="https://www.facebook.com/Books4Languages/" title="<?php _e( 'Books For Languages on Facebook', 'pressbooks-book' ); ?>">
					<svg class="icon--svg">
						<use xlink:href="#facebook" />
					</svg>
					<span class="screen-reader-text"><?php _e( 'Books For Languages on Facebook', 'pressbooks-book' ); ?></span>
				</a>
				<a class="twitter" href="https://twitter.com/bookslanguages" title="<?php _e( 'Books For Languages on Twitter', 'pressbooks-book' ); ?>">
					<svg class="icon--svg">
						<use xlink:href="#twitter" />
					</svg>
				<span class="screen-reader-text"><?php _e( 'Books For Languages on Twitter', 'pressbooks-book' ); ?></span></a>
			</div>

		</section>
	</div><!-- .container -->
</footer><!-- .footer -->

<?php get_template_part( 'partials/content', 'accessibility-toolbar' ); ?>

</div> <!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
