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

    public function get_faculty_research_committee_data(){
        $this->db->from('tbl_faculty_research_committee');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_research_committee_composition_list(){
        $this->db->from('tbl_research_committee_composition');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_research_committee_composition($id) {

        $this->db->from('tbl_research_committee_composition');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_data($tbl){
        $this->db->from($tbl);
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_committee_list($tbl){
        $this->db->from($tbl);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_committee($id, $tbl){
        $this->db->from($tbl);
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_composition_list($recid, $tbl){
        $this->db->from($tbl);
        $this->db->where('iCommitteeId', $recid);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_member($id, $tbl){
        $this->db->from($tbl);
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    public function get_faculty_proposal_data(){
        $this->db->from('tbl_faculty_proposal');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_data_list($tbl){
        $this->db->from($tbl);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_ahead_project_list() {

        $this->db->from('tbl_ahead_project');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_ahead_project($id) {

        $this->db->from('tbl_ahead_project');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_download_list() {

        $this->db->from('tbl_quality_download');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_download($id) {

        $this->db->from('tbl_quality_download');
        $this->db->where('id', $id);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

}

?>
