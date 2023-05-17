<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff_model extends CI_Model {

    public function get_academic_caption() {
        $this->db->from('tbl_aext_academic_staff_caption');
        $this->db->where('id', 1);
        $result = $this->db->get();
         //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function get_academic_staff_data() {
        $this->db->from('tbl_aext_academic_staff');
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

    public function get_academic_staff_detail($id) {
        $this->db->from('tbl_aext_academic_staff');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_aext_engagement_research', ['id' => $id])->row();
    }


    public function get_academic_staff_category() {
        $this->db->from('tbl_aext_academic_staff_category');
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

    // ********************non academic

    public function get_non_academic_staff_category() {
        $this->db->from('tbl_aext_non_academic_staff_category');
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

    public function get_non_academic_caption() {
        $this->db->from('tbl_aext_non_academic_staff_caption');
        $this->db->where('id', 1);
        $result = $this->db->get();
         //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }    

    public function get_non_academic_staff_data() {
        $this->db->from('tbl_aext_non_academic_staff');
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

    public function get_non_academic_staff_detail($id) {
        $this->db->from('tbl_aext_non_academic_staff');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_aext_engagement_research', ['id' => $id])->row();
    } 

}

?>
