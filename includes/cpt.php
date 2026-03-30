<?php
function sm_register_cpt() {
    register_post_type('sinh_vien', [
        'labels' => [
            'name' => 'Sinh viên',
            'singular_name' => 'Sinh viên'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-id',
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'sm_register_cpt');