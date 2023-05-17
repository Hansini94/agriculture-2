<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Contact_us extends CI_Controller {

    private $table_name = "tbl_experimental_contact_us";
    private $page_id = "25";
    private $redirect_path = "adminpanel/contact_us";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/home_model');
        set_title("Contact us");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['saveStatus']= 'E';
        $data['contact_us_data'] = $this->home_model->get_contact_us_content();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/contact_us_view', $data);
        $this->load->view('adminpanel/footer_view');
    }   

    public function save_contact_us($data = '') {
        $save_status = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($save_status === 'E') {
            if ($this->common_model->update_saved_data('tbl_experimental_contact_us')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/contact_us');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/contact_us');
            }
        } else {
            if ($this->common_model->save_data('tbl_experimental_contact_us')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/contact_us');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/contact_us');
            }
        }
    }

}

?>
