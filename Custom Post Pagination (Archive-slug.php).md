# Custom Post Pagination (Archive-slug.php)

```
<?php 

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$post_per_page = 3;

$books = new WP_Query(array(
	'post_type'			=>	'book', // custom post
	'posts_per_page'	=>	$post_per_page,
	'paged'				=>	$paged

) );


echo paginate_links(array(
	'current'		=>	$paged,
	'total'			=>	$books->max_num_pages, // variable name $books will be change
	'prev_next'		=>	false,
));
```
