<?php

/**
 * 规则输出,用于调试
 * @param type $value
 * @param type $is_end
 */
function p($value, $is_end = '') {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    echo "<br />";
    if (!empty($is_end)) {
        die();
    }
}
