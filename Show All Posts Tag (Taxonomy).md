# Show All Posts Tag (Taxonomy)

```
<?php

$tags = get_terms('post_tag');
 foreach ($tags as $tag) : ?>
     <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>

 <?php endforeach; 

?>
```
