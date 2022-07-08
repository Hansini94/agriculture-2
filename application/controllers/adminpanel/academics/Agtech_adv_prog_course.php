<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 07-07-2022
 * author : Ayodhya
 */

Class Agtech_adv_prog_course extends CI_Controller {

    private $table_name = "tbl_agtech_adv_prog_course";
    private $page_id = "85";
    private $redirect_path = "adminpanel/academics/agtech_adv_prog_course/add_course";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("B.Sc. Agtech & Mgt - Advanced Programme Course Modules");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function add_course() {

        $id = $this->uri->segment(5);
		
        $data['cSaveStatus']= 'A';

        $data['list_data'] = $this->academic_model->get_advance_programme_course_list($id);
        $data['module_name'] = $this->academic_model->get_module_name($id);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/agtech_adv_prog_course_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_adv_prog_course($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $moduleId = $this->input->post('iAdvProgId', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_agtech_adv_prog_course')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/agtech_adv_prog_course/add_course/'.$moduleId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/agtech_adv_prog_course/add_course/'.$moduleId);
            }
        } else {
            // die('123');
            if ($this->common_model->save_data('tbl_agtech_adv_prog_course')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/agtech_adv_prog_course/add_course/'.$moduleId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/agtech_adv_prog_course/add_course/'.$moduleId);
            }
        }
    }
	
	public function edit_adv_prog_course() {
		
        $data['cSaveStatus']= 'E';

        $moduleId = $this->uri->segment(6);
        $data['module_name'] = $this->academic_model->get_module_name($moduleId);
        $data['list_data'] = $this->academic_model->get_advance_programme_course_list($moduleId);
		$courseId = $this->uri->segment(5);
		$data['edit_adv_prog_course'] = $this->academic_model->get_edit_advance_programme_course_list($courseId);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/agtech_adv_prog_course_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status() {

        $moduleId = $this->uri->segment(7);

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status($this->redirect_path.'/'.$moduleId, $this->table_name);
        } else {
            
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path.'/'.$moduleId);
        }
    }

    public function delete_record() {

        $moduleId = $this->uri->segment(7);

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record($this->redirect_path.'/'.$moduleId, $this->table_name);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path.'/'.$moduleId);
        }
    }


}

?>
