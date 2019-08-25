# Custom Post URL Rewrite

### LWHH – WordPress Theme Development, Chapter – 21.10

```
function philosophy_cpt_slug_fix($post_link, $id) {
    $post = get_post($id);
    if(is_object($post) && 'chapter'==get_post_type($id)){
        $parent_post_id = get_field('parent_book');
        $parent_post = get_post($parent_post_id);
        if($parent_post){
            $post_link = str_replace("%book%", $parent_post->post_name, $post_link);
        }
    }
    return $post_link;
}
add_filter("post_type_link", "philosophy_cpt_slug_fix", 1, 2);

```

#### Chapter 22.6
## Custom Post URL Rewrite & Taxonomy Slug Rewrite (Both codes are added)

```
<?php   



function philosophy_cpt_slug_fix($post_link, $id) {
    $post = get_post($id);

    // Custom Post URL Rewrite
    if(is_object($post) && 'chapter'==get_post_type($id)){
        $parent_post_id = get_field('parent_book');
        $parent_post = get_post($parent_post_id);
        if($parent_post){
            $post_link = str_replace("%book%", $parent_post->post_name, $post_link);
        }
    }

    // Taxonomy slug Rewrite
    if(is_object($post) && 'book'==get_post_type($post)){
    	$genre = wp_get_post_terms($post->ID,'genre');
    	if(is_array($genre) && count($genre)>0){
    		$slug = $genre[0]->$slug;
    		$post_link = str_replace('%genre%', $slug, $post_link);
    	}else{
    		$slug = 'generic';
    		$post_link = str_replace('%genre%', $slug, $post_link);
    	}
    }
    return $post_link;
}
add_filter("post_type_link", "philosophy_cpt_slug_fix", 1, 2);
```
