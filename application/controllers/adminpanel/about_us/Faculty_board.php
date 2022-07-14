<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 28-06-2022
 * author : Ayodhya
 */

Class Faculty_board extends CI_Controller {

    private $table_name = "tbl_faculty_board";
    private $page_id = "14";
    private $redirect_path = "adminpanel/about_us/faculty_board";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/aboutus_model');
        set_title("Faculty Board");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	
        
        $data['ckeditor_tDescription1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tDescription1',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tDescription2'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tDescription2',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tComposition'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tComposition',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tMeetingSchedule'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tMeetingSchedule',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
		
        $data['faculty_board_data'] = $this->aboutus_model->get_faculty_board_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/aboutus/faculty_board_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_faculty_board($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_faculty_board')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/faculty_board');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/faculty_board');
            }
        } else {
            if ($this->common_model->save_data('tbl_faculty_board')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/about_us/faculty_board');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/about_us/faculty_board');
            }
        }
    }

}

?>
