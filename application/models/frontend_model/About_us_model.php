<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About_us_model extends CI_Model {

    public function get_about_us_data() {
        $this->db->from('tbl_aboutus_content');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_stat_undergradate_data() {
        $this->db->from('tbl_undergraduate');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_stat_aca_staff_data() {
        $this->db->from('tbl_academic_staff');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_stat_non_aca_staff_data() {
        $this->db->from('tbl_non_academic_staff');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_dean_office_data() {
        $this->db->from('tbl_dean_office');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_board_data() {
        $this->db->from('tbl_faculty_board');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_meeting_schedule_latest_data() {
        $this->db->from('tbl_meeting_schedule');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_meeting_schedule_data($id) {
        $this->db->from('tbl_meeting_schedule');
        $this->db->order_by('id', 'DESC');
        $this->db->where_not_in('id', $id);
        $this->db->limit(4);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_meeting_schedule_detail_data($year) {
        $this->db->from('tbl_meeting_schedule');
        $this->db->where('vYear', $year);
        $result = $this->db->get();
        // echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_history_data() {
        $this->db->from('tbl_history');
        $this->db->where('id', 1);
        $this->db->limit(4);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_former_deans_data() {
        $this->db->from('tbl_former_deans');
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

    public function get_faculty_org_data() {
        $this->db->from('tbl_faculty_organization');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_brochure_data() {
        $this->db->from('tbl_faculty_brochure');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_brochure_top_img() {
        $this->db->from('tbl_brochure_images');
        $this->db->where('iPosition', 1);
        $this->db->order_by('iOrder', 'ASC');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_faculty_brochure_bottom_img() {
        $this->db->from('tbl_brochure_images');
        $this->db->where('iPosition', 2);
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
