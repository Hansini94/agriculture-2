<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student_life_model extends CI_Model {

    public function get_home_content() {
        $this->db->from('tbl_student_home');
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

    public function get_society_content() {
        $this->db->from('tbl_ss_home_content');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_society_details() {
        $this->db->from('tbl_student_societies');
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

    public function get_society_data($newString) {
        $this->db->from('tbl_student_societies');
        $this->db->where('vName', $newString);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    public function get_sport_details() {
        $this->db->from('tbl_student_sports');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_sport_data($newString) {
        $this->db->from('tbl_student_sports');
        $this->db->where('vTitle', $newString);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    public function get_events_details() {
        $this->db->from('tbl_student_events');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_events_data($newString) {
        $this->db->from('tbl_student_events');
        $this->db->where('vTitle', $newString);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }
}

?>
