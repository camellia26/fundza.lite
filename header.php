<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta content="<?php bloginfo('description'); ?>">
    <meta name="author" content="FunDza Literacy Trust">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
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
                <div class="hamElements"><a href="<?php echo home_url(); ?>">TOP</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/collections') ?>">COLLECTIONS</a></div>
                <div class="hamElements"><a href="<?php echo home_url('/about') ?>">ABOUT</a></div>
            </div>
            <div style="clear:both"></div>
        </div>
    </header>
