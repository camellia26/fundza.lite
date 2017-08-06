<?php get_header(); ?>

    <div id="pageBody">
        <div id="sortFunction">
            <select onChange="location.href=value;">
                <option value="">Sort by</option>
                <option value="<?php echo add_query_arg( array('order' => 'DESC') ); ?>">New</option>
                <option value="<?php echo add_query_arg( array('order' => 'ASC') ); ?>">Old</option>
                <option value="<?php /*echo add_query_arg( array('meta_key' => 'views', 'orderby' => 'meta_value_num', 'order' => 'DESC') ); */ ?>">Popular</option>
            </select>
        </div>
        <?php echo?>

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
                            <div id="indexDate"><?php echo get_the_date(); ?></div>
                            <div id="indexTags"><?php the_tags('',' '); ?></div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>There is no posts.</p>
        <?php endif; ?>

    </div>

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>

<?php get_footer(); ?>
