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

if (!function_exists('get_contact')) {

    function get_contact() {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_contact_us where id='1' ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}

/************************AYODHYA****************************** */

if (!function_exists('get_dean_officers')) {

    function get_dean_officers($designation) {

        $ci = & get_instance();
        $ci->load->database();
        $sql = " SELECT * FROM tbl_dean_office_officer WHERE iDesignation = $designation ";
        $q = $ci->db->query($sql);
        return $q->result();
    }

}


//}
?>
