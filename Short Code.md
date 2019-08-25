# Short Code

```
function philosophy_btn($atts, $content='') {
    $default = array(
        'type'=>'primary',
        'url'=>'',
    );
    $attr = shortcode_atts($default, $atts);

        return sprintf('<a class="btn btn--%s full-width" href="%s">%s</a>',
        $attr['type'],
        $attr['url'],
        do_shortcode($content)
    );
}
add_shortcode('btn', 'philosophy_btn');
```

```
function philosophy_video($atts, $content=''){
    $default = array(
        'url'=>'https://player.vimeo.com/video/14592941',
        'width'=>'500px',
        'height'=> '281'
    );

    $attrs = shortcode_atts($default, $atts);

    $video = <<<EOD
    <div class="video-container">
        <iframe src="{$attrs['url']}?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" width="{$attrs['width']}" height="{$attrs['height']}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
    </div>
EOD;
    return $video;
}
add_shortcode('video', 'philosophy_video');
```
