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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- SLICK CAROUSEL START  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>