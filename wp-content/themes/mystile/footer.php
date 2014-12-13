<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;
	
	echo '<div class="footer-wrap">';

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}

	if ( ( woo_active_sidebar( 'footer-1' ) ||
		   woo_active_sidebar( 'footer-2' ) ||
		   woo_active_sidebar( 'footer-3' ) ||
		   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {

?>
	<?php woo_footer_before(); ?>
	
		<section id="footer-widgets" class="col-full col-<?php echo $total; ?> fix">
	
			<?php $i = 0; while ( $i < $total ) { $i++; ?>
				<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>
	
			<div class="block footer-widget-<?php echo $i; ?>">
	        	<?php woo_sidebar( 'footer-' . $i ); ?>
			</div>
	
		        <?php } ?>
			<?php } // End WHILE Loop ?>
	
		</section><!-- /#footer-widgets  -->
	<?php } // End IF Statement ?>
		<footer id="footer" class="col-full">
	
			<div id="copyright" class="col-left col-footer">                            
                            <div class="footer-logo-container">
                                <a href="#" class="footer-logo"></a></div>
			</div>
                        <div id="contact-social" class="col-mid col-footer">                     
                            <h3 class="social-title">Watch more videos</h3>
                            <div class="social-container">
                                <ul class="social-list">
                                    <li class="fb-icon"><a href="#"></a></li>
                                    <li class="tw-icon" ><a href="#"></a></li>
                                    <li class="tumblr-icon" ><a href="#"></a></li>
                                    <li class="youtube-icon"><a href="#"></a></li>
                                    <li class="google-plus-icon"><a href="#"></a></li>
                                </ul>
                            </div>
                            
			</div>
			<div id="credit" class="col-right col-footer">
	        <?php if( isset( $woo_options['woo_footer_right'] ) && $woo_options['woo_footer_right'] == 'true' ) {
	
	        	echo stripslashes( $woo_options['woo_footer_right_text'] );
	
			} else { ?>
				<p><?php _e( 'Powered by', 'woothemes' ); ?> <a href="<?php echo esc_url( 'http://www.wordpress.org' ); ?>">WordPress</a>. <?php _e( 'Designed by', 'woothemes' ); ?> <a href="<?php echo ( isset( $woo_options['woo_footer_aff_link'] ) && ! empty( $woo_options['woo_footer_aff_link'] ) ? esc_url( $woo_options['woo_footer_aff_link'] ) : esc_url( 'http://www.woothemes.com' ) ) ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/woothemes.png' ); ?>" width="74" height="19" alt="Woo Themes" /></a></p>
			<?php } ?>
			</div>
	
		</footer><!-- /#footer  -->
                <div id="footer-copyright">Copyright to Nguyen Nguyen Group &copy;2014</div>
	</div><!-- / footer-wrap -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>

</body>
</html>