<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faculty_staff_model extends CI_Model {

    public function get_emeritus_professors_list() {

        $this->db->from('tbl_emeritus_professors');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_emeritus_professors($id) {

        $this->db->from('tbl_emeritus_professors');
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
