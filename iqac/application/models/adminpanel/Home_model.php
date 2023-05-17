<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {


## contact us START
	public function get_contact_us_content() {

        $this->db->from('tbl_iqac_contact_us');
		//$this->db->order_by('tbl_iqac_currency.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
## end contact us	
	
##golden  key start	
	## home START
	
	
	public function get_main_slider_list() {

        $this->db->from('tbl_iqac_main_slider');
		$this->db->order_by('tbl_iqac_main_slider.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_main_slider($sliderid) {

        $this->db->from('tbl_iqac_main_slider');
		$this->db->where('id', $sliderid);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_edit_main_slider_video() {

        $this->db->from('tbl_iqac_main_slider_video');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_mobile_slider_list() {

        $this->db->from('tbl_iqac_mobile_slider');
		$this->db->order_by('tbl_iqac_mobile_slider.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	public function get_edit_mobile_slider($sliderid) {

        $this->db->from('tbl_iqac_mobile_slider');
		$this->db->where('id', $sliderid);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
    public function get_edit_home_detail() {

        $this->db->from('tbl_iqac_home_detail');
		$this->db->where('id',1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }	
	
    public function get_awards_list() {

        $this->db->from('tbl_iqac_awards');
		$this->db->order_by('tbl_iqac_awards.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_awards($id) {

        $this->db->from('tbl_iqac_awards');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_proof_confidence_list() {

        $this->db->from('tbl_iqac_proof_confidence');
		$this->db->order_by('tbl_iqac_proof_confidence.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_proof_confidence() {

        $this->db->from('tbl_iqac_proof_confidence');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
public function get_intro_content($vPage) {

        $this->db->from('tbl_iqac_intro');
        $this->db->where('vPage', $vPage);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
   
public function get_careers_content_list() {

        $this->db->from('tbl_iqac_career_cv');
        $this->db->order_by('tbl_iqac_career_cv.dDateTime','desc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function active_record($recID, $recFld, $tblName) {

        $data = array(
            $recFld => 'Y'
        );

        $this->db->trans_start();
        $this->db->where('id', $recID);
        $this->db->update($tblName, $data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata('message', 'Request failed.');
            return false;
        } else {
            $this->session->set_flashdata('message', 'Data successfully activated.');
            $tDes = "Record has been activated";
            $this->load->model('common_model');
            $this->common_model->add_log($tDes);
            return true;
        }
    }

    public function deactive_record($recID, $recFld, $tblName) {

        $data = array(
            $recFld => 'N'
        );

        $this->db->trans_start();
        $this->db->where('id', $recID);
        $this->db->update($tblName, $data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata('message', 'Request failed.');
            return false;
        } else {
            $this->session->set_flashdata('message', 'Data successfully deactivated.');
            $tDes = "Record has been deactivated";
            $this->load->model('common_model');
            $this->common_model->add_log($tDes);
            return true;
        }
    }

    public function get_question_list($recId,$tbl){
        $this->db->from($tbl);
        $this->db->where('iFaqId', $recId);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

	public function get_download_list($recId,$tbl){
        $this->db->from($tbl);
        $this->db->where('icttId', $recId);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    public function get_innerpage_list() {

        $this->db->from('tbl_iqac_page_details');
		$this->db->order_by('tbl_iqac_page_details.vPageName','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
         else {
            return array();
        }
    }

    public function get_innerpage_banner_list() {

        $this->db->from('tbl_iqac_innerpage_banner');
		$this->db->order_by('tbl_iqac_innerpage_banner.vPageRoute','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
         else {
            return array();
        }
    }

	public function get_edit_innerpage_banner($recId) {

        $this->db->from('tbl_iqac_innerpage_banner');
		$this->db->where('id', $recId);
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
