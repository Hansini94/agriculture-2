<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends CI_Model {

    public function get_count_news() 
	{
        return $this->db->count_all("tbl_aeu_news_updates");
    }

    public function get_news_list($limit, $start) {
        $this->db->from('tbl_aeu_news_updates');
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

    public function get_news_detail($id) {
        $this->db->from('tbl_aeu_news_updates');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_aeu_engagement_research', ['id' => $id])->row();
    }  
    public function get_news_detail_list($id) {
        $this->db->from('tbl_aeu_news_updates');
        $this->db->where_not_in('id', $id);
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $this->db->limit(6);
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
