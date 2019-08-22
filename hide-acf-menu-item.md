# Hide ACF Menu item

## Method #1
```
add_filter("acf/settings/show_admin", "__return_false");
```

## Method #2
```
function _text_domain_my_acf_init() {
	
	acf_update_setting('show_admin', false);
	
}
add_action('acf/init', '_text_domain_my_acf_init');
```
