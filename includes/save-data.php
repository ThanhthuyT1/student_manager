<?php
function sm_save_student_data($post_id) {

    // Kiểm tra nonce
    if (!isset($_POST['sm_nonce']) || !wp_verify_nonce($_POST['sm_nonce'], 'sm_save_data')) {
        return;
    }

    // Tránh autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Kiểm tra quyền
    if (!current_user_can('edit_post', $post_id)) return;

    // Sanitize & save
    if (isset($_POST['mssv'])) {
        update_post_meta($post_id, '_mssv', sanitize_text_field($_POST['mssv']));
    }

    if (isset($_POST['lop'])) {
        update_post_meta($post_id, '_lop', sanitize_text_field($_POST['lop']));
    }

    if (isset($_POST['ngaysinh'])) {
        update_post_meta($post_id, '_ngaysinh', sanitize_text_field($_POST['ngaysinh']));
    }
}
add_action('save_post', 'sm_save_student_data');