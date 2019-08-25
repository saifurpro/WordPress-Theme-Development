# Taxonomy Query by WP_Query

```
<?php 

$text_domain_query_args = array(
	'post_type'		=>	'book',
	'posts_per_page'=>	-1,
	'tax_query'		=>	array(
		array(
			'taxonomy'	=>	'language',
			'field'		=>	'slug',
			'terms'		=>	array(
				'english',
				'bangla',
				'french'
			)	// terms name
		),
	),
);

$text_domain_posts = new WP_Query($text_domain_query_args);

echo $text_domain_posts->found_posts;


while($text_domain_posts->have_posts()) { 

	$text_domain_posts->the_post();

	the_title();
}
wp_reset_query();

?>
```
