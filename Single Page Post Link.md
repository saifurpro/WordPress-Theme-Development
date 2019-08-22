
# Single Page Previous Next Post link

## Previous post link
```
<?php 
   $_text_domain_name_prev_post = get_previous_post();
   if($_text_domain_name_prev_post):
?>
   <div class="s-content__prev">
        <a href="<?php echo get_the_permalink($_text_domain_name_prev_post);?>" rel="prev">
            <span><?php _e("Previous Post", "_text_domain_name"); ?></span>
            <?php echo get_the_title($_text_domain_name_prev_post); ?> 
         </a>
   </div>
<?php endif; ?>
```

## Next Post Link
```
<?php $_text_domain_name_next_post = get_next_post();
   if($_text_domain_name_next_post):
?>
   <div class="s-content__next">
       <a href="<?php echo get_the_permalink($_text_domain_name_next_post)?>" rel="next">
          <span><?php _e("Next Post", "_text_domain_name"); ?></span>
          <?php echo get_the_title($_text_domain_name_next_post); ?> 
        </a>
    </div>
<?php endif; ?>
```
