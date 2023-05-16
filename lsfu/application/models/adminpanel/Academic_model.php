<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academic_model extends CI_Model {  
    
    public function get_units_gallery($recId,$tbl) {
        $this->db->from($tbl);
        $this->db->where('iUnitId', $recId);
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
