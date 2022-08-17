<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 04-08-2022
 * author : Hansini
 */

Class Conduct_guidelines extends CI_Controller {

    private $table_name = "tbl_conduct_guidelines";
    private $page_id = "273";
    private $redirect_path = "adminpanel/faculty_staff/conduct_guidelines";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        set_title("Faculty & Staff");
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
                'height' => '600px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
		
        $data['edit_data'] = $this->common_model->get_all_data_list($this->table_name);
		// echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/faculty_staff/conduct_guidelines_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_data($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/faculty_staff/conduct_guidelines');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/faculty_staff/conduct_guidelines');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/faculty_staff/conduct_guidelines');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/faculty_staff/conduct_guidelines');
            }
        }
    }

}

?>
