# Custom Query & Custom Query WP_Query

```
<?php 

// Custom Query 

$paged = get_query_var( 'paged') ? get_query_var( 'paged') : 1; 
$posts_per_page = 5;
$posts_id = array(58, 68, 81);

$_p = get_posts( array(
	'post__in'			=>	$posts_id, // post id
	'orderby'			=>	'post__in', // order by post id
	//'order'				=>	'ASC', // order by A to Z
	'posts_per_page'	=>	$posts_per_page,
	'paged'				=>	$paged // query pagination
));


// Loop for the output
foreach ($_p as $post) : setup_postdata($post); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php endforeach;
wp_reset_postdata();
?> 


<!-- Custom Query pagination -->
<div class="content_pagination">
	<?php 
	echo paginate_links( array(
		'total'		=>	ceil(count($posts_id) / $posts_per_page),
	) );
	?>
</div>
```

# WP_Query

```
<?php 

// Custom Query WP_Query

$paged = get_query_var( 'paged') ? get_query_var( 'paged') : 1; 
$posts_per_page = 5;
$posts_id = array(58, 68, 81);

$_p = new WP_Query( array(
	'post__in'			=>	$posts_id, // post id
	'orderby'			=>	'post__in', // order by post id
	//'order'				=>	'ASC', // order by A to Z
	'posts_per_page'	=>	$posts_per_page,
	'paged'				=>	$paged // query pagination
));


// Loop for the output
if($_p->have_posts()) : while($_p->have_posts()) : $_p->the_post(); ?>

	<h2><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h2>

<?php endwhile; endif; wp_reset_query(); ?>


<!-- Custom Query pagination -->
<div class="content_pagination">
	<?php 
	echo paginate_links( array(
		'total'		=>	$_p->max_num_pages,
		'current'	=>	$paged,
		//'prev_next'	=>	false,
		'prev_text'	=>	__('New Posts', 'textdomain'),
		'next_text'	=>	__('Old Posts', 'textdomain'),
	) );
	?>
</div>
```
