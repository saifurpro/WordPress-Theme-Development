# Custom Taxonomy Terms (Tag)

#### LWHH – WordPress Theme Development – Chapter 22.2

```
<?php 

$text_domain_tag_heading = apply_filters('text_domain_tag_heading', __('Tags', 'text_domain'));

$text_domain_tag_items = apply_filters('text_domain_tag_items', get_tags());

?>

<h3><?php echo esc_html($text_domain_tag_heading); ?></h3>


<?php 

if(is_array($text_domain_tag_items)){
	foreach ($text_domain_tag_items as $tag) : ?>

     <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
 
 <?php endforeach; 
}

?>
```
