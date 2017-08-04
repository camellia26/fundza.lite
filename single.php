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

            <?php the_title(); ?><br>

            <?php
                $txt = get_field('author');
                if($txt){ ?>
                          Author: <?php echo $txt;
                        } ?><br>

            <?php
                $area = get_field('abstract');
                if($txt){ echo $area; } ?><br>

            <?php the_tags(); ?>
        </div>

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
        <div style="clear:both;"></div>

        <div id="staticContentBody">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                 <div id="staticContentText">
                     <?php the_content(); ?>
                </div>
            <?php endwhile;endif; ?>
            <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>
        </div><!--content-->

    </div>

<?php get_footer(); ?>
