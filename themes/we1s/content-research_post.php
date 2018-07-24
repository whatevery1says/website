<?php
/**
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'index_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('sydney-large-thumb'); ?></a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="title-post entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
		<div class="meta-post">
			<?php sydney_posted_on(); ?>
		</div
<!-- .entry-meta -->
		<?php endif; ?>
			<?php /* Display meta taxonomy field and tag values for the Citations custom post type */
				echo "<div class=\"box-inlineblock-nocolor\">";
				$mytaxonomy_terms = get_the_term_list( $post->ID, 'research_blog_post_type' );
				 	  echo "<div style=\"display: inline-block; margin-left: -10px; font-size: 100%;\">$mytaxonomy_terms</div>";
				  $mykey_values = get_post_custom_values('publicationauthor');
					  foreach ( $mykey_values as $key => $value ) {
				  	  echo "<div class=\"box-inlineblock-nocolor\">by $value</div>";
					}
				echo "</div>";
				$posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
					echo "<div class=\"box-inlineblock-nocolor\" style=\"position: relative; float: right; color: red;\">$tag->name</div>";
					}
					}
				?>
			
			<?php /* Display meta taxonomy field and tag values for the Citations custom post type */
				echo "<div class=\"box-inlineblock-nocolor\">";
				  $mytaxonomy_terms2 = get_the_term_list( $post->ID, 'research_blog_post_type' );
				  $mykey_values = get_post_custom_values('publicationdate');
					  foreach ( $mykey_values as $key => $value ) {
				  	  echo "<div class=\"box-inlineblock-nocolor\">Published $value</div>";
					}
				echo "</div>";
				$posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
					echo "<div class=\"box-inlineblock-nocolor\" style=\"position: relative; float: right; color: red;\">$tag->name</div>";
					}
					}
				?>
				<!--
<!-- post date and author removed
		<div class="single-meta" style=\"float: right;\" >
			<?php sydney_posted_on(); ?>
		</div>
-->
	<div class="entry-post">
		<?php if ( (get_theme_mod('full_content_home') == 1 && is_home() ) || (get_theme_mod('full_content_archives') == 1 && is_archive() ) ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-post -->

	</header><!-- .entry-header -->


	<footer class="entry-footer">
		<?php sydney_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->
