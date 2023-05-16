<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academic_model extends CI_Model {

    public function get_core_program_data() {
        $this->db->from('tbl_biology_core_program');
        $this->db->where('id', 1);
        $result = $this->db->get();
         //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_module_tab_data() {
        $this->db->from('tbl_biology_advanced_modules');
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

    public function get_id() {
        $this->db->from('tbl_biology_advanced_modules');
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_biology_engagement_research', ['id' => $id])->row();
    } 
    
    public function get_module_details() {
        $this->db->from('tbl_biology_advanced_modules');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_biology_engagement_research', ['id' => $id])->row();
    }
    public function get_module_detail($id) {
        $this->db->from('tbl_biology_advanced_modules');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_biology_engagement_research', ['id' => $id])->row();
    } 


    /*******************POSTGRADUATE******************** */

    public function get_postgraduate_data() {
        $this->db->from('tbl_biology_postgraduate_program');
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

    #################################################	
}

?>
