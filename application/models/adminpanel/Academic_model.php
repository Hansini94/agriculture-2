<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academic_model extends CI_Model {

    #################AGTECH########################

    public function get_bsc_agtech_data() {

        $this->db->from('tbl_bsc_agtech_mgt');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_agtech_programme_details_list() {

        $this->db->from('tbl_bsc_agtech_programme_details');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_agtech_programme_details_list($id) {

        $this->db->from('tbl_bsc_agtech_programme_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_agtech_course_sequence($id) {

        $this->db->from('tbl_agtech_course_sequence');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_advance_programme_structure($id) {

        $this->db->from('tbl_agtech_adv_prog_structure');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_module_name($id) {

        $this->db->from('tbl_agtech_adv_prog_structure');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_advance_programme_course_list($id) {

        $this->db->from('tbl_agtech_adv_prog_course');
        $this->db->where('iAdvProgId', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_advance_programme_course_list($id) {

        $this->db->from('tbl_agtech_adv_prog_course');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_agtech_scholarship_list() {

        $this->db->from('tbl_bsc_agtech_scholarship');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_agtech_scholarship($id) {

        $this->db->from('tbl_bsc_agtech_scholarship');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

        #################FST########################

    public function get_bsc_fst_introduction_data() {

        $this->db->from('tbl_bsc_fst_introduction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_programme_details_list() {

        $this->db->from('tbl_bsc_fst_programme_details');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_fst_programme_details($id) {

        $this->db->from('tbl_bsc_fst_programme_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_fst_scholarship_list() {

        $this->db->from('tbl_bsc_fst_scholarship');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_fst_scholarship($id) {

        $this->db->from('tbl_bsc_fst_scholarship');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

        #################ASF########################

    public function get_bsc_asf_introduction_data() {

        $this->db->from('tbl_bsc_asf_introduction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_programme_details_list() {

        $this->db->from('tbl_bsc_asf_programme_details');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_asf_programme_details($id) {

        $this->db->from('tbl_bsc_asf_programme_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_postgraduate_programme_data() {

        $this->db->from('tbl_postgraduate_programme');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_asf_scholarship_list() {

        $this->db->from('tbl_bsc_asf_scholarship');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_asf_scholarship($id) {

        $this->db->from('tbl_bsc_asf_scholarship');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    ###############################

}

?>
