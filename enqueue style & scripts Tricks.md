# enqueue style & scripts Tricks

### go to css path then create a php file for the loop
```
<?php 

foreach (glob("*.css") as $css) {
    echo "wp_enqueue_style( 'wptheme-{$css}', get_template_directory_uri() . '/assets/css/{$css}', array(), '1.0', 'all');\n";
}
```
### go to js path then create a php file for the loop
```
<?php 

foreach (glob("*.js") as $js) {
    echo "wp_enqueue_script( 'wptheme-{$js}', get_template_directory_uri() . '/assets/js/{$js}', array('jquery'), '1.0', true);\n";
}
```
