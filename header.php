<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo bloginfo('name') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_template_part('svg'); ?>
    
    <div id="main-container">
    
    <!-- Header -->
    <header id="topbar">
        
        <!-- Contact-->
        <div class="contact">
            <div class="icons">
                <!--<div class="icon fb">
                    <svg>
                    <use xlink:href="#icon-facebook"></use>
                    </svg>
                </div>
                <div class="icon linkedin">
                    <svg viewBox="0 0 18 18">
                    <use xlink:href="#icon-linkedin"></use>
                    </svg>
                </div>-->
                <div class="icon mail">
                    <svg viewBox="0 0 18 18">
                        <use xlink:href="#icon-mail"></use>
                    </svg>
                </div>
            </div>
            
            <div class="phone-outer">
                <div class="phone-inner">
                    <div class="phone-icon">
                        <svg viewBox="0 0 48 48">
                        <use xlink:href="#icon-phone"></use>
                        </svg>
                    </div>
                    <a href="<?php echo 'tel://' . get_theme_mod( 'phone' ); ?>" class="number" style="text-decoration:none">
                        <?php echo get_theme_mod( 'phone' ); ?>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Logo -->
        <div class="logo">
            <div class="icon">
                <svg viewBox="0 0 196 196">
                    <use xlink:href="#logo-icon"></use>
                </svg>
            </div>
            <div class="text">
                <svg viewBox="0 0 196 196">
                    <use xlink:href="#logo-text"></use>
                </svg>
            </div>
        </div>
        
        <!-- Nav -->
        <nav id="navigation">
            <div id="hamburger">
                <div class="hamburger-inner">
                    <div class="hmline hmline1"></div>
                    <div class="hmline hmline2"></div>
                    <div class="hmline hmline3"></div>
                </div>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'fallback_cb' => null,
                'container' => false,
                'menu_class' => 'content',
            )); ?>
        </nav>
        
        <div class="breakline"><div class="overlays"></div></div>
    </header>
