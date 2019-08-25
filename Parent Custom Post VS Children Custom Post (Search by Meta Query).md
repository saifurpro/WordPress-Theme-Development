# Parent Custom Post VS Children Custom Post (Search by Meta Query)

### LWHH – WordPress Theme Development Chapter – 21.11

```
<?php 


$_text_domain_ch_args = array(
	'posts_per_page'	=>	-1,
	'post_type'			=>	'chapter',
	'meta_key'			=>	'parent_book_id', // parent items id - ACF 
	'meta_value'		=>	get_the_ID(),
);

$_text_domain_query = new WP_Query($_text_domain_ch_args);

_e("Chapters", "text_domain");

while($_text_domain_query->have_posts()){
	$_text_domain_query->the_post();

	$_text_domain_title = get_the_title();
	$_text_domain_link = get_the_permalink();

	printf('<a href="%s">%s</a>', $_text_domain_link, $_text_domain_title);
}
wp_reset_query();

?>
```
