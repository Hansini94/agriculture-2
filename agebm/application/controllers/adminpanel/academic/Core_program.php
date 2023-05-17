<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


Class Core_program extends CI_Controller {

    private $table_name = "tbl_aebm_core_program";
    private $page_id = "6";
    private $redirect_path = "adminpanel/academic/core_program";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        set_title("Core Program");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['ckeditor_tDescription'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tDescription',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
        $data['edit_data'] = $this->common_model->get_all_data_list($this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academic/core_program_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_series($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/core_program');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/core_program');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/core_program');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/core_program');
            }
        }
    }
	
	
    
}

?>
