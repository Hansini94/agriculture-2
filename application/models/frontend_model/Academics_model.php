<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academics_model extends CI_Model {

    public function get_undergraduate_agtech_data() {
        $this->db->from('tbl_bsc_agtech_mgt');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_agtech_programme_details_data() {
        $this->db->from('tbl_bsc_agtech_programme_details');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_undergraduate_asf_data() {
        $this->db->from('tbl_bsc_asf_introduction');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_asf_programme_details_data() {
        $this->db->from('tbl_bsc_asf_programme_details');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_undergraduate_fst_data() {
        $this->db->from('tbl_bsc_fst_introduction');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_fst_programme_details_data() {
        $this->db->from('tbl_bsc_fst_programme_details');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_agtech_scholarship_data() {
        $this->db->from('tbl_bsc_agtech_scholarship');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_asf_scholarship_data() {
        $this->db->from('tbl_bsc_asf_scholarship');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_fst_scholarship_data() {
        $this->db->from('tbl_bsc_fst_scholarship');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }


    /*******************POSTGRADUATE******************** */

    public function get_postgraduate_data() {
        $this->db->from('tbl_postgraduate_programme');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    #################################################	
}

?>
