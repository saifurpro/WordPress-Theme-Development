# enqueue style & scripts Tricks

### go to css path then create a php file for the loop
```
<?php 

foreach(glob(".css") as $css){
    echo "wp_enqueue_style('meal-{$css}', get_template_directory_uri() . '/assets/css/{$css}', array(), VERSION, 'all');\n";
}
```
### go to js path then create a php file for the loop
```
<?php 

foreach(glob(".js") as $js){
    echo "wp_enqueue_script('meal-{$js}', get_template_directory_uri() . '/assets/css/{$js}', array('jquery'), VERSION, true);\n";
}
```
