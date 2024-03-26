<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orionstars
 */
?>
<footer>
    <div class="container">
        <div class="row">
            <img class="bg-img" src="https://orion.firekirinwebsite.com/wp-content/uploads/2024/03/footer-text.png">
            <?php
            echo  wp_nav_menu(
                array(
                    'menu'              => 'footer-menu',
                    'depth'             => 3,
                )
            );
            ?>
            <div class="foo-logo">
                <img src="<?php echo of_get_option('flogo') ?>" alt="footer-logo" />
            </div>
            <div class="foo-bottom-content">
                <p> <?php echo of_get_option('foo-bottom-content') ?></p>
            </div>
            <div class="copyright">
                <div>Copyright <script>
                        document.write(/\d{4}/.exec(Date())[0])
                    </script>, Web Orion Stars. All Rights Reserved.</div>
                <div>Made with ❤️ in Las Vegas.</div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/sticky-header.js"></script>
<script></script>
</body>
</html>