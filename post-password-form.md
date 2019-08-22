# Post Password Form & Protected Title Change

## Post Password Form
```
function _text_domain_the_excerpt($excerpt) {
    if( post_password_required() ) {
        $excerpt = get_the_password_form();
    }
    return $excerpt;
}
add_filter("the_excerpt", "_text_domain_the_excerpt");
```

## Protected Title Changing
```
function _text_domain_protect_title_change() {
    return "%s";
}
add_filter("protected_title_format", "_text_domain_protect_title_change");
```
