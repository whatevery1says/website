<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container text-center">
			<strong>Materials created by the WE1S project are published under a <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" class="customize-unpreviewable">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</strong>
			<br>

			<?php if ( is_user_logged_in() ) { ?>
			<a href="<?php echo wp_logout_url(); ?>">Logout</a>
			<a href="http://we1s.ucsb.edu/wp-admin/" class="customize-unpreviewable">Admin</a> <span class="sep"> | </span>
			<?php } ?>
			<?php wp_loginout(); ?>
			<span class="sep"> | </span>
			<a href="http://we1s.ucsb.edu/feed/?customize_changeset_uuid=166eb3d5-15cb-45bd-86ef-62965b092641&amp;customize_messenger_channel=preview-0" target="_self"><abbr title="Really Simple Syndication">RSS</abbr></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
