<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Engagement_model extends CI_Model {

    // ********************Overview*********************
    public function get_overview() {
        $this->db->from('tbl_engagement_overview');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
// ********************Partnership**************************
    public function get_partnerships() {
        $this->db->from('tbl_engagement_partnerships');
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
// ********************Research Engagement********************
    public function get_latest_research() {
        $this->db->from('tbl_engagement_research');
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

    public function get_count_research() 
	{
        return $this->db->count_all("tbl_engagement_research");
    }

    public function get_research_list($limit, $start) {
        $this->db->from('tbl_engagement_research');
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

    public function get_rs_detail($name) {
        $this->db->from('tbl_engagement_research');
        $this->db->where('vName', $name);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    // ********************Student Engagement*******************
    public function get_latest_ste() {
        $this->db->from('tbl_engagement_student');
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

    public function get_count_students() 
	{
        return $this->db->count_all("tbl_engagement_student");
    }

    public function get_ste_list($limit, $start) {
        $this->db->from('tbl_engagement_student');
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

    public function get_st_detail($name) {
        $this->db->from('tbl_engagement_student');
        $this->db->where('vName', $name);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    // ********************Community Engagement*******************
    public function get_latest_com() {
        $this->db->from('tbl_engagement_community');
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

    public function get_count_community() 
	{
        return $this->db->count_all("tbl_engagement_community");
    }

    public function get_com_list($limit, $start) {
        $this->db->from('tbl_engagement_community');
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

    public function get_com_detail($name) {
        $this->db->from('tbl_engagement_community');
        $this->db->where('vName', $name);
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
