<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Downloads_model extends CI_Model {
  
// ********************Staff Downloads**************************
    public function get_staff_downloads() {
        $this->db->from('tbl_staff_downloads');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_general_downloads() {
        $this->db->from('tbl_sec_general_download');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_research_downloads() {
        $this->db->from('tbl_sec_research_download');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

// ********************Student Downloads**************************
    public function get_student_downloads() {
        $this->db->from('tbl_student_downloads');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }


// ********************Faculty Downloads**************************
    public function get_enewsletter_downloads() {
        $this->db->from('tbl_facultyd_enewsletter');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faurs_downloads() {
        $this->db->from('tbl_facultyd_faurs');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_hanthana_downloads() {
        $this->db->from('tbl_facultyd_hanthana');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}

?>
