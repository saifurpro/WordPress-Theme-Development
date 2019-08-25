# On demand Assets CSS/JS Loading

```
<?php 

if( ! function_exists("_text_domain_assets") ):
    function _text_domain_assets() {
 
 
        if(is_page() ) {
        $template_name = basename( get_page_template() );
            if( $template_name == "_PageTemplateName.php_" ) {
               wp_enqueue_style("handle", get_template_directory_uri() . '/css/___');
               wp_enqueue_script("handle", get_template_directory_uri() . "/js/___", array(), "version", boolean);
            }
        }
 
 
    }
endif;
add_action("wp_enqueue_scripts", "_text_domain_assets");

?>
```
