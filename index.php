<?php
/**
 * The main template file
 *
 */

get_header();

while(have_posts()){
    the_post();
    ?>
    <div class="post-section">
        <h1><?php the_title(); ?> </h1>
        <p><?php the_content(); ?></p>
    </div>
<?php }


get_footer() ?>