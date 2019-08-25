# Conditionally Show Code Star Meta box

```

<?php 

$page_id = 0;
    if ( isset($_REQUEST['post']) || isset($_REQUEST['post_ID'] ) ){
        $page_id = empty($_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $current_page_template = get_post_meta($page_id, '_wp_page_template', true);
    // echo $current_page_template;
    // wp_die(); 

    // more than one page
    if(!in_array($current_page_template, array('about.php','contact.php'))) {
        return $options;
    }
    
    // for one page
    if('contact.php' !=$current_page_template) {
        return $options;
    }

?>

```
