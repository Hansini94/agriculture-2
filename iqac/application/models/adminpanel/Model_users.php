<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_users extends CI_Model {

    public function can_log() {
        $this->db->where('vUserName', $this->input->post('vUserName'));
        $this->db->where('pPassword', md5($this->input->post('pPassword')));
        $this->db->where('cEnable', 'Y');
        $query = $this->db->get('tbl_iqac_backend_user');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function get_user_id() {
        $this->db->select('tbl_iqac_backend_user.id,tbl_iqac_backend_user.vUserName,tbl_iqac_backend_user.iUserType');
        $this->db->from('tbl_iqac_backend_user');
        $this->db->join('tbl_iqac_user_type', 'tbl_iqac_backend_user.iUserType = tbl_iqac_user_type.id');
        $this->db->where('tbl_iqac_backend_user.vUserName', $this->input->post('vUserName'));
        $this->db->where('tbl_iqac_backend_user.pPassword', md5($this->input->post('pPassword')));
        $this->db->where('tbl_iqac_backend_user.cEnable', 'Y');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return array();
        }
    }

    public function add_user() {
        $data = array(
            'vUserName' => $this->input->post('uName'),
            'pPassword' => md5($this->input->post('password'))
        );

        $query = $this->db->insert('user', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

}

?>
