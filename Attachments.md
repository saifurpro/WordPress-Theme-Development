# Attachments

### Functions.php Code
```
<?php 

// functions.php code 
if ( class_exists('Attachments') ) {
	require_once "/inc/attachments.php";
}
```

## Menu & Default Instance off:

```
<?php 

// Disable Settings Screen
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );

// Disable the Default Instance
add_filter( 'attachments_default_instance', '__return_false' );
```

## New attachments / New field example:

```
<?php

function theme_name_attachments( $attachments ) {
	$fields         = array(
		array(
			'name'      => 'title',                        
			'type'      => 'text',                        
			'label'     => __( 'Title', 'attachments' ),  
			'default'   => 'title',                        
		),
		array(
			'name'      => 'caption',                       
			'type'      => 'textarea',                     
			'label'     => __( 'Caption', 'attachments' ),  
			'default'   => 'caption',                      
		),
	);

	$args = array(
		'label'         => 'My Attachments',
		'post_type'     => array( 'post', 'page' ),
		'filetype'		=>	array('image'),
		'button_text'   => __( 'Attach Files', 'attachments' ),
		'fields'        => $fields,
	);

	$attachments->register( 'my_attachments', $args ); // unique instance name
}
add_action( 'attachments_register', 'theme_name_attachments' );
```

## Output show:

```
<?php 

	$attachments = new Attachments( 'my_attachments' ); /* pass the instance name */ 
?>


<?php if( $attachments->exist() ) : ?>
  <h3>Attachments</h3>
  <ul>
    <?php while( $attachment = $attachments->get() ) : ?>
      <li>
        <pre><?php print_r( $attachment ); ?></pre>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
```
