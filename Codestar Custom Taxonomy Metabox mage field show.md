# Codestar Custom Taxonomy Metabox (image field show)

``` 
<?php   

define('CS_ACTIVE_TAXONOMY', true);

function _text_domain_csf_metabox() {
	CSFramework_Taxonomy::instance(array());
}
add_action('init', '_text_domain_csf_metabox');

?>
```


```
<?php 

$term = get_queried_object();
$term_meta = get_term_meta($term->term_id,'language_featured_image', true); // options id here

if(isset($term_meta['featured_image']) && $term_meta['featured_image']>0){ // field id here
	echo wp_get_attachment_image($term_meta['featured_image'], 'large');
}

?>
```
