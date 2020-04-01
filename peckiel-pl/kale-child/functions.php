<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
  function chld_thm_cfg_locale_css( $uri ){
    if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
      $uri = get_template_directory_uri() . '/rtl.css';
    return $uri;
  }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
  function chld_thm_cfg_parent_css() {
    wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
  }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


function search() {
	if (is_page ('31616')) {
		?>
		<script src="/wp-content/themes/kale-child/jquery-3.4.1.min.js"></script>
		<script>
			$('.ngg-tagcloud ul.wp-tag-cloud li').css('grid-column', '3 / 3');
			$('.ngg-tagcloud ul.wp-tag-cloud li').has('[aria-label*=" hc "]').css('grid-column', '1 / 1');
			$('.ngg-tagcloud ul.wp-tag-cloud li').has('[aria-label*=" śl"]').css('grid-column', '2 / 2');
		</script>
    	<?php
  	}
}
add_action('wp_footer', 'search');