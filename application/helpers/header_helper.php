<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//class Header_helper {
if (!function_exists('set_title')) {

    function set_title($title) {
        $ci = & get_instance();
        $ci->header_title = $title;
    }

}

if (!function_exists('get_title')) {

    function get_title() {
        $ci = & get_instance();
        return $ci->header_title;
    }

}

if (!function_exists('get_meta')) {

    function get_meta($page) {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_meta_tags where vPage_class='$page' ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}

if (!function_exists('get_top_banner_tbl')) {

    function get_top_banner_tbl($tbl, $id) {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM " . $tbl . " where id='$id' ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}

if (!function_exists('get_slider')) {

    function get_slider($iFacilityID) {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_theater_facilities_images where iFacilityID='$iFacilityID' ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}

if (!function_exists('get_contact')) {

    function get_contact() {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_contact_us where id='1' ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}

if (!function_exists('load_home_detail')) {

    function load_home_detail() {
        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_home_detail where id='1' ";
        $q = $ci->db->query($sql);
        return $q->row();
    }

}

//}
?>
