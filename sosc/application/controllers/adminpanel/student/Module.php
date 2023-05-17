<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Module extends CI_Controller {

    private $table_name = "tbl_soil_module";
    private $table_name1 = "tbl_soil_module_students";
    private $page_id = "13";
    private $redirect_path = "adminpanel/student/module";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/student_model');
        $this->load->model('adminpanel/home_model');
        set_title("Module");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/student/module_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_module($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/student/module');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/student/module');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/student/module');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/student/module');
            }
        }
    }
	
	public function edit() {
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/student/module_view', $data);
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

    
    // students 
    public function add_students(){
        $data['cSaveStatus']= 'A';
        $ModuleId = $this->uri->segment(5);
        $data['list_data'] = $this->student_model->get_module_students($ModuleId, $this->table_name1);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/student/module_students_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_students($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $iModuleId = $this->input->post('iModuleId', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
            }
        } else {
            if ($this->common_model->save_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
            }
        }
    }
	
	public function edit_students() {
        $data['cSaveStatus']= 'E';
        $ModuleId = $this->uri->segment(6);
        $data['list_data'] = $this->student_model->get_module_students($ModuleId, $this->table_name1);
		$studentsId = $this->uri->segment(5);
		$data['edit_students'] = $this->common_model->get_edit_data($studentsId, $this->table_name1);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/student/module_students_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status_students() {
        $iModuleId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status('adminpanel/student/module/add_students/'.$iModuleId, $this->table_name1);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
        }
    }

    public function delete_record_students() {
        $iModuleId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record('adminpanel/student/module/add_students/'.$iModuleId, $this->table_name1);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/student/module/add_students/'.$iModuleId);
        }
    }
}
?>
