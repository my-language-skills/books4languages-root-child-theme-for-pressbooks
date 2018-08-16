<?php
/**
 * Template part for displaying the catalog page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aldine
 */

?>

<?php get_template_part( 'partials/page', 'header' ); ?>
<section class="network-catalog">
	<form role="form" class="filter-sort" method="get">
		<input type="hidden" name="paged" value="<?php echo $current_page; ?>" />
		<!-- SUBJECT AND LICENSE FILTERS DELETED-->
		<fieldset class="sorts">
			<h2><?php _e( 'Sort by', 'pressbooks-aldine' ); ?></h2>
			<?php
			$sorts = [
				'title' => __( 'Title', 'pressbooks-aldine' ),
				'subject' => __( 'Subject', 'pressbooks-aldine' ),
				'latest' => __( 'Latest', 'pressbooks-aldine' ),
			];
			foreach ( $sorts as $key => $value ) { ?>
				<input type="radio" name="orderby" id="<?php echo $key ?>" value="<?php echo $key ?>" <?php checked( $orderby, $key ); ?>>
				<label for="<?php echo $key ?>"><?php echo $value; ?> <svg class="checked"><use xlink:href="#checkmark" /></svg></label>
			<?php } ?>
		</fieldset>
		<button type="button" class="clear-filters" hidden><?php _e( 'Clear Filters', 'pressbooks-aldine' ); ?></button>
		<button type="submit"><?php _e( 'Submit', 'pressbooks-aldine' ); ?></button>
	</form>
<ul class="books">
	<?php foreach ( $catalog_data['books'] as $book ) :
		include( locate_template( 'partials/book.php' ) );
	endforeach; ?>
</ul>
<?php if ( $catalog_data['pages'] > 1 ) : ?>
<nav class="catalog-navigation">
<?php if ( $previous_page ) : ?><a class="previous" rel="previous" data-page="<?php echo $previous_page; ?>" href="<?php echo network_home_url( "/catalog/page/$previous_page/" ); ?>"><span class="screen-reader-text"><?php _e( 'Previous Page', 'pressbooks' ); ?></span>
			<svg aria-hidden="true">
				<use xlink:href="#arrow-left" />
			</svg></a><?php endif; ?>
  <div class="pages">
	<?php for ( $i = 1; $i <= $catalog_data['pages']; $i++ ) :
		if ( $i === $current_page ) : ?>
		<span class="current"><?php echo $i; ?></span>
		<?php else : ?>
		<a href="<?php echo network_home_url( "/catalog/page/$i/" ); ?>"><?php echo $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>
  </div>
<?php if ( $next_page <= $catalog_data['pages'] ) : ?><a class="next" rel="next" data-page="<?php echo $next_page; ?>" href="<?php echo network_home_url( "/catalog/page/$next_page/" ); ?>"><span class="screen-reader-text"><?php _e( 'Next Page', 'pressbooks' ); ?></span>
			<svg aria-hidden="true">
				<use xlink:href="#arrow-right" />
			</svg></a><?php endif; ?>
</nav>
<?php endif; ?>
</section>
