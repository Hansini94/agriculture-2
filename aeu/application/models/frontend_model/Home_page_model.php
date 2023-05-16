<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_page_model extends CI_Model {
    
    public function get_home_details() {
        $this->db->from('tbl_aeu_home_detail');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }    

    public function get_featured_news_data() {
        $this->db->from('tbl_aeu_news_updates');
        $this->db->where('cEnable', 'Y');
        $this->db->where('cFeatured', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_slider_news_data() {
        $this->db->from('tbl_aeu_news_updates');
        $this->db->where('cEnable', 'Y');
        $this->db->where('cSlider', 'Y');
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }



    ######################FOOTER###########################	
    public function get_quick_list() {
        $this->db->from('tbl_aeu_partnerships');
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
