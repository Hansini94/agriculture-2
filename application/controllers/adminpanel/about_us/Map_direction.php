<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 29-06-2022
 * author : Ayodhya
 */

Class Map_direction extends CI_Controller {

    private $table_name = "tbl_map_direction";
    private $page_id = "20";
    private $redirect_path = "adminpanel/about_us/map_direction";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/aboutus_model');
        set_title("Map Direction");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {

        $data['cSaveStatus']= 'E';
		
        $data['map_direction_data'] = $this->aboutus_model->get_map_direction_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/map_direction_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_map_direction($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_map_direction')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/map_direction');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/map_direction');
            }
        } else {
            if ($this->common_model->save_data('tbl_map_direction')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/map_direction');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/map_direction');
            }
        }
    }

}

?>
