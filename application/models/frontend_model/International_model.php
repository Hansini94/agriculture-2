<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class International_model extends CI_Model {

    public function get_overview() {
        $this->db->from('tbl_overview');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_visiting_professors() {
        $this->db->from('tbl_visiting_professor');
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

    public function get_terms_of_reference() {
        $this->db->from('tbl_terms_of_reference');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    
    public function get_current_foreign_students() {
        $this->db->from('tbl_foreign_student');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_info_for_foreign_students() {
        $this->db->from('tbl_information_foreign_student');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_opportunities_study_abroad() {
        $this->db->from('tbl_study_abroad_opportunity');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_testimonials() {
        $this->db->from('tbl_testimonial_list');
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
