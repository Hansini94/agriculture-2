<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quality_model extends CI_Model {

    public function get_functions_of_foaqac_data() {

        $this->db->from('tbl_functions_of_foaqac');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_members_of_fqac_data() {

        $this->db->from('tbl_members_of_fqac');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_schedule_data(){
        $this->db->from('tbl_schedule_of_meetings');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_schedule_list(){
        $this->db->from('tbl_schedules');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function update_schedule_data(){

        $this->db->trans_start();
        $data = array(
            'vTitle' => $this->input->post('vTitle', TRUE),
            'tDescription' => $this->input->post('tDescription', TRUE)
        );
        $this->db->where('id', 1);
        $this->db->update('tbl_schedule_of_meetings', $data);

        $id = $this->input->post('id', TRUE);

        $undCount = count($id);

        for($i=0; $i<$undCount; $i++) {
            $id = $_POST['id'][$i];
            $data_s['vMonth'] = $_POST['vMonth'][$i];
            $data_s['dDate'] = ($_POST['dDate'][$i]) ? $_POST['dDate'][$i]: null;
            $data_s['vStatus'] = $_POST['vStatus'][$i];

			$this->db->where('id', $id);
            $query =  $this->db->update('tbl_schedules', $data_s);
           
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }
}

?>
