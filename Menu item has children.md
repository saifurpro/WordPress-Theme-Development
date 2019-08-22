# Menu Item Has Childer

### Method #1 (By PHP)
```
<?php 
     $_text_domain_menu = wp_nav_menu( 
        array( 
           'theme_location' => 'primary', 
            'menu_class'=> 'header__nav',
             'menu_id'=> 'primary_menu',
             'echo'   => false,
       ) 
    );

    $_text_domain_menu = src_replace("menu-item-has-children", "menu-item-has-children my_class_name", $_text_domain_menu); 

    echo $_text_domain_menu;

?>
```

### Method #2 (By jQuery)
```
;(function($){
	"use strict";
	
	jQuery(document).ready(function($){
 
          /**
          * Remove has-children and replace with own class
          **/
          $('ul li:has(ul)').addClass('has-children');
 
 
	});
	
	
	jQuery(window).on("load", function(){
		
	});
	
}(jQuery));
```
