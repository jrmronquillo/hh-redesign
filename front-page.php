<?php /* Template name: front-page */ ?>

<?php get_header(); ?>
<div class="cover-container d-flex w-100 h-100 mx-auto flex-column">



    <main role="main" class="inner cover blurry-city-bg">
        <header class="header-style"></header>
                <span class="main-text indie-google-font"> <?php the_title() ?></span>
                <div class="">
                    <button type="button" class=" btn btn-outline-warning button-custom ">
                        <a href='<?php echo site_url('/portfolio/') ?>'> <div class="button-text indie-google-font"> Portfolio </div> </a>
                    </button>
                </div>
            <button type="button" class="btn btn-outline-warning cta-margin">
                <a href="http://instagram.com/highlighthumble"> <div class="button-text indie-google-font"> Instagram </div></a>
            </button>
    </main>

</div>
</

<!--<?php
    //get_footer();

?> -->
