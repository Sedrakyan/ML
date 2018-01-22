<?php
function _action_theme_include_custom_option_types() {
    require_once dirname(__FILE__) . '/includes/option-types/new/class-fw-option-type-new.php';
}
add_action('fw_option_types_init', '_action_theme_include_custom_option_types', 9);