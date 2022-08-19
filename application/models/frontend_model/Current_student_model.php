<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Current_student_model extends CI_Model {

    public function get_cs_content() {
        $this->db->from('tbl_cs_home');
        $this->db->where('id', 1);
        $result = $this->db->get();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_prospectus() {
        $this->db->from('tbl_prospectus');
        $this->db->where('id', 1);
        $result = $this->db->get(); 
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    // GPA Calculator
    public function get_gpa_agtech_data() {
        $this->db->from('tbl_gpa_cal');
        $this->db->where('id', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_gpa_asf_data() {
        $this->db->from('tbl_gpa_cal');
        $this->db->where('id', 2);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_gpa_fst_data() {
        $this->db->from('tbl_gpa_cal');
        $this->db->where('id', 3);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    // Academic Calculator
    public function get_academic_calender() {
        $this->db->from('tbl_academic_calender');
        $this->db->where('id', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    // Deans List
    public function get_deans_list() {
        $this->db->from('tbl_deans_list');
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

    // Resources for students
    public function get_faculty_scholarships() {
        $this->db->from('tbl_faculty_level_schol');
        $this->db->where('id', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_lab_videos() {
        $this->db->from('tbl_video_laboratory');
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

    public function get_acgc_link() {
        $this->db->from('tbl_acgc_link');
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

    public function get_prg_link() {
        $this->db->from('tbl_prg_link');
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

}

?>
