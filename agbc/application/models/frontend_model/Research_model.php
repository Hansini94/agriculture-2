<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Research_model extends CI_Model {

    public function get_count_projects() 
	{
        return $this->db->count_all("tbl_biotech_research_projects");
    }

    public function get_projects_list($limit, $start) {
        $this->db->from('tbl_biotech_research_projects');
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

    public function get_projects_detail($id) {
        $this->db->from('tbl_biotech_research_projects');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_biotech_engagement_research', ['id' => $id])->row();
    }  
    public function get_projects_detail_list($id) {
        $this->db->from('tbl_biotech_research_projects');
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

//Student Research

public function get_count_student() 
	{
        return $this->db->count_all("tbl_biotech_student_research");
    }

    public function get_student_list($limit, $start) {
        $this->db->from('tbl_biotech_student_research');
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

    public function get_student_detail($id) {
        $this->db->from('tbl_biotech_student_research');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_biotech_engagement_research', ['id' => $id])->row();
    }  
    public function get_student_detail_list($id) {
        $this->db->from('tbl_biotech_student_research');
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
