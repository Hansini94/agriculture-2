<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services_model extends CI_Model {

    public function get_ocenters_data() {

        $this->db->from('tbl_outreach_centers');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    
    // public function get_competition_list() {

    //     $this->db->from('tbl_competition');
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }

    // public function get_edit_competition($id) {

    //     $this->db->from('tbl_competition');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }
}

?>
