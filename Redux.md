### Disable Developer Mode for Redux Framework

```
unset(Redux_Core::$server['REMOTE_ADDR']);
```
And
```
$args = array(
    'dev_mode' => false,
);
```

### Prevent Error if Redux Framework is Inactive
###### Use the Function to functions.php
```
function get_option_value($opt_name, $key) {
    if (class_exists('Redux')) {
        return Redux::get_option($opt_name, $key);
    } else {
        return;
    }
}
```

### Get the Output from Theme Option
```
<?php

  echo get_option_value("astra_redux", "field-id");

?>
```

