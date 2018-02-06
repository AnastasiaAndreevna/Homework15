<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Panakeia
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <section class="links-background">
            <div class="container clearfix">
                <ul>
                    <li><a href="#"><?php echo get_theme_mod('1_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('2_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('3_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('4_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('5_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('6_link')?></a></li>
                </ul>
                <ul>
                    <li><a href="#"><?php echo get_theme_mod('7_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('8_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('9_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('10_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('11_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('12_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('13_link')?></a></li>
                </ul>
                <ul>
                    <li><a href="#"><?php echo get_theme_mod('14_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('15_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('16_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('17_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('18_link')?></a></li>
                    <li><a href="#"><?php echo get_theme_mod('19_link')?></a></li>
                </ul>
            </div>
        </section>
        <section>
            <div class="footer-background" style="background: url(<?php echo get_theme_mod('file-upload'); ?>;) no-repeat bottom center/cover; margin-top: -19px">
                <p class="paragraphs"><?php echo get_theme_mod('footer-copy')?></p></div>
            </div>
        </section>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
