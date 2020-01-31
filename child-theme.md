## Reference
https://developer.wordpress.org/themes/advanced-topics/child-themes/

### 1. Create a Child Theme
```
First, create a new folder in your themes directory, located at wp-content/themes

themename-child
```
.![](https://imgur.com/Wpzyg4M.png)

### 2. Create a Stylesheet
```
/*
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twentyfifteenchild
*/
```


### 3. Create functions.php & Enqueue stylesheet
```
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

```


```

if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}

```
