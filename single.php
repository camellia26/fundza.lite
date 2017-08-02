<?php get_header(); ?>

    <div id="pageBody">
        <div id="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></div>
        <div id="bookDetail">
            Title Title Title<br>
            Author Author Author<br>
            Abstract Abstract Abstract<br>
            Tag Tag Tag
        </div>

        <div id="staticBody">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                 <div id="staticText">
                     <?php the_content(); ?>
                </div>
            <?php endwhile;endif; ?>
        </div><!--content-->

        <div id="buttons">
            <a href="#" id="readButton">Read on the page</a>
            <a href="#" id="downloadButton">Download as pdf</a>
        </div>
        <div style="clear:both;"></div>
    </div>

<?php get_footer(); ?>
