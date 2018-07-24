<?php
/**
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php do_action('sydney_inside_top_post'); ?>

	<header class="entry-header">
		
		<div class="meta-post">
			<?php sydney_all_cats(); ?>
		</div>

		<?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
<!-- .entry-meta -->
		<?php endif; ?>
			<?php /* Display meta taxonomy field and tag values for the Citations custom post type */
				echo "<div class=\"box-inlineblock-nocolor-large-font\">";
				  $mytaxonomy_terms = get_the_term_list( $post->ID, 'research_blog_post_type' );
				  	  echo "<div style=\"display: inline-block; margin-left: -10px; font-size: 120%;\">$mytaxonomy_terms</div>";
				  $mykey_values = get_post_custom_values('publicationauthor');
					  foreach ( $mykey_values as $key => $value ) {
				  	  echo "<div class=\"box-inlineblock-nocolor-large-font\">by $value</div>";
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
				echo "<div class=\"box-inlineblock-nocolor-large-font\">";
				  $mytaxonomy_terms2 = get_the_term_list( $post->ID, 'research_blog_post_type' );
				  $mykey_values = get_post_custom_values('publicationdate');
					  foreach ( $mykey_values as $key => $value ) {
				  	  echo "<div class=\"box-inlineblock-nocolor-large-font\">Published $value</div>";
					}
				echo "</div>";
				$posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
					echo "<div class=\"box-inlineblock-nocolor-large-font\" style=\"position: relative; float: right; color: red;\">$tag->name</div>";
					}
					}
				?>
		<div class="single-meta" style=\"float: right;\" >
			<?php sydney_posted_on(); ?>
		</div>		
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('large-thumb'); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sydney_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->
