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

    #################################################	
}

?>
