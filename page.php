<?php get_header(); ?>

    <div id="staticBody">
       <?php if(have_posts()): while(have_posts()): the_post(); ?>
               <div id="staticText">
                   <?php the_content(); ?>
               </div>
       <?php endwhile;endif; ?>
    </div><!--content-->

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>

    <!-- top button -->
    <p class="pagetop">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topButton.png" class="topButton" alt="Back to top">
        </a>
    </p>

<?php get_footer(); ?>
