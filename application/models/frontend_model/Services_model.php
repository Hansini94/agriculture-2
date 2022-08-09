<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services_model extends CI_Model {

// ****************Transcript Request**************
            public function get_transcript_list() {
                $this->db->from('tbl_transcript_request');
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

// ********************outreach centers*********************
        public function get_outreach_centers() {
            $this->db->from('tbl_outreach_centers');
            $this->db->where('id', 1);
            $result = $this->db->get();
            //echo $this->db->last_query();  exit();  
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return array();
            }
        }
    
// ********************Analytical services*********************
        public function get_as_content() {
            $this->db->from('tbl_as_content');
            $this->db->where('id', 1);
            $result = $this->db->get();
            //echo $this->db->last_query();  exit();  
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return array();
            }
        }

        public function get_as_link_list() {
            $this->db->from('tbl_as_links');
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

// ********************Research & Experiemental Facilities*********************
public function get_ref_content() {
    $this->db->from('tbl_ref_content');
    $this->db->where('id', 1);
    $result = $this->db->get();
    //echo $this->db->last_query();  exit();  
    if ($result->num_rows() > 0) {
        return $result->row();
    } else {
        return array();
    }
}

public function get_ref_link_list() {
    $this->db->from('tbl_ref_links');
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
