add_action('wp_enqueue_scripts', function () {

    wp_enqueue_script(
        'theme-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'], // dependency → ensures jQuery loads first
        null,
        true
    );

});
