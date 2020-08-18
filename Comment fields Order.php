<?php 

//Comment fields Order
// functions.php

function halim_comment_filed( $fields ) {
    $comment = $fields['comment'];
    $author = $fields['author'];
    $email = $fields['email'];
    $url = $fields['url'];
    $cookies = $fields['cookies'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    
    $fields['author'] = $author;
    $fields['email'] = $email;
    $fields['url'] = $url;
    $fields['comment'] = $comment;
    $fields['cookies'] = $cookies;
    
    return $fields;
}
add_filter( 'comment_form_fields', 'halim_comment_filed' );



