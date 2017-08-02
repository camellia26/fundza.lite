<?php get_header(); ?>

    <div id="pageBody">
        <div id="welcomeMessage">
            <!-- Random Message -->
            <div id="message">
            <script>
                //Message can be added to the array. Like "How do you do?". Don't forget conma(,) after each messages except for last one.
                var mbox = ["Welcome to our Offline Library!",
                            "How's it going?",
                            "Hello :)"];
                var mssg = mbox[Math.floor(Math.random() * mbox.length)];
                document.write(mssg);
            </script>
            </div>
        </div>

        <div id="newCollections">
            <div class="collections">New Collections</div>
                <div class="collectionArray">
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                </div>
            <div class="seeMore"><a href="<?php echo home_url('/collections'); ?>">See more</a></div>
        </div>
        
        <div id="ourVision">
            <div id="fundzaPolicy">Reading Changes Lives :&#041;</div>
        </div>

        <div id="popularCollections">
            <div class="collections">Popular</div>
                <div class="collectionArray">
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></a></span>
                </div>
            <div class="seeMore"><a href=""<?php echo home_url('/collections'); ?>>See more</a></div>
        </div>
    </div>

    <div id="pageTopLink"><a href="#">&#x25B2;Back to top</a></div>
    
<?php get_footer(); ?>
