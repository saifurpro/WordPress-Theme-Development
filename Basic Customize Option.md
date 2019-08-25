# Customize Option

## Logo:
```
// Functions.php
if( ! function_exists("philosophy_setup") ):
    function philosophy_setup() {
        $theme_custom_logo_defaults = array(
           'width'     =>  '120',
           'height'    =>  '120'
        );
        // Custom Logo
        add_theme_support("custom-logo", $theme_custom_logo_defaults);

    }
endif;
add_action("after_setup_theme", "philosophy_setup");

// Initialization
<?php 
    if(current_theme_supports('custom-logo')){
       if(has_custom_logo()){
         the_custom_logo();
       }else {
            echo '<h1>'.get_bloginfo('name').'</h1>';
       }
    }
?>
```

## Header Image & Header Text Color:
```
<?php 
// Functions.php
if( ! function_exists("theme_setup") ):
    function theme_setup() {
        $theme_custom_header_details = array(
            'header-text'           =>  true,
            'default-text-color'    =>  '#222',
            'width'                 =>  1200,
            'height'                =>  600,
            'flex-height'           =>  true,
            'flex-width'            =>  true
        );
        // Custom Header Image
        add_theme_support("custom-header", $theme_custom_header_details);
 
    }
endif;
add_action("after_setup_theme", "theme_setup");



// Initialization
function theme_header_banner() {

if( is_front_page() ){
    if( current_theme_supports("custom-background") ) {
        ?>
        <style type="text/css">
            .class_name {
                background-image: url(<?php echo header_image(); ?>);
            }
            .class_name h1.header a, h3.tagline {
                color: #<?php echo get_header_textcolor(); ?>;
                <?php 
                if(!display_header_text()){
                    echo "display: none;";
                }
                ?>
            }
        </style>
        <?php 
    }
}

}
add_action("wp_head", "theme_header_banner");
```

## Custom Background

```
// Functions.php
if( ! function_exists("theme_setup") ):
    function theme_setup() {
        // Custom background
        add_theme_support("custom-background");
 
    }
endif;
add_action("after_setup_theme", "theme_setup");
```
