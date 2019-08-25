# Conditionally Search for Custom Post
### LWHH – WP Theme Development Class 21.7

```
<?php 

function philosophy_search_form() {
    $home_dir = home_url('/');
    $label = __("Search for:", "philosophy");
    $placeholder = __("Type Keywords", "philosophy");
    $submit_value = __("Search", "philosophy");

    /*Start code of conditional searching for post type */
    $post_type = <<<PT 
        <input type="hidden" name="post_type" value="post">
    PT;

    if(is_post_type_archive('movie')){
        $post_type = <<<PT 
            <input type="hidden" name="post_type" value="movie">
        PT;
    }
    /*End code of conditional searching for post type */

$form = <<<FORM
    <form role="search" method="get" class="header__search-form" action="{$home_dir}">
        <label>
            <span class="hide-content">{$label}</span>
            <input type="search" class="search-field" placeholder="{$placeholder}" value="" name="s" title="{$label}" autocomplete="off">
        </label>
        
        {$post_type}
        <input type="submit" class="search-submit" value="{$submit_value}">
    </form>
FORM;
    return $form;
}
add_filter('get_search_form','philosophy_search_form');

?>
