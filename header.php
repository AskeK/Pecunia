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
                <div class="icon fb">
                    <svg>
                    <use xlink:href="#icon-facebook"></use>
                    </svg>
                </div>
                <div class="icon linkedin">
                    <svg viewBox="0 0 18 18">
                    <use xlink:href="#icon-linkedin"></use>
                    </svg>
                </div>
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
                    <div class="number">+45 12 34 56 78</div>
                </div>
            </div>
        </div>
        
        <!-- Logo -->
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/style/images/logo.png' ?>" class="logo-img" />
        </div>
        
        <!-- Nav -->
        <nav id="navigation">
            <div class="hamburger">
                <div class="hamburger-inner">
                    <div class="hmline hmline1"></div>
                    <div class="hmline hmline2"></div>
                    <div class="hmline hmline3"></div>
                </div>
            </div>
            <div class="content">
                <div class="menu-elem active"><a href="#">Om os</a></div>
                <div class="menu-elem"><a href="#">Bogholderi</a></div>
                <div class="menu-elem"><a href="#">Regnskab</a></div>
                <div class="menu-elem"><a href="#">Økonomistyring</a></div>
                <div class="menu-elem"><a href="#">Iværksætter</a></div>
                <div class="menu-elem"><a href="#">Kontakt</a></div>
            </div>
        </nav>
        
        <div class="breakline"><div class="overlays"></div></div>
    </header>