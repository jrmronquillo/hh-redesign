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
            <button type="button" class="btn btn-outline-warning cta-margin small-bottom-margin">
                <a href="http://instagram.com/highlighthumble"> <div class="button-text indie-google-font"> Instagram </div></a>
            </button>
            <div class="sub-text-container">
                <span class="main-sub-text">
                Photographer | Los Angeles | <a href="mailto: jerome@highlighthumblephotography.com">Book Now 2019</a>
                </span>
            </div>

        <div class="social-bar">
        	<i class="color-white fas fa-cookie "></i>
            <a href="http://twitter.com/highlighthumble"><i class="color-white fab fa-twitter-square"></i></a>
            <a href="http://instagram.com/highlighthumble"><i class="color-white fab fa-instagram"></i></a>
            <a href="mailto: jerome@highlighthumblephotography.com"><i class="far fa-envelope"></i></a>
        </div>
    </main>

</div>
</

<!--<?php
    //get_footer();

?> -->
