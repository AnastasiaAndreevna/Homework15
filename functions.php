<?php
/**
 * Panakeia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Panakeia
 */

if (!function_exists('panakeia_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function panakeia_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Panakeia, use a find and replace
         * to change 'panakeia' to the name of your theme in all the template files.
         */
        load_theme_textdomain('panakeia', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'header_menu' => 'Header menu'
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'gallery',
        ));


        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('panakeia_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 28,
            'width' => 157,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'panakeia_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function panakeia_content_width()
{
    $GLOBALS['content_width'] = apply_filters('panakeia_content_width', 640);
}

add_action('after_setup_theme', 'panakeia_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function panakeia_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'panakeia'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'panakeia'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'panakeia_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function panakeia_scripts()
{
    wp_enqueue_style('panakeia-style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_style('RobotoSlab', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab');


}

add_action('wp_enqueue_scripts', 'panakeia_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function panakeia_customize_register($wp_customize)
{
    $wp_customize->add_setting( '1_link' , array(
        'default'   => 'Ad litora torquent',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '2_link' , array(
        'default'   => 'Per conubia',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '3_link' , array(
        'default'   => 'Nostra',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '4_link' , array(
        'default'   => 'Per inceptos',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '5_link' , array(
        'default'   => 'Himenaeos',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '6_link' , array(
        'default'   => 'In consectetur',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '7_link' , array(
        'default'   => 'Taciti sociosqu',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '8_link' , array(
        'default'   => 'Taciti sociosqu',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '9_link' , array(
        'default'   => 'Per conubia',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '10_link' , array(
        'default'   => 'Himenaeos',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '11_link' , array(
        'default'   => 'In consectetur',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '12_link' , array(
        'default'   => 'Nisi sed blandit',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '13_link' , array(
        'default'   => 'Tincidunt',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '14_link' , array(
        'default'   => 'Nostra',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '15_link' , array(
        'default'   => 'Per inceptos',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '16_link' , array(
        'default'   => 'Himenaeos',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '17_link' , array(
        'default'   => 'In consectetur',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '18_link' , array(
        'default'   => 'Nisi sed blandit',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( '19_link' , array(
        'default'   => 'Tincidunt',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'file-upload' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'footer-copy' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'links_section' , array(
        'title'      => __( 'Links settings', 'panakeia' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_section( 'footer_bg' , array(
        'title'      => __( 'Footer backgroud', 'panakeia' ),
        'priority'   => 31,
    ) );

    $wp_customize->add_section( 'footer_copyright' , array(
        'title'      => __( 'Footer copyright', 'panakeia' ),
        'priority'   => 32,
    ) );

    $wp_customize->add_control(
        '1_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '1_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '2_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '2_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '3_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '3_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '4_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '4_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '5_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '5_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '6_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '6_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '7_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '7_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '8_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '8_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '9_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '9_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '10_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '10_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '11_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '11_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '12_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '12_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '13_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '13_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '14_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '14_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '15_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '15_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '16',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '16_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '17_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '17_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '18_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '18_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        '19_link',
        array(
            'label'    => __( 'Name of the dish', 'panakeia' ),
            'section'  => 'links_section',
            'settings' => '19_link',
            'type'     => 'text',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'file-upload',
            array(
                'label' => 'File Upload',
                'section' => 'footer_bg',
                'settings' => 'file-upload'
            )
        )
    );

    $wp_customize->add_control(
        'footer-copy',
        array(
            'label'    => __( 'Footer copy', 'panakeia' ),
            'section'  => 'footer_copyright',
            'settings' => 'footer-copy',
            'type'     => 'textarea',
        )
    );
}
add_action('customize_register', 'panakeia_customize_register');


