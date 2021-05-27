<?php
	function chaplin_enqueue_styles() {
  	wp_enqueue_style( 'chaplin-child-style', get_stylesheet_uri(), array('chaplin-style'), wp_get_theme()->get('Version') );
	}
	add_action( 'wp_enqueue_scripts', 'chaplin_enqueue_styles');

	function fullwidth() {
		if ( is_page_template (array ('template-full-width-cover-img.php')) ) {
			$class[] = 'has-full-width-content';
		}
		return $class;
	}
	add_action( 'body_class', 'fullwidth' );

function google_analytics() {
    ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-P2ENKY23VT"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-P2ENKY23VT');
		</script>
    <?php
}
add_action('wp_head', 'google_analytics');
