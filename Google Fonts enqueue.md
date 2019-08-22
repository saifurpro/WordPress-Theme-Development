# Google Fonts enqueue
```
<?php 

function theme_name_files() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'g_fonts', g_fonts_url(), array(), null );

}
add_action('wp_enqueue_scripts', 'theme_name_files');


/**
 * Register custom fonts.
 */
function g_fonts_url() {
	$fonts_url = '';

	$OpenSans = _x( 'on', 'OpenSans font: on or off', 'consult' );
	$Montserrat = _x( 'on', 'Montserrat font: on or off', 'consult' );
	
	if ( 'off' !== $OpenSans || 'off' !== $Montserrat ) {
	
		$font_families = array();

		if ( 'off' !== $OpenSans ) {
			$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
		}
		if ( 'off' !== $Montserrat ) {
			$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		
	}

	return esc_url_raw( $fonts_url );
}
```
