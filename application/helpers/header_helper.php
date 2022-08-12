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

/* Karshan 15-07-2022 */
if (!function_exists('get_faq_list')) {
    function get_faq_list($faq_id) {
        $ci = & get_instance();
        $ci->load->database();

        $ci->db->from('tbl_faq');
        $ci->db->where('iFaqId', $faq_id);
        $ci->db->where('tbl_faq.cEnable', 'Y');
        $ci->db->order_by('tbl_faq.iOrder', 'asc');
        $result = $ci->db->get();
        //echo $ci->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}

if (!function_exists('get_committee_members')) {
    function get_committee_members($recid, $tbl) {
        $ci = & get_instance();
        $ci->load->database();

        $ci->db->from($tbl);
        $ci->db->where('cEnable', 'Y');
        $ci->db->where('iCommitteeId', $recid);
        $ci->db->order_by('iOrder', 'asc');
        $result = $ci->db->get();
        //echo $ci->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}

if (!function_exists('get_quality_downloads')) {
    function get_quality_downloads() {
        $ci = & get_instance();
        $ci->load->database();

        $ci->db->from('tbl_quality_download');
        $ci->db->where('cEnable', 'Y');
        $ci->db->order_by('iOrder', 'asc');
        $result = $ci->db->get();
        // echo $ci->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}

//}
?>
