<?php
/**
 * Panakeia Theme Customizer
 *
 * @package Panakeia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function panakeia_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'panakeia_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'panakeia_customize_partial_blogdescription',
        ));
    }


    $wp_customize->add_section('links_section', array(
        'title' => __('Links settings', 'panakeia'),
        'priority' => 30,
    ));

    $wp_customize->add_section('footer_bg', array(
        'title' => __('Footer backgroud', 'panakeia'),
        'priority' => 31,
    ));

    $wp_customize->add_section('footer_copyright', array(
        'title' => __('Footer copyright', 'panakeia'),
        'priority' => 32,
    ));

    $wp_customize->add_section('main_title', array(
        'title' => __('Main title', 'panakeia'),
        'priority' => 25,
    ));

    $wp_customize->add_section('main_background', array(
        'title' => __('Main background', 'panakeia'),
        'priority' => 26,
    ));

    $wp_customize->add_section('buttons', array(
        'title' => __('Buttons read more', 'panakeia'),
        'priority' => 27,
    ));

    $wp_customize->add_section('titles', array(
        'title' => __('Titles', 'panakeia'),
        'priority' => 28,
    ));

    $wp_customize->add_section('sign_up', array(
        'title' => __('Buttons sign up', 'panakeia'),
        'priority' => 29,
    ));

    $wp_customize->add_setting('1_link', array(
        'default' => 'Ad litora torquent',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('2_link', array(
        'default' => 'Per conubia',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('3_link', array(
        'default' => 'Nostra',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('4_link', array(
        'default' => 'Per inceptos',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('5_link', array(
        'default' => 'Himenaeos',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('6_link', array(
        'default' => 'In consectetur',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('7_link', array(
        'default' => 'Taciti sociosqu',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('8_link', array(
        'default' => 'Taciti sociosqu',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('9_link', array(
        'default' => 'Per conubia',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('10_link', array(
        'default' => 'Himenaeos',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('11_link', array(
        'default' => 'In consectetur',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('12_link', array(
        'default' => 'Nisi sed blandit',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('13_link', array(
        'default' => 'Tincidunt',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('14_link', array(
        'default' => 'Nostra',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('15_link', array(
        'default' => 'Per inceptos',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('16_link', array(
        'default' => 'Himenaeos',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('17_link', array(
        'default' => 'In consectetur',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('18_link', array(
        'default' => 'Nisi sed blandit',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('19_link', array(
        'default' => 'Tincidunt',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('file-upload', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('footer-copy', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('main_heading', array(
        'default' => 'Integer at tortor ut magna finibus lobortis sed quis tellus.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('main_bg', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('buttons1_text', array(
        'default' => 'Read more',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('buttons1_link', array(
        'default' => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('title_section1', array(
        'default' => 'Our news',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('title_section2', array(
        'default' => 'Newsletter',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('buttons2_text', array(
        'default' => 'Sign up',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('buttons2_link', array(
        'default' => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        '1_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '1_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '2_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '2_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '3_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '3_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '4_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '4_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '5_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '5_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '6_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '6_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '7_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '7_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '8_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '8_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '9_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '9_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '10_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '10_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '11_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '11_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '12_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '12_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '13_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '13_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '14_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '14_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '15_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '15_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '16_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '16_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '17_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '17_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '18_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '18_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        '19_link',
        array(
            'label' => __('Name of the dish', 'panakeia'),
            'section' => 'links_section',
            'settings' => '19_link',
            'type' => 'text',
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
            'label' => __('Footer copy', 'panakeia'),
            'section' => 'footer_copyright',
            'settings' => 'footer-copy',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_control(
        'main_heading',
        array(
            'label' => __('Main heading', 'panakeia'),
            'section' => 'main_title',
            'settings' => 'main_heading',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'main_bg',
            array(
                'label' => 'File Upload',
                'section' => 'main_background',
                'settings' => 'main_bg'
            )
        )
    );

    $wp_customize->add_control(
        'buttons1_text',
        array(
            'label' => __('Buttons text', 'panakeia'),
            'section' => 'buttons',
            'settings' => 'buttons1_text',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'buttons1_link',
        array(
            'label' => __('Buttons link', 'panakeia'),
            'section' => 'buttons',
            'settings' => 'buttons1_link',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'title_section1',
        array(
            'label' => __('Title', 'panakeia'),
            'section' => 'titles',
            'settings' => 'title_section1',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'title_section2',
        array(
            'label' => __('Title', 'panakeia'),
            'section' => 'titles',
            'settings' => 'title_section2',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'buttons2_text',
        array(
            'label' => __('Buttons text', 'panakeia'),
            'section' => 'sign_up',
            'settings' => 'buttons2_text',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'buttons2_link',
        array(
            'label' => __('Buttons link', 'panakeia'),
            'section' => 'sign_up',
            'settings' => 'buttons2_link',
            'type' => 'text',
        )
    );
}

add_action('customize_register', 'panakeia_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function panakeia_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function panakeia_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function panakeia_customize_preview_js()
{
    wp_enqueue_script('panakeia-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'panakeia_customize_preview_js');
