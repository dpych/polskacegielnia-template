<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
</div><!-- #content -->

<footer  class="site-footer" role="contentinfo">
    <div class="row">
        <nav class="navbar navbar-default col-md-8" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
        <div class="container col-md-1 col-md-offset-3">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/kafle/how_order.png">
        </div>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>