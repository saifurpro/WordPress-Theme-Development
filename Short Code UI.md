# Short Code UI

If Shortcode is available, then for the UI you have to install 1st [“Shortcake (Shortcode UI)”](https://wordpress.org/plugins/shortcode-ui/) plugin 
then 2nd below code have to bind in Plugin Territory

```
function philosophy_gmap_shortcode_uri() {
    $fields = array(
        array(
            'label'=> __('Place', 'philosophy'),
            'attr'=> 'place',
            'type'=> 'text',
            'meta'=> array(
                'placeholder'=> 'Enter the Place Name like "Dhaka"'
            )
        ),
        array(
            'label'=> __('Width', 'philosophy'),
            'attr'=> 'width',
            'type'=> 'text'
        ),
        array(
            'label'=> __('Height', 'philosophy'),
            'attr'=> 'height',
            'type'=> 'text'
        ),
        array(
            'label'=> __('Zoom', 'philosophy'),
            'attr'=> 'zoom',
            'type'=> 'text'
        ),
    );

    $settings = array(
        'label'=> __('Google Maps', 'philosophy'),
        'listItemImage'=> 'dashicons-welcome-learn-more',
        'post_type'=>array('post','page'),
        'attrs'=>$fields
    );

    shortcode_ui_register_for_shortcode('gmap',$settings);
}
add_action('register_shortcode_ui', 'philosophy_gmap_shortcode_uri');
```

### Where is shortcode, below code have to there for dependency the UI Plugin

```
if( file_exists( dirname(__FILE__) . '/shortcode-ui.php') ) {
    require_once dirname(__FILE__) . '/shortcode-ui.php';
}
```
