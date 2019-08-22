# CMB2 Metabox show hide by Post format

```
function _text_domain_admin_assets($hook) {
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if( "post.php" == $hook) {
        $post_format = get_post_format($post_id);

        wp_enqueue_script("admin-script", get_theme_file_uri("/assets/js/admin.js"), array("jquery"), VERSION, true);

        wp_localize_script("admin-script","_text_domain_pf",array("format"=>$post_format));
    }
}
add_action("admin_enqueue_scripts", "_text_domain_admin_assets");
```

## assets/js/admin.js Code here
```
; (function ($) {
    $(document).ready(function () {
        $("#post-formats-select .post-format").on("click", function () {
            if ($(this).attr("id") == "post-format-image") {
                $("#_text_domain_image_information").show();
            } else {
                $("#_text_domain_image_information").hide();
            }
        });

        if (_text_domain_pf.format != "image") {
            $("#_text_domain_image_information").hide();
        }
    });
})(jQuery);
```

## MTM Sujan Method: Class 56 Part 25

```
jQuery(document).ready(function(){


	var id = jQuery( 'input[name="post_format"]:checked' ).attr('id');

	if(id == 'post-format-video'){
		jQuery('.cmb2-id--for-video').show();
	}else{
		jQuery('.cmb2-id--for-video').hide();
	}

	if(id == 'post-format-audio'){
		jQuery('.cmb2-id--for-audio').show();
	}else{
		jQuery('.cmb2-id--for-audio').hide();
	}

	if(id == 'post-format-gallery'){
		jQuery('.cmb2-id--for-gallery').show();
	}else{
		jQuery('.cmb2-id--for-gallery').hide();
	}


	jQuery( 'input[name="post_format"]' ).change(function(){
		jQuery('.cmb2-id--for-gallery').hide();
		jQuery('.cmb2-id--for-audio').hide();
		jQuery('.cmb2-id--for-video').hide();

		var id = jQuery( 'input[name="post_format"]:checked' ).attr('id');

		if(id == 'post-format-video'){
			jQuery('.cmb2-id--for-video').show();
		}else{
			jQuery('.cmb2-id--for-video').hide();
		}

		if(id == 'post-format-audio'){
			jQuery('.cmb2-id--for-audio').show();
		}else{
			jQuery('.cmb2-id--for-audio').hide();
		}

		if(id == 'post-format-gallery'){
			jQuery('.cmb2-id--for-gallery').show();
		}else{
			jQuery('.cmb2-id--for-gallery').hide();
		}	


	});
})
</script>
```
