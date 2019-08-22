# Search Result Highlights

## Functions.php Code
```
<?php 
function theme_highlight_search_results($text){
    if(is_search()){
        $pattern = '/('. join('|', explode(' ', get_search_query())).')/i';
        $text = preg_replace($pattern, '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'theme_highlight_search_results');
add_filter('the_excerpt', 'theme_highlight_search_results');
add_filter('the_title', 'theme_highlight_search_results');
```


## You have put css in style.css
```
.search-highlight {
    background-color: #ff0;
    font-weight: 700;
}
```
