<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 30-06-2022
 * author : Ayodhya
 */

Class Undergraduate extends CI_Controller {

    private $table_name = "tbl_undergraduate";
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
        set_title("Undergraduate");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {

        $data['ckeditor_tContent'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

		
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->aboutus_model->get_undergraduate_list();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/undergraduate_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_undergraduate($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_undergraduate')) {
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
	
	public function edit_undergraduate() {

        $data['ckeditor_tContent'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );
		
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->aboutus_model->get_undergraduate_list();
		$undergraduateId = $this->uri->segment(5);
		$data['edit_undergraduate'] = $this->aboutus_model->get_edit_undergraduate($undergraduateId);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/undergraduate_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status() {

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status($this->redirect_path, $this->table_name);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path);
        }
    }

    public function delete_record() {
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record($this->redirect_path, $this->table_name);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path);
        }
    }


}

?>
