<?php get_header(); ?>
    <?php $page = get_query_var('page'); ?>

    <div id="pageBody">
        <?php if($page == 0){ ?>
        <div id="thumbnail">
          <?php
              $img = get_field('thumbnail');
              $imgurl = wp_get_attachment_image_src($img);
              if($imgurl){
          ?>
          <img src="<?php echo $imgurl[0]; ?>">
          <?php } ?>
        </div>
        <?php } ?>

        <div id="bookDetail">
            <div id="detailTitle"><?php the_title(); ?></div>

            <div id="detailAuthor">
            <?php
                $txt = get_field('author');
                if($txt){ ?>
                          Author: <?php echo $txt;
                        } ?>
            </div>

            <?php if($page == 0){ ?>
            <div id="detailAbstract">
            <?php
                $area = get_field('abstract');
                if($txt){ echo $area; } ?>
            </div>

            <div id="detailDate">
            <?php
                $date = get_post_time("F jS / Y");
                if($date){ ?>
                           Publish: <?php echo $date;
                         } ?>
            </div>

            <div id="detailTags"><?php the_tags('',' '); ?></div>
            <?php } ?>
        </div>

        <?php if($page == 0){?>
            <div id="buttons">
                <form id="readButton">
                    <input type="button" value="Read on the page" onclick="showContent(1)">
                </form>
                <script>
                    function showContent(num){
                        if (num == 1){
                            document.getElementById("staticContentBody").style.display="block";
                            document.getElementById("staticContentText").style.display="block";
                        }
                    }
                </script>

                    <?php $file = get_field('pdf');
                        if($file){ ?> <a href="<?php echo $file; ?>" target="_blank" id="downloadButton">Download as pdf</a>
                           <?php } ?>
            </div>
        <?php } ?>

        <div style="clear:both;"></div>

        <div id="staticContentBody">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                 <div id="staticContentText">
                     <?php the_content(); ?>
                     <?php wp_link_pages('before=<p id="pagelink">Chapter:'); ?>
                 </div>
            <?php endwhile;endif; ?>
            <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>
        </div><!--content-->

        <!-- Show contents on following chapters -->
        <?php if($page != 1){ ?>
            <script>
                document.getElementById("staticContentBody").style.display="block";
                document.getElementById("staticContentText").style.display="block";
            </script>
        <?php } ?>

    </div>

    <!-- top button -->
    <p class="pagetop">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topButton.png" class="topButton" alt="Back to top">
        </a>
    </p>

    <!-- Rate and Comment Templates. Only shown on the last page -->
    <?php if( count( $pages ) == 1 || count( $pages ) == get_query_var( 'page' )){ ?>
        <div class="ratings"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
        <?php comments_template(); ?>
    <?php } ?>

<?php get_footer(); ?>
