# date.php – day month yearly archive

```

<?php 
// date.php template
    $month = esc_html(get_query_var("monthnum"));
    $day = esc_html(get_query_var("day"));
    $year = esc_html(get_query_var("year"));

    if( is_month() ) {
        $obj = DateTime::createFromFormat("!m", $month);
        echo $obj->format("F");
    }else if( is_year() ){
        echo $year;
    }else if( is_day() ) {
        printf("%s / %s / %s", $day, $month, $year);
    }
?>

```
