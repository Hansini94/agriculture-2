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
}

?>
