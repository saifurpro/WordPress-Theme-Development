# Custom Taxonomy Terms (Tag)

#### LWHH – WordPress Theme Development – Chapter 22.2


functions.php
```
function philosophy_footer_language_heading( $title ) {
	if ( is_post_type_archive( 'book' ) || is_tax( 'language' ) ) {
		$title = __( 'Languages', 'philosophy' );
	}

	return $title;
}

add_filter( 'philosophy_footer_tag_heading', 'philosophy_footer_language_heading' );

function philosophy_footer_language_terms( $tags ) {
	if ( is_post_type_archive( 'book' ) || is_tax( 'language' ) ) {
		$tags = get_terms( array(
			'taxonomy'   => 'language',
			'hide_empty' => true
		) );
	}

	return $tags;
}

add_filter( 'philosophy_footer_tag_items', 'philosophy_footer_language_terms' );

```

footer.php
```
<?php

$philosophy_footer_tag_heading = apply_filters('philosophy_footer_tag_heading',__('Tags','philosophy'));
$philosophy_footer_tag_items = apply_filters('philosophy_footer_tag_items',get_tags());

?>

<h3>
	<?php echo esc_html($philosophy_footer_tag_heading); ?>
</h3>


<div class="tagcloud">
	<?php
	if(is_array($philosophy_footer_tag_items)){
	    foreach($philosophy_footer_tag_items as $pti){
		printf('<a href="%s">%s</a>',get_term_link($pti->term_id),$pti->name);
	    }
	}
	?>

</div> <!-- end tagcloud -->
```
