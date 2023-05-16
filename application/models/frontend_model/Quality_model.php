<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quality_model extends CI_Model {

    public function get_functions_of_foaqac() {
        $this->db->from('tbl_functions_of_foaqac');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_member_of_foaqac() {
        $this->db->from('tbl_members_of_fqac');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_schedule_of_meetings() {
        $this->db->from('tbl_schedule_of_meetings');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_schedules() {
        $this->db->from('tbl_schedules');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_research_committee() {
        $this->db->from('tbl_faculty_research_committee');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_committee($tbl) {
        $this->db->from($tbl);
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'desc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_members($tbl) {
        $this->db->from($tbl);
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

    public function get_committee_members($recid, $tbl) {
        $this->db->from($tbl);
        $this->db->where('cEnable', 'Y');
        $this->db->where('iCommitteeId', $recid);
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_ahead_projects() {
        $this->db->from('tbl_ahead_project');
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

    public function get_ahead_projects_others($heading) {
        $this->db->from('tbl_ahead_project');
        $this->db->where('vMHeading', $heading);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
    
    public function get_quality_tab_data() {
        $this->db->from('tbl_other_qualities');
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
        $this->db->from('tbl_other_qualities');
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    } 
    
    public function get_quality_detail($id) {
        $this->db->from('tbl_other_qualities');
        $this->db->where('id', $id);
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
