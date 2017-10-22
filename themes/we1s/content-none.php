<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'sydney' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sydney' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sydney' ); ?></p>

			<form id="results-search-form" role="search" method="get" class="search-form text-left" action="https://we1s.ucsb.edu/">
			<div id="custom-results-input">
				<div class="input-group input-group-sm col-md-12">
					<span class="screen-reader-text">Search for:</span>
					<input id="search-input" type="text" class="  search-query form-control" placeholder="Search ..." value="" name="s" style="width: 275px;margin:20px 0 20px -15px;">
					<span class="input-group-btn">
					<button class="btn btn-danger" type="button">
						<i class="fa fa-search" aria-hidden="true" onclick="document.getElementById('search-form').submit();"></i>
					</button>
					</span>
				</div>
			</div>
		</form>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sydney' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
