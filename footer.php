<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Taprobana
 * @since Taprobana v0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'taprobana_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'taprobana' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'taprobana' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'taprobana' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'taprobana' ), 'Taprobana', '<a href="http://sajithdilshan.github.com/" rel="designer">Sajith Dilshan</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>