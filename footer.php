    
    <footer>
        <div class="inner">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/style/images/logo.png' ?>" />
            </div>

            <div class="contact">
                Pecunia Optimus ApS<br />
                Jacob Appels Allé 89<br />
                2770 Kastrup<br />
                Tlf.: 12 34 56 78<br />
                sje@pecunia-optimus.dk<br />
                pecunia-optimus.dk
            </div>

            <div class="menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'fallback_cb' => null,
                    'container' => false,
                    'menu_class' => 'content',
                )); ?>
            </div>
        </div>
    </footer>
    
    </div>
    <script src="<?php echo get_template_directory_uri() . '/js/build/bundle.js' ?>"></script>
    <?php wp_footer(); ?>
</body>
</html>