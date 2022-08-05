<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Engagement_model extends CI_Model {

    public function get_partnerships_list() {

        $this->db->from('tbl_engagement_partnerships');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_partnerships($id) {

        $this->db->from('tbl_engagement_partnerships');
        $this->db->where('id', $id);
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
