<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 05-07-2022
 * author : Ayodhya
 */

Class Agtech_advance_programme_structure extends CI_Controller {

    private $table_name = "tbl_agtech_adv_prog_structure";
    private $page_id = "85";
    private $redirect_path = "adminpanel/academics/agtech_advance_programme_structure";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("B.Sc. Agtech & Mgt - Advanced Programme Structure");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
		
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->academic_model->get_advance_programme_structure_list();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/agtech_adv_prog_structure_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_adv_prog_structure($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_agtech_adv_prog_structure')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/agtech_advance_programme_structure');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/agtech_advance_programme_structure');
            }
        } else {
            if ($this->common_model->save_data('tbl_agtech_adv_prog_structure')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/agtech_advance_programme_structure');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/agtech_advance_programme_structure');
            }
        }
    }
	
	public function edit_adv_prog_structure() {
		
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->academic_model->get_advance_programme_structure_list();
		$profId = $this->uri->segment(5);
		$data['edit_adv_prog_structure'] = $this->academic_model->get_edit_advance_programme_structure($profId);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/agtech_adv_prog_structure_view', $data);
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
