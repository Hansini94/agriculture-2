<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alumni_model extends CI_Model {

    public function get_main_slider_list() {

        $this->db->from('tbl_alumni_main_slider');
		$this->db->order_by('tbl_alumni_main_slider.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_main_slider($sliderid) {

        $this->db->from('tbl_alumni_main_slider');
		$this->db->where('id', $sliderid);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_alumni_home_data() {

        $this->db->from('tbl_home_content');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_short_links_list() {

        $this->db->from('tbl_alumni_short_links');
		$this->db->order_by('tbl_alumni_short_links.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_short_links($linkid) {

        $this->db->from('tbl_alumni_short_links');
		$this->db->where('id', $linkid);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    
    public function get_current_committee_list() {

        $this->db->from('tbl_alumni_committee_current');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_current_committee($id) {

        $this->db->from('tbl_alumni_committee_current');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_previous_committee_list() {

        $this->db->from('tbl_alumni_committee_previous');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_previous_committee($id) {

        $this->db->from('tbl_alumni_committee_previous');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_alumni_news_list() {

        $this->db->from('tbl_alumni_news');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_alumni_news($id) {

        $this->db->from('tbl_alumni_news');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_alumni_events_list() {

        $this->db->from('tbl_alumni_events');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_alumni_events($id) {

        $this->db->from('tbl_alumni_events');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_alumni_newsletters_list() {

        $this->db->from('tbl_alumni_newsletters');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_alumni_newsletters($id) {

        $this->db->from('tbl_alumni_newsletters');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_alumni_scholarship_list() {

        $this->db->from('tbl_alumni_scholarships');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_alumni_scholarship($id) {

        $this->db->from('tbl_alumni_scholarships');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    

    public function get_alumni_joinus_data() {

        $this->db->from('tbl_joinus');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }



    
}

?>
