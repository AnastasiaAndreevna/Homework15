<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Panakeia
 */

get_header(); ?>
    <main>
        <section style="background: url(<?php echo get_theme_mod('main_bg'); ?>;) no-repeat top center / cover">
            <div class="container">
                <div class="title">
                    <h1><?php echo get_theme_mod('main_heading')?></h1>
                </div>
                <a href="<?php echo get_theme_mod('buttons1_link')?>" class="button-read"><?php echo get_theme_mod('buttons1_text')?></a>
            </div>
        </section>
    </main>
<?php
get_sidebar();
get_footer();
