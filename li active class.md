# Menu li.active class add

```
function text_domain_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'text_domain_nav_class' , 10 , 2);
```
