<?php get_header(); ?>

    <div id="pageBody">
        <div id="thumbnail">
          <?php
              $img = get_field('thumbnail');
              $imgurl = wp_get_attachment_image_src($img);
              if($imgurl){
          ?>
          <img src="<?php echo $imgurl[0]; ?>">
          <?php } ?>
        </div>

        <div id="bookDetail">

            <div id="detailTitle"><?php the_title(); ?></div>

            <div id="detailAuthor">
            <?php
                $txt = get_field('author');
                if($txt){ ?>
                          Author: <?php echo $txt;
                        } ?>
            </div>

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
        </div>

        <?php $page = get_query_var('page'); ?>
        <?php var_dump($page);?>

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
                     <?php wp_link_pages(); ?>
                 </div>
            <?php endwhile;endif; ?>
            <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>
        </div><!--content-->

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

<?php get_footer(); ?>
