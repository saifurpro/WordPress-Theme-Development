# Comments.php File Code

```
<div class="theme-name-widget-heading">
    <h2>
        <?php 
        $ritekhed_cn = get_comments_number();
        if($ritekhed_cn<=1){
            echo $ritekhed_cn." ".__("Comment", "text-domain");
        }else{
            echo $ritekhed_cn." ".__("Comments", "text-domain");
        }
        ?>
    </h2>
</div>

<div id="theme-name-comments">
    <?php 
      wp_list_comments(); 

      if(! comments_open()){
        _e("Comments are closed", "text-domain");
      }
    ?>
</div>

<div class="theme-name-contact-form">
    <?php comment_form(
          array(
              'title_reply' => 'Add Comment',
          )
       ); 
    ?>
</div>
```

## This code will be in single.php
```
<?php 
if(! post_password_required() && comments_open() ){
   comments_template();
} 
?>
```

## Single.php by TwentyTwenty Theme
```
  
<?php  

if ( ( is_single() || is_page() ) && 
( comments_open() || get_comments_number() ) && ! post_password_required() ) {
    ?>

    <div class="comments-wrapper section-inner">

        <?php comments_template(); ?>

    </div><!-- .comments-wrapper -->

    <?php
}
?>

```
