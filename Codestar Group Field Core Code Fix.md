# Codestar Group Field Core Code Fix

```
<?php   


if($field_id == 'featured_posts'){ // change the id name
	$title = get_the_title($this->value[$key][$field_id]);
}
```
