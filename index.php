<?php
/**
 * The main template file
 *
 */

get_header();

while(have_posts()){
    the_post();
    echo the_title();
    echo the_content();
}
?>




<?php get_footer() ?>