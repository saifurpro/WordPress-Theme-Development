# Remove Category Description wpautop – Remove p tag


## Remove p tag
### Add this code on Functions.php

```
<?php 
  remove_action("term_description", "wpautop");
?>
```
