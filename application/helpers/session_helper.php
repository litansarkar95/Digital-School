<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('org_id')) {
    function org_id() {
        $CI =& get_instance(); // get CodeIgniter instance
        return $CI->session->userdata('loggedin_org_id');
    }
}

if (!function_exists('branch_id')) {
    function branch_id() {
        $CI =& get_instance();
        return $CI->session->userdata('loggedin_branch_id');
    }
}

if (!function_exists('active_branch_id')) {
    function active_branch_id() {
        $CI =& get_instance();
        return $CI->session->userdata('active_branch_id');
    }
}
if (!function_exists('role_id')) {
    function role_id() {
        $CI =& get_instance();
        return $CI->session->userdata('loggedin_role_id');
    }
}

if (!function_exists('u_id')) {
    function u_id() {
        $CI =& get_instance();
        return $CI->session->userdata('loggedin_id');
    }
}

if (!function_exists('userid')) {
    function userid() {
        $CI =& get_instance();
        return $CI->session->userdata('loggedin_userid');
    }
}
