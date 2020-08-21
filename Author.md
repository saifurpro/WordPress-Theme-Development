# All Code for Athor

## author link
```
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID")));?>">
   <?php the_author(); ?>
</a>
```

## Clickable Author to show author post
```
<?php the_author_posts_link(); ?>
```

## display name
```
<?php the_author(); ?>
```

## Biographical info
```
<?php the_author_meta("description");?>
```

```
<?php 
  echo get_avatar( get_the_author_meta("ID") );
  echo "<br />";
  echo "<b>Nickname: </b>" . get_the_author_meta("nickname");
  echo "<br />";
  echo "<b>Nice Name: </b>" . get_the_author_meta("nicename");
  echo "<br />";
  echo "<b>About Me: </b>" . get_the_author_meta("description");
  echo "<br />";
  echo "<b>Email: </b>" . get_the_author_meta("user_email");
?>
```

# Social Profile by Advance Custom Field (ACF)
```
<?php if(function_exists("get_field")):?>
   <ul class="s-content__author-social">
     <?php 
        $philosophy_facebook = get_field("facebook", "user_".get_the_author_meta("ID"));
        $philosophy_twitter = get_field("twitter", "user_".get_the_author_meta("ID"));
        $philosophy_gplus = get_field("google_plus", "user_".get_the_author_meta("ID"));
        $philosophy_instagram = get_field("instagram", "user_".get_the_author_meta("ID"));
      ?>

      <?php if($philosophy_facebook): ?>
        <li>
           <a href="<?php echo esc_url($philosophy_facebook); ?>" target="_blank">
              <?php _e("Facebook", "philosophy"); ?>
            </a>
         </li>
       <?php endif; ?>

        <?php if($philosophy_twitter): ?>
              <li><a href="<?php echo esc_url($philosophy_twitter); ?>" target="_blank"><?php _e("Twitter", "philosophy"); ?></a></li>
         <?php endif; ?>

         <?php if($philosophy_gplus): ?>
            <li><a href="<?php echo esc_url($philosophy_gplus); ?>" target="_blank"><?php _e("Google Plus", "philosophy"); ?></a></li>
         <?php endif; ?>

         <?php if($philosophy_instagram): ?>
            <li><a href="<?php echo esc_url($philosophy_instagram); ?>" target="_blank"><?php _e("Instagram", "philosophy"); ?></a></li>
         <?php endif; ?>
   </ul>
<?php endif; ?>
```
