# Code Star Meta Box

```

define('CS_ACTIVE_FRAMEWORK', false); 
define('CS_ACTIVE_METABOX', true); 
define('CS_ACTIVE_TAXONOMY', false); 
define('CS_ACTIVE_SHORTCODE', false); 
define('CS_ACTIVE_CUSTOMIZE', false); 
define('CS_ACTIVE_LIGHT_THEME', true);

// when remove sample config file, then for showing our metabox code below
function philosophy_metabox_init() {

    CSFramework_Metabox::instance( array() );
}
add_action("init", "philosophy_metabox_init");

```
