
<?php 

if(site_url() == " ") {
    define("THEME_NAME_VERSION", time() );
} else {
    define("THEME_NAME_VERSION", wp_get_theme() -> get("Version") );
}

