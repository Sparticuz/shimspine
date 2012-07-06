<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<!--<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>-->
				<div class="vcard" style="float:left;">
					<span class="fn n org">Westchase</span>
					<div class="adr">
						<div class="street-address">12780 Racetrack Road, Suite 200</div>
						<span class="locality">Tampa</span>, 
						<span class="region">FL</span>  
						<span class="postal-code">33626</span>
					</div>
					<a href="tel:8138149251" class="tel">(813) 814-9251</a>
				</div>
				<div class="vcard" style="float:right;">
					<span class="fn n org">Palm Harbor</span>
					<div class="adr">
						<div class="street-address">3890 Tampa Road, Suite 202</div>
						<span class="locality">Palm Harbor</span>, 
						<span class="region">FL</span>  
						<span class="postal-code">34684</span>
					</div>
					<a href="tel:7277875577" class="tel">(727) 787-5577</a>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>