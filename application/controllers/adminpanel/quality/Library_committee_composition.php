<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Library_committee_composition extends CI_Controller {

    private $table_name = "tbl_library_committee_period";
    private $table_name2 = "tbl_library_committee_composition";
    private $page_id = "61";
    private $redirect_path = "adminpanel/quality/library_committee_composition";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/quality_model');
        set_title("Home");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
		
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->quality_model->get_period_list($this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/library_committee_period_view', $data);
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
                redirect(base_url() . 'adminpanel/quality/library_committee_composition');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition');
            }
        }
    }
	
	public function edit() {
		
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->quality_model->get_period_list($this->table_name);
		$periodId = $this->uri->segment(5);
		$data['edit_period'] = $this->quality_model->get_edit_period($periodId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/library_committee_period_view', $data);
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

    public function add_composition(){
        $data['cSaveStatus']= 'A';
        $periodId = $this->uri->segment(5);
        $data['list_data'] = $this->quality_model->get_composition_list($periodId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/library_committee_composition_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_data_composition($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $iPeriodId = $this->input->post('iPeriodId', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
            }
        } else {
            if ($this->common_model->save_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
            }
        }
    }
	
	public function edit_composition() {
		
        $data['cSaveStatus']= 'E';
        $periodId = $this->uri->segment(6);
        $data['list_data'] = $this->quality_model->get_composition_list($periodId, $this->table_name2);
		$compositionId = $this->uri->segment(5);
		$data['edit_composition'] = $this->quality_model->get_edit_composition($compositionId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/library_committee_composition_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status_composition() {
        $iPeriodId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status('adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
        }
    }

    public function delete_record_composition() {
        $iPeriodId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record('adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/quality/library_committee_composition/add_composition/'.$iPeriodId);
        }
    }

}

?>
