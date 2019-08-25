# PHP to Javascript Code Transfer

```
<?php 

function my_scripts() {

    wp_enqueue_script("my-script", get_template_directory_uri() . "/assets/js/main.js", array("jquery"), "1.0", true);

    $day = get_post_meta(get_the_ID(), "day", true);
    $month = get_post_meta(get_the_ID(), "month", true);
    $year = get_post_meta(get_the_ID(), "year", true);

    // wp_localize_script
    wp_localize_script( "my-script", "datedata", array(
        "day" => $day,
        "month" => $month,
        "year" => $year,
    ) );
}
add_action("wp_enqueue_scripts", "my_scripts");

?>
```

```

;(function( $ ) {
	'use strict';

	var countDown = function() {
		console.log(datedata);

		simplyCountdown('.simply-countdown-one', {
			year: datedata.year,
			month: datedata.month,
			day: datedata.day
		});

	};


})( jQuery );

```
