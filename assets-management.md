# Assets Management


## Cache Busting code
```
if(site_url() == " ") {
    define("THEME_NAME_VERSION", time() );
} else {
    define("THEME_NAME_VERSION", wp_get_theme() -> get("Version") );
}
```


## Enqueue scripts and styles (Theme Assets)
```
if( ! function_exists("_text_domain_assets") ):
    function _text_domain_assets() {


        if(is_page() ) {
        $template_name = basename( get_page_template() );
            if( $template_name == "_PageTemplateName.php_" ) {
               wp_enqueue_style("handle", get_template_directory_uri() . '/css/___');
               wp_enqueue_script("handle", get_template_directory_uri() . "/js/___", array(), THEME_NAME_VERSION, boolean);
            }
        }

        wp_enqueue_style("font-awesome", get_theme_file_uri("/assets/css/font-awesome/css/font-awesome.min.css"), array(), "4.2.0", "all" );
        wp_enqueue_style("_text_domain_style", get_stylesheet_uri(), array(), THEME_NAME_VERSION, "all" );

        wp_enqueue_script("philosophy-plugins", get_theme_file_uri("/assets/js/plugins.js"), array("jquery"), "1.0", true);
        

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		        wp_enqueue_script( 'comment-reply' );
	      }
    }
endif;
add_action("wp_enqueue_scripts", "_text_domain_assets");
```
