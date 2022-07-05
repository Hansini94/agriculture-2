<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class International_model extends CI_Model {

    public function get_overview_data() {

        $this->db->from('tbl_overview');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_visiting_professor_list() {

        $this->db->from('tbl_visiting_professor');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_visiting_professor($id) {

        $this->db->from('tbl_visiting_professor');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_tor_data() {

        $this->db->from('tbl_terms_of_reference');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    ###############################

}

?>
