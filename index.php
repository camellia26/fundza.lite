<?php get_header(); ?>

    <div id="pageBody">
        <div id="sortFunction"><a href="#">&#x25BC;Sort by &#91; new &#47; popoular &#47; old &#93;</a></div>

        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php echo get_the_date(); ?>
                    <?php the_permalink(); ?>
                    <?php echo get_the_title(); ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <p>There is no posts.</p>
        <?php endif; ?>

    </div>

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>

<?php get_footer(); ?>
