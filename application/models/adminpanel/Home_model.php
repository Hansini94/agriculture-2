<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {


## contact us START
	public function get_contact_us_content() {

        $this->db->from('tbl_contact_us');
		//$this->db->order_by('tbl_currency.iOrder','asc');
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

        $this->db->from('tbl_main_slider');
		$this->db->order_by('tbl_main_slider.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_main_slider($sliderid) {

        $this->db->from('tbl_main_slider');
		$this->db->where('id', $sliderid);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_edit_main_slider_video() {

        $this->db->from('tbl_main_slider_video');
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

        $this->db->from('tbl_mobile_slider');
		$this->db->order_by('tbl_mobile_slider.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	public function get_edit_mobile_slider($sliderid) {

        $this->db->from('tbl_mobile_slider');
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

        $this->db->from('tbl_home_detail');
		$this->db->where('id',1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }	
	
    public function get_awards_list() {

        $this->db->from('tbl_awards');
		$this->db->order_by('tbl_awards.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_awards($id) {

        $this->db->from('tbl_awards');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_proof_confidence_list() {

        $this->db->from('tbl_proof_confidence');
		$this->db->order_by('tbl_proof_confidence.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	public function get_edit_proof_confidence() {

        $this->db->from('tbl_proof_confidence');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
public function get_intro_content($vPage) {

        $this->db->from('tbl_intro');
        $this->db->where('vPage', $vPage);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
   
public function get_careers_content_list() {

        $this->db->from('tbl_career_cv');
        $this->db->order_by('tbl_career_cv.dDateTime','desc');
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

        $this->db->from('tbl_page_details');
		$this->db->order_by('tbl_page_details.vPageName','asc');
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

        $this->db->from('tbl_innerpage_banner');
		$this->db->order_by('tbl_innerpage_banner.vPageRoute','asc');
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

        $this->db->from('tbl_innerpage_banner');
		$this->db->where('id', $recId);
        $query = $this->db->get();
        // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    
    public function save_data($tbl_name) {
		$fields = $this->db->list_fields($tbl_name);

        $data = array();
        foreach ($fields as $field) {
            $f_string = "";
            $f_string = $field[0];

            if ($field !== "id")
                $data[$field] = $this->input->post($field, TRUE);

            if ($f_string === 'p')
                $data[$field] = md5($this->input->post($field, TRUE));

            /* if ($f_string === 'd')
              $data[$field] = date('Y-m-d H:i:s'); */
            if ($f_string === 'f') {

                $filevalidate = $_FILES[$field]['name'];

                if ($filevalidate != '') {

                    $imagename = $this->doupload($field);

                    $img = $imagename['upload_data']['file_name'];


                    $data[$field] = $img;
                }
            }
        }

        $query = $this->db->insert($tbl_name, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function update_saved_data($tbl_name) {
        $fields = $this->db->list_fields($tbl_name);

        $data = array();
        foreach ($fields as $field) {
            $f_string = "";
            $f_string = $field[0];

            if ($field === "id")
                $id = $this->input->post($field, TRUE);
            else if ($f_string === 'p')
                $data[$field] = md5($this->input->post($field, TRUE));
            else if ($f_string === 'f') {

                $filevalidate = $_FILES[$field]['name'];

                if ($filevalidate != '') {

                    $imagename = $this->doupload($field);

                    $img = $imagename['upload_data']['file_name'];


                    $data[$field] = $img;
                }
            }
            /* else if ($f_string === 'd')
              $data[$field] = date('Y-m-d H:i:s'); */ else if ($f_string === 't')
                $data[$field] = $this->input->post($field);
            else
                $data[$field] = $this->input->post($field, TRUE);
        }
        $query = $this->db->update($tbl_name, $data, "id = $id");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function doupload($field) {

        $curentpath = FCPATH;

        $uploadpath = $this->input->post("uploadpath", TRUE);

        // $filename = $_FILES[$field]['name'];
        $filename = "inner_page_banner";

        //  $path = str_replace("allianceadmin", $uploadpath, $curentpath);
        $path = $curentpath . $uploadpath;

        $field_name = $field;
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docs|mp3|wav|ogg|mp4|docx';

        $config['max_size'] = '99999999900000000';


        $config['file_name'] = time() . $filename;


        if (!is_dir($config['upload_path']))
            die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        //echo 'dd';
        //print_r($config);
        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $uploadfile = $this->upload->do_upload($field_name);

        $field_name;

        if (!$uploadfile) {

            echo 'error';
        } else {

            return array('upload_data' => $this->upload->data());
        }
    }

}

?>
