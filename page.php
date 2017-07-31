<?php get_header(); ?>

    <div id="staticBody">
       <?php if(have_posts()): while(have_posts()): the_post(); ?>
               <div id="staticText">
                   <?php the_content(); ?>
               </div>
       <?php endwhile;endif; ?>
    </div><!--content-->

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>
    
<?php get_footer(); ?>
