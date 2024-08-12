<?php
function my_theme_customize_register($wp_customize) {
    // Add section for video settings
    $wp_customize->add_section('video_section', array(
        'title'    => __('Video Settings', 'my-theme'),
        'priority' => 30,
    ));

    // Add setting for video URL
    $wp_customize->add_setting('video_url', array(
        'default'   => 'https://www.youtube.com/watch?v=RFVXy6CRVR4', // Default URL
        'transport' => 'refresh',
    ));

    // Add control for video URL
    $wp_customize->add_control('video_url_control', array(
        'label'    => __('Video URL', 'my-theme'),
        'section'  => 'video_section',
        'settings' => 'video_url',
        'type'     => 'text', // Type 'text' for URL input
    ));
}
add_action('customize_register', 'my_theme_customize_register');
?>
<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'top-bar' => __('Top Bar Menu'),
            'header-inner' => __('Header Inner Menu')
        )
    );
}
add_action('init', 'register_my_menus');
?>
