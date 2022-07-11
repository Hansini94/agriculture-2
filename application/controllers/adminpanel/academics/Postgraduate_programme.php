<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 09-07-2022
 * author : Ayodhya
 */

Class Postgraduate_programme extends CI_Controller {

    private $table_name = "tbl_postgraduate_programme";
    private $page_id = "108";
    private $redirect_path = "adminpanel/academics/postgraduate_programme";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("Postgraduate Programme");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['cSaveStatus']= 'E';
		
        $data['postgraduate_programme_data'] = $this->academic_model->get_postgraduate_programme_data();
        // var_dump($data['undergraduate_data']);exit();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/postgraduate_programme_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_postgraduate_programme($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_postgraduate_programme')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/postgraduate_programme');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/postgraduate_programme');
            }
        } else {
            if ($this->common_model->save_data('tbl_postgraduate_programme')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/postgraduate_programme');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/postgraduate_programme');
            }
        }
    }

    public function update_details() {
        if ($this->common_library->check_privilege('p_edit')) {
            $data = $this->common_library->flexigrid_update_user($this->table_name);
            $this->index();
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission..');
            redirect(base_url() . $this->redirect_path);
        }
    }


}

?>
