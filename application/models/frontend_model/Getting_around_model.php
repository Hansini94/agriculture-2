<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Getting_around_model extends CI_Model {

    public function get_getting_around_data() {
        $this->db->from('tbl_getting_around_contents');
        $this->db->where('id', 1);
        $result = $this->db->get();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_walk_around_data() {
        $this->db->from('tbl_walk_around_uni');
        $this->db->where('id', 1);
        $result = $this->db->get();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_faculty_map_data() {
        $this->db->from('tbl_map_direction');
        $this->db->where('id', 1);
        $result = $this->db->get();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_faculty_direction_data() {
        $this->db->from('tbl_direction_faculty');
        $this->db->where('id', 1);
        $result = $this->db->get();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

}

?>
