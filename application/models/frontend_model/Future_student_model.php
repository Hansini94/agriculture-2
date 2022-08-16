<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Future_student_model extends CI_Model {

    public function get_future_student_data() {
        $this->db->from('tbl_fs_home');
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
