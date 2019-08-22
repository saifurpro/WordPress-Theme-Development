# custom post register

```
<?php 
function my_custom_post() {
    $labels = array (
        'name'  =>  'Item',
        'singular_name' =>  'Item',
        'add_new'       =>  'Add New',
        'all_items'     =>  'All Item',
        'add_new_item'  =>  'Add New Item',
        'edit_item'     =>  'Edit Item',
        'new_item'      =>  'New Item',
        'view_item'     =>  'View Item',
        'search_item'   =>  'Search Item',
        'not_found'     =>  'No items found',
        'not_found_in_trash'    =>  'No items found in trash',
        'parent_item_colon'     =>  'Parent Item',
    );
    $args = array (
        'labels'        =>  $labels,
        'public'        =>  true,
        'has_archive'   =>  true,
        'publicly_queryable'    =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  true,
        'capability_type'       =>  'post',
        'hierarchical'          =>  false,
        'menu_icon'             =>  'dashicons-images-alt',
        'supports'   =>  array (
            'title',
            'custom-fields',
            'thumbnail',
            'revisions',
            'excerpt'
            
        ),
        'taxonomies'        =>  array ( 'category', 'post_tag'),
        'menu_position'     =>  45,
        'exclude_from_search'   =>  false,
    );
    register_post_type('post-type-name-here', $args);

}
add_action('init', 'my_custom_post');


?>
```

# custom post query
```
<?php 

$args = array (
    'post_type'     =>  'post-type-name', // post type name here
    'posts_per_page' =>  -1
);
$loop = new WP_Query ($args);

if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post(); 

	$thumb_link = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large' );
    $template_icon = get_post_meta( get_the_ID(), 'template_icon', true); // custom meta 
?>

    <!--
        Your Query Section here for showing front page.
    -->

<?php endwhile; endif;

?>
```

# Custom Post binding with Metabox (ACF)
### custom post query for Metabox (ACF)

```
<?php 

$args = array (
    'post_type'     =>  'post-type-name', // post type name here
    'posts_per_page' =>  -1,
    'meta_key' => 'meta key name here',
    'meta_value' => 'meta value here'
);
$loop = new WP_Query ($args);

if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post(); ?>

    <!--
        Your Query Section here for showing front page.
    -->

<?php endwhile;
endif;

?>
```
