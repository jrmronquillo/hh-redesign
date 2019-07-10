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
        <div class="post-title-container">
            <span class="post-title"><?php the_title(); ?> </span>
        </div>
        <p><?php the_content(); ?></p>
    </div>
<?php }


get_footer() ?>