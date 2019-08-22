# Nav Menu li Class
```
function _text_domain_nav_menu_css($classes, $item) {
    $classes[] = "list-inline-item";
    return $classes;
}
add_filter("nav_menu_css_class", "_text_domain_nav_menu_css", 10, 2);
```

## Where menu will be setup
```
<?php 
   wp_nav_menu(
      array(
        "theme_location"    =>  "id_name",
           "menu_class"        =>  "list-inline",
       )
   );
?>
```
