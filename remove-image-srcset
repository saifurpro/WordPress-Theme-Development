# Remove WordPress Image srcset

## Method #1
```
function _text_domain_remove_srcset() {
    return false;
}
add_filter( 'wp_calculate_image_srcset', '_text_domain_remove_srcset' );
```

## Method #2
```
add_filter( 'wp_calculate_image_srcset', '__return_empty_array' );
```
