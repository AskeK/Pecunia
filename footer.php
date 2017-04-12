    
    <footer>
        <div class="inner">
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

            <div class="contact">
                <?php echo get_theme_mod('company_name'); ?><br />
                <?php echo get_theme_mod('address'); ?><br />
                <?php echo get_theme_mod('city'); ?><br />
                Tlf.: <?php echo get_theme_mod('phone'); ?><br />
                <?php echo get_theme_mod('mail'); ?><br />
                Copyright &copy; <?php echo get_theme_mod('company_name') . ' ' . date('Y'); ?>
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
    <?php wp_footer(); ?>
</body>
</html>
