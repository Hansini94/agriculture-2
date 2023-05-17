<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contactus_model extends CI_Model {

    public function get_details() {
        $this->db->from('tbl_livestock_contact_us');
        $this->db->order_by('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_iorder() {
        $this->db->from('tbl_livestock_enquire_details');
        $this->db->order_by('iOrder', 'desc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    
    #################################################	
}

?>
