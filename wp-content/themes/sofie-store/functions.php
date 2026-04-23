<?php

declare(strict_types=1);

add_action('wp_enqueue_scripts', function (): void {
    wp_enqueue_style(
        'sofie-store-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});

