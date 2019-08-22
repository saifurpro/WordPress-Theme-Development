# Comment Title Change

```
function set_my_comment_title($defaults) {
	$defaults['title_reply'] = __('Comment Here', 'customizr-child');
	return $defaults;
}
add_filter( 'comment_form_defaults', 'set_my_comment_title' );
```
