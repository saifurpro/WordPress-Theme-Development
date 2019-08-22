# Blog Page Pagination

### Blog page pagination code in function.php
```
function textdomain_blog_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => 3,
        'prev_text'=> "<i class='fa fa-angle-left'></i>",
        'next_text'=> "<i class='fa fa-angle-right'></i>",
    ) );
    $links = str_replace( "prev page-numbers", "previous page-numbers", $links );
    echo $links;
}
```

### call the function which is defined in functions.php
<?php 
  function_name_here();
?>
