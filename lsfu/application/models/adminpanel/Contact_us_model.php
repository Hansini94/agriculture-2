<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_us_model extends CI_Model {   

    public function get_enquire_details() {
        $this->db->from('tbl_enquire_details');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
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
