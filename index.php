<?php get_header(); ?>

    <div id="pageBody">
        <div id="sortFunction">
            <select onChange="location.href=value;">
                <option value="">Sort by</option>
                <option value="<?php echo add_query_arg( array('order' => 'DESC') ); ?>">New</option>
                <option value="<?php echo add_query_arg( array('order' => 'ASC') ); ?>">Old</option>
                <option value="<?php echo add_query_arg( array('meta_key' => 'views', 'orderby' => 'meta_value_num', 'order' => 'DESC') ); ?>">Popular</option>
            </select>
            <?php wp_dropdown_categories('show_count=0&show_option_none=Choose Category'); ?>
            <script type="text/javascript"><!--
                var dropdown = document.getElementById("cat");
                function onCatChange() {
		              if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			                 location.href = "<?php echo get_option('home'); ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		                             }
                                 }
                           dropdown.onchange = onCatChange;
            --></script>
        </div>

        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div id="bookSection">
                        <div id="bookThumb">
                            <?php
                                $img = get_field('thumbnail');
                                $imgurl = wp_get_attachment_image_src($img);
                                if($imgurl){
                            ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $imgurl[0]; ?>"></a>
                            <?php } ?>
                        </div>
                        <div id="bookInfo">
                            <div id="indexTitle"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
                            <div id="indexAuthor"><?php echo get_field('author'); ?></div>
                            <div id="indexRate">
                                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                            </div>
                            <div id="indexDate"><?php echo get_the_date(); ?></div>
                            <div id="indexTags"><?php the_tags('',' '); ?></div>
                        </div>
                    </div>

                    <script>
                        document.getElementById("rateOtherElements").style.display="none";
                    </script>

                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>There is no posts.</p>
        <?php endif; ?>

    </div>

    <?php wp_pagenavi(); ?>

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>

    <!-- top button -->
    <p class="pagetop">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topButton.png" class="topButton" alt="Back to top">
        </a>
    </p>

<?php get_footer(); ?>
