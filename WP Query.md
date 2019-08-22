# WP Query

```
<?php 
$args = array (
    'posts_per_page'        => 8,
    'ignore_sticky_posts'   => 1,
    'orderby'               =>'comment_count'
);
$loop = new WP_Query ($args);
 
if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post(); ?>
 
    <!--
        Your Query Section here.....
    -->
 
<?php endwhile; endif; ?>
```
