# Attachment Field show hide by post format

```
<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );


function philosophy_attachments($attachments){

	$post_id = null;
	if ( isset($_REQUEST['post']) || isset($_REQUEST['post_ID'] ) ){
		$post_id = empty($_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
	}

	if (!$post_id || get_post_format( $post_id )!="gallery") {
		return;
	}

	$fields = array(
	    array(
	      'name'      => 'title',                         // unique field name
	      'type'      => 'text',                          // registered field type
	      'label'     => __( 'Title', 'philosophy' ),
	    ),
	 );

	  $args = array(

	    // title of the meta box (string)
	    'label'         => 'Gallery',
	    'post_type'     => array( 'post'),
	    'priority'      => 'high',
	    'filetype'      => array("image"),
	    'note'          => 'Add gallery images',
	    'button_text'   => __( 'Attach images', 'philosophy' ),
	    'fields'        => $fields,
  );

	  $attachments->register( 'gellary', $args );
}
add_action( 'attachments_register', 'philosophy_attachments' );
```

```
function philosophy_admin_assets($hook) {
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if( "post.php" == $hook) {
        $post_format = get_post_format($post_id);
 
        wp_enqueue_script("admin-script", get_theme_file_uri("/assets/js/admin.js"), array("jquery"), VERSION, true);
 
        wp_localize_script("admin-script","philosophy_pf",array("format"=>$post_format));
    }
}
add_action("admin_enqueue_scripts", "philosophy_admin_assets");
```
### assets/js/admin.js Code here
```
; (function ($) {
    $(document).ready(function () {
        $("#post-formats-select .post-format").on("click", function () {
            if ($(this).attr("id") == "post-format-gallery") {
                $("#attachments-gallery").show();
            } else {
                $("#attachments-gallery").hide();
            }
        });

        if (philosophy_pf.format != "gallery") {
            $("#attachments-gallery").hide();
        }
    });
})(jQuery);
```
#### find out the class of the module and put it here to show and hide
