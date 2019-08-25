# Footer Popular Post by WP_Query


```

<?php 

	$args = array(
		'posts_per_page'         => 6,
		'order'               => 'DESC',
		'orderby'             => 'comment_count',
		'ignore_sticky_posts' => true,
	);

$query = new WP_Query( $args );


if($query->have_posts()): while($query->have_posts()) : $query->the_post();

?>

<?php if(has_post_thumbnail()): ?>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
<?php endif; ?>

<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
<?php the_excerpt(); ?>


<?php endwhile; endif; ?>

```
