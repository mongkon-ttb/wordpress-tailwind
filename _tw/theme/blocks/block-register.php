<?php
function register_custom_alert_block() {
    wp_register_script(
        'custom-alert-block-editor',
        get_template_directory_uri() . '/blocks/alert-block.js',
        array('wp-blocks', 'wp-editor', 'wp-components', 'wp-element'),
        filemtime(get_template_directory() . '/blocks/alert-block.js')
    );

    register_block_type('custom/alert-block', array(
        'editor_script' => 'custom-alert-block-editor'
    ));
}
add_action('init', 'register_custom_alert_block');
