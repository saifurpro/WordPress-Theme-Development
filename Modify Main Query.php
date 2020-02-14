<?php 

// Reference:
// https://developer.wordpress.org/reference/classes/wp_query/


// functions.php
function _textdomain_modify_main_query($wpq) {
    if(is_home() && $wpq->is_main_query()){
      $wpq->set("post__not_in", array("post-id"));
    }
  }
add_action("pre_get_posts", "_textdomain_modify_main_query");

