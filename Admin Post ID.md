# Admin Post ID

```
<?php 

$post_id = null;
if ( isset($_REQUEST['post']) || isset($_REQUEST['post_ID'] ) ){
   $post_id = empty($_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}

?>
```
