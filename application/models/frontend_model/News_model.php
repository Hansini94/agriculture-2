<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends CI_Model {

    // ********************Alumni News*******************
    public function get_latest_news() {
        $this->db->from('tbl_news_updates');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_count_news() 
	{
        return $this->db->count_all("tbl_news_updates");
    }

    public function get_news_list($limit, $start) {
        $this->db->from('tbl_news_updates');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $start);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_news_detail($newString) {
        $this->db->from('tbl_news_updates');
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
    public function get_news_detail_list() {
        $this->db->from('tbl_news_updates');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        // $this->db->limit(12);
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
