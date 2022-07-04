<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 30-06-2022
 * author : Ayodhya
 */

Class Undergraduate extends CI_Controller {

    private $table_name = "tbl_degree";
    private $page_id = "9";
    private $redirect_path = "adminpanel/about_us/undergraduate";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/aboutus_model');
        set_title("About us");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['cSaveStatus']= 'A';
		
        $data['list_data'] = $this->aboutus_model->get_degree_list();

		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/faculty_statistic_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	
    public function edit_undergraduate() {
		
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->aboutus_model->get_degree_list();
		$degreeId = $this->uri->segment(5);
		$data['edit_undergraduate'] = $this->aboutus_model->get_edit_undergraduate($degreeId);
        $data['edit_undergraduate_conferred'] = $this->aboutus_model->get_edit_undergraduate_conferred($degreeId);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/undergraduate_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_undergraduate($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->aboutus_model->update_undergraduate_data('tbl_undergraduate', $cSaveStatus)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/undergraduate');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/undergraduate');
            }
        } else {
            if ($this->common_model->save_data('tbl_undergraduate')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/undergraduate');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/undergraduate');
            }
        }
    }

}

?>
