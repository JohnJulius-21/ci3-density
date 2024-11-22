<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Fungsi untuk mengecek apakah menu saat ini aktif
function is_active_menu($route_name)
{
    $CI =& get_instance();
    return $CI->uri->segment(1) == $route_name ? 'active' : '';
}
