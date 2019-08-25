# CMB2 Metabox

### CMB2 Meta call & Display
```

<?php if(get_post_format()=="image" && class_exists("CMB2") ) :  


	$site_name 				= get_post_meta( get_the_ID(),   "_alpha_site_name", true );
	$site_edetor 			= get_post_meta( get_the_ID(), "_alpha_site_edetor", true );
	$site_category 			= get_post_meta( get_the_ID(),  "_alpha_site_category", true );
	$site_developer 		= get_post_meta( get_the_ID(),  "_alpha_site_developer", true );
	$site_license 			= get_post_meta( get_the_ID(),  "_alpha_site_license", true  );
	$license_infornmation 	= get_post_meta( get_the_ID(),  "_alpha_license_infornmation", true );
	$site_realize_date		= get_post_meta( get_the_ID(),  "_alpha_site_realize_date_", true );

?>
	<div class="cmb-meta-box">
		<strong>Site name:</strong> <span><?php echo esc_html( $site_name ); ?></span><br/>
		<strong>Site edetor:</strong> <span><?php echo esc_html( $site_edetor ); ?></span> <br/>
		<strong>Site category:</strong> <span><?php echo esc_html( $site_category ); ?></span> <br/>
		<strong>Site developer:</strong> <span><?php echo esc_html( $site_developer ); ?></span> <br/>
		<strong>Site realize date:</strong> <span><?php echo esc_html( $site_realize_date ) ?></span> <br/>
		<?php if( $site_license ) : ?>
			<strong>Site infornmation:</strong> <span><?php echo esc_html( $license_infornmation ); ?></span> <br>
		<?php endif; ?>
	</div>
<?php endif; ?>

```

## CMB2 Image field “ID” tricks

```

<?php 

// if you set _id after field name then you will get the id just append to "_id"
$_prefix_image = get_post_meta( get_the_ID(), "_prefix_field_name_id", true );

$prefix_image_src = wp_get_attachment_image_src( $_prefix_image, 'large' );

?>

<img src="<?php echo esc_url($prefix_image_src[0]); ?>" alt="">

```

## Display CMB on pages with specific template

``` 

'show_on' => array( 
	'key' => 'page-template', 
	'value' => 'page-templates/pricing-table.php'    // template path and name
),

```

## Pricing Table by CMB Group Field with the repeatable field.

```
<?php 


// this code for cmb2 meta page

function cmb2_add_pricingtable(){

	$prefix = '_alpha_';
 
	$cmb = new_cmb2_box(array(
		'id' => $prefix . 'pricing_table_box',
		'title' => __('pricing Table', 'alpha') ,
		'object_types' => array(
			'page'
		),
		'show_on' => array( 
			'key' => 'page-template', 
			'value' => 'pricing-table.php'
		),
		'context' => 'normal',
		'priority' => 'default',
	));
	$group = $cmb->add_field(array(
		'name' => __('pricing table', 'alpha') ,
		'id' => $prefix . 'pricing_table',
		'type' => 'group',
	));
	$cmb->add_group_field($group, array(
		'name' => __('pricing caption', 'alpha') ,
		'id' => $prefix . 'pricing_caption',
		'type' => 'text',
	));
	$cmb->add_group_field($group, array(
		'name' => __('pricing option', 'alpha') ,
		'id' => $prefix . 'pricing_option',
		'type' => 'text',
		'repeatable' => true
	));
	$cmb->add_group_field($group, array(
		'name' => __('price', 'alpha') ,
		'id' => $prefix . 'price',
		'type' => 'text',
	));

}
add_action('cmb2_init', 'cmb2_add_pricingtable');
```

## Pricing Table Meta Display

```
<?php

$pricing_options = get_post_meta( get_the_ID(), "_alpha_pricing_table", true );

?>
 
<div class="container">
	<div class="row">
		<?php foreach ($pricing_options as $pricing) : ?>
			<div class="col-lg-4 text-center">
				<h2><?php echo esc_html( $pricing['_alpha_pricing_caption'] ); ?></h2>
				<ul>
					<?php foreach ($pricing['_alpha_pricing_option'] as $pricing_option) : ?>
						<li><?php echo esc_html( $pricing_option); ?></li>
					<?php endforeach; ?>
				</ul>
				<h3><?php echo esc_html( $pricing['_alpha_price']); ?></h3>
			</div>
		<?php endforeach; ?>
	</div>
</div>
```
