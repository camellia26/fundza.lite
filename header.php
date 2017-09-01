<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta content="<?php bloginfo('description'); ?>">
    <meta name="author" content="FunDza Literacy Trust">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>

    <!-- top button -->
        <script>
        $(document).ready(function() {
            var pagetop = $('.pagetop');
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    pagetop.fadeIn();
                } else {
                    pagetop.fadeOut();
                    }
                });
                pagetop.click(function () {
                    $('body, html').animate({ scrollTop: 0 }, 500);
                    return false;
                });
            });
        </script>

<?php wp_head(); ?>
</head>

<body>
    <header id="pageHeader">
        <div id="topBar">
            <div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png"></a></div>
            <!-- Hamberger Menu -->
            <input id="menu-cb" type="checkbox" value="off">
            <label id="menu-icon" for="menu-cb">≡</label>
            <label id="menu-background" for="menu-cb"></label>
            <div id="ham-menu">
                <div class="hamElements"><a href="<?php echo home_url(); ?>">HOME</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/collections') ?>">COLLECTION</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/about') ?>">ABOUT</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/terms') ?>">T &amp; Cs</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/contact') ?>">CONTACT US</a></div>
            </div>
            <div style="clear:both"></div>
        </div>
    </header>
