<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Achievement_model extends CI_Model {


##about us start

    public function get_achievement_data() {

        $this->db->from('tbl_achievements');
        $this->db->where('id', 1);
        $query = $this->db->get();
    //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }


## end about us	
}

?>
