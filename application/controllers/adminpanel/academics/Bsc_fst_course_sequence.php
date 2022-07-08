<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 08-07-2022
 * author : Ayodhya
 */

Class Bsc_fst_course_sequence extends CI_Controller {

    private $table_name = "tbl_bsc_fst_course_sequence";
    private $page_id = "93";
    private $redirect_path = "adminpanel/academics/bsc_fst_course_sequence";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("B.Sc. FST - Course Sequence");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {

        $data['ckeditor_tNotation'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tNotation',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tCourse'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tCourse',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );
		
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->academic_model->get_bsc_fst_course_sequence_list();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/bsc_fst_course_sequence_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_course_sequence($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_bsc_fst_course_sequence')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_course_sequence');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_course_sequence');
            }
        } else {
            if ($this->common_model->save_data('tbl_bsc_fst_course_sequence')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_course_sequence');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_course_sequence');
            }
        }
    }
	
	public function edit_course_sequence() {

        $data['ckeditor_tNotation'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tNotation',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tCourse'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tCourse',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );
		
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->academic_model->get_bsc_fst_course_sequence_list();
		$courseSeqId = $this->uri->segment(5);
		$data['edit_course_sequence'] = $this->academic_model->get_edit_bsc_fst_course_sequence($courseSeqId);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/bsc_fst_course_sequence_view', $data);
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
