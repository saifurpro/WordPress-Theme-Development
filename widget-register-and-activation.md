# Widget Register and Activation

## Register widget area
```
function my_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );
```

## Where the widget will be shown
```
<?php 
  if(is_active_sidebar("sidebar")) {
     dynamic_sidebar("sidebar");
  }
?>
```
