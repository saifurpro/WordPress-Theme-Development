# ACF – Advanced Custom Fields

```
<?php 


//For an example
if(get_post_format()=="image" && function_exists("the_field") ) :  

	$camera_model = get_field("camera_model");

        // native function code below
        // $camera_model = get_post_meta(get_the_ID(), "field_name", true);

	$location = get_field("location");
	$prefix_date = get_field("date");
	$prefix_image = get_field("image");
	$prefix_image_src = wp_get_attachment_image_src( $prefix_image, 'large' );
	?>
	
	<strong>Camera model:</strong> <span><?php esc_html( $camera_model ); ?></span> <br>
	<strong>location:</strong> <span><?php esc_html( $location ); ?></span><br>
	<strong>date:</strong> <span><?php esc_html( $prefix_date ); ?></span>
	<img src="<?php echo $alpha_image_src[0]; ?>" alt="">
	
	<?php if(get_field("license")) : ?>
		<p><?php echo apply_filters( "the_content", get_field("license_information")) ?></p>
	<?php endif; ?>

<?php endif; ?>
```

## ACF Category term image display
```
<?php 
 
	single_cat_title();
	$alpha_current_turm = get_queried_object();
 
	$alpha_current_turm_thum_id = get_field("field_name_here", $alpha_current_turm);
	$category_thum_details = wp_get_attachment_image_src( $alpha_current_turm_thum_id, "medium");
 
echo "<br><img src='".$category_thum_details[0]."'/>";
```

## ACF User field display

```
<?php 

if (function_exists('the_field')) : ?>


<p>
	<?php // You have to prepend user_; look at the below code: ?>

	Facebook link: <?php the_field("facebook_profile", "user_" .get_the_author_meta( "ID" )); ?>
	<br>
	twitter link: <?php the_field("twitter_profile", "user_" .get_the_author_meta( "ID" )); ?>
</p>

<?php endif; ?>
```

## Related posts by ACF

```
<?php 

/*
	ASC Field Type will be: Relationship
*/

?>

<?php if( function_exists("the_field") ) : ?>
    <div class="related-posts">
      <h2><?php _e( "Related posts", "_prefix_" ) ?></h2>
      <?php 
        $related_posts = get_field("related_posts");
        $_prefix__rp_q    = new WP_Query(array(
          'post__in' => $related_posts,
          'orderby'  => 'post__in',
        ));
 
        while($_prefix__rp_q->have_posts()) {
          $_prefix__rp_q->the_post();
        ?>
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        <?php
        }
        wp_reset_query();
       ?>
    </div>
<?php endif; ?>
```

# Show Admin settings off
```
<?php  

// show admin option off code below
add_filter( 'acf/settings/show_admin', '__return_false' );
```
