<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus_model extends CI_Model {

    public function get_aboutus_data() {

        $this->db->from('tbl_aboutus_content');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_quick_links_list() {

        $this->db->from('tbl_quick_links');
        $this->db->order_by('iOrder', 'ASC');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_quick_links($id) {

        $this->db->from('tbl_quick_links');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_history_data() {

        $this->db->from('tbl_history');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_org_data() {

        $this->db->from('tbl_faculty_organization');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_board_data() {

        $this->db->from('tbl_faculty_board');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_schedule_list() {

        $this->db->from('tbl_meeting_schedule');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_meeting_schedule($id) {

        $this->db->from('tbl_meeting_schedule');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_map_direction_data() {

        $this->db->from('tbl_map_direction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_dean_list() {

        $this->db->from('tbl_former_deans');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_deans($id) {

        $this->db->from('tbl_former_deans');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_dean_office_data() {

        $this->db->from('tbl_dean_office');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_brochure_data() {

        $this->db->from('tbl_faculty_brochure');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_undergraduate_list() {

        $this->db->from('tbl_undergraduate');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_undergraduate($id) {

        $this->db->from('tbl_undergraduate');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_academic_staff_data() {

        $this->db->from('tbl_academic_staff');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_non_academic_staff_data() {

        $this->db->from('tbl_non_academic_staff');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_brochure_images_list() {

        $this->db->from('tbl_brochure_images');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_brochure_images($id) {

        $this->db->from('tbl_brochure_images');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    ###############################3

##about us start
    public function get_overview_data() {

        $this->db->from('tbl_company_overview');
        $this->db->where('id', 1);
        $query = $this->db->get();
    //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_bod_list() {

        $this->db->from('tbl_bod');
		$this->db->order_by('tbl_bod.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_edit_bod($id) {

        $this->db->from('tbl_bod');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_customer_data() {

        $this->db->from('tbl_customer_content');
		$this->db->where('id', 1);
		$query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_technology_data() {

        $this->db->from('tbl_technology');
		$this->db->where('id', 1);
		$query = $this->db->get();
       //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

	 public function get_awards_list() {

        $this->db->from('tbl_awards');
		$this->db->order_by('tbl_awards.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

	public function get_edit_awards($id) {

        $this->db->from('tbl_awards');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	
## end about us	
}

?>
