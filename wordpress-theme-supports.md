# WordPress Theme Supports
```
/**
* Theme Setup Function
*/
if( ! function_exists("_text_domain_setup") ):
    function _text_domain_setup() {

        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( '_text_domain_', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // The document title.
        add_theme_support( 'title-tag' );

        // Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // output valid HTML5
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        add_theme_support('custom-background', apply_filters(
            'neuron_custom_background_args', array(
                'default-color' =>  'ffffff',
                'default-image' =>  ''
        ) ) );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('custom-logo', array(
            'height'        =>  250,
            'width'         =>  250,    
            'flex-width'    =>  true,   
            'flex-height'   =>  true,
        ));

        // Menu Register
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', '_text_domain_' ),
        ) );

        // This theme styles the visual editor for theme style
        add_editor_style( array( 'assets/css/editor-style.css' ) );
    }
endif;
add_action("after_setup_theme", "_text_domain_setup");
```

```
function theme_name_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'theme_name_content_width', 640 );
}
add_action('after_setup_theme', 'theme_name_content_width');
```
