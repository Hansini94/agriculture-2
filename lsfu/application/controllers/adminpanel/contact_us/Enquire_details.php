<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 24-08-2022
 * author : Hansini
 */

Class Enquire_details extends CI_Controller {

    private $table_name = "tbl_livestock_enquire_details";
    private $page_id = "36";
    private $redirect_path = "adminpanel/contact_us/enquire_details";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/contact_us_model');
        set_title("Contact Us");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->contact_us_model->get_enquire_details();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/contact_us/enquire_details_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    	
	public function view() {
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->contact_us_model->get_enquire_details();
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/contact_us/enquire_details_view', $data);
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
