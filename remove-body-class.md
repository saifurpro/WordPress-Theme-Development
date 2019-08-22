# Remove Body Class
```
add_filter( 'body_class', function( $classes ) {
    if(in_array("class_name_here", $classes) ) {
        unset( $classes[array_search("class_name_here", $classes ) ] );
    }
    return $classes;

});
```
