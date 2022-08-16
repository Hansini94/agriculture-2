<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Short_links extends CI_Controller {

    private $table_name = "tbl_alumni_short_links";
    private $page_id = "306";
    private $redirect_path = "adminpanel/alumni/short_links";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/alumni_model');
        set_title("Alumni");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->alumni_model->get_short_links_list();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/alumni/short_links_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	
	public function edit_short_links() {
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->alumni_model->get_short_links_list();
		$linkid = $this->uri->segment(5);
		$data['edit_short_links'] = $this->alumni_model->get_edit_short_links($linkid);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/alumni/short_links_view', $data);
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

   

    public function save_short_links($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_alumni_short_links')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/alumni/short_links');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/alumni/short_links');
            }
        } else {
            if ($this->common_model->save_data('tbl_alumni_short_links')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/alumni/short_links');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/alumni/short_links');
            }
        }
    }

}

?>
