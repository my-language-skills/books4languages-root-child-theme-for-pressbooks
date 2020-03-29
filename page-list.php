<?php
/**
 * The template for displaying the catalog page
 *
 * Template Name: Book list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://wordpress.stackexchange.com/questions/41790/how-to-list-all-network-sites-on-one-page
 * @link https://wordpress.stackexchange.com/questions/90392/how-to-display-page-content-in-a-page-template
 *
 * @package Aldine
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">
 			<?php
 				while ( have_posts() ) :
 					the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          	<header class="entry-header">
          		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          	</header><!-- .entry-header -->
          	<div class="entry-content">
          		<?php
          			the_content();
          			?>
                <?php
                // $bcount = get_blog_count();
                global $wpdb;
                $blogs = $wpdb->get_results("SELECT * FROM $wpdb->blogs WHERE spam = '0' AND deleted = '0' and archived = '0' and public='1'");
                if(!empty($blogs)){
                    ?><ul class="menu"><?php
                    foreach($blogs as $blog){
                        $details = get_blog_details($blog->blog_id);
                        if($details != false){
                            $addr = $details->siteurl;
                            $name = $details->blogname;
                            if(!(($blog->blog_id == 1)&&($show_main != 1))){

                                ?>
                                <li class="menu-item<?php if($counter == get_current_blog_id()){ echo ' current-menu-item';}?>">
                                    <a href="<?php echo $addr; ?>"><?php echo $name;?></a>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?></ul><?php
                }
              ?>
          	</div><!-- .entry-content -->
          	<?php if ( get_edit_post_link() ) : ?>
          		<footer class="entry-footer">
          			<?php
          				edit_post_link(
          					sprintf(
          						wp_kses(
          							/* translators: %s: Name of current post. Only visible to screen readers */
          							__( 'Edit <span class="screen-reader-text">%s</span>', 'pressbooks-aldine' ),
          							[
          								'span' => [
          									'class' => [],
          								],
          							]
          						),
          						get_the_title()
          					),
          					'<span class="edit-link">',
          					'</span>'
          				);
          			?>
          		</footer><!-- .entry-footer -->
          	<?php endif; ?>
          </article><!-- #post-<?php the_ID(); ?> -->
      <?php
 				endwhile; // End of the loop.
 			?>
 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
