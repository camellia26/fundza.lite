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

        <div id="staticBody">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                 <div id="staticText">
                     <?php the_content(); ?>
                </div>
            <?php endwhile;endif; ?>
        </div><!--content-->

        <div id="buttons">
            <a href="#" id="readButton">Read on the page</a>
            <?php $file = get_field('pdf');
                  if($file){ ?> <a href="<?php echo $file; ?>" target="_blank" id="downloadButton">Download as pdf</a>
                     <?php } ?>
        </div>
        <div style="clear:both;"></div>
    </div>

<?php get_footer(); ?>
