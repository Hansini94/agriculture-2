<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 04-07-2022
 * author : Ayodhya
 */

Class Calling_application extends CI_Controller {

    private $table_name = "tbl_calling_application";
    private $page_id = "33";
    private $redirect_path = "adminpanel/awards/calling_application";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/awards_model');
        set_title("Calling Application");
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
                'height' => '200px', //Setting a custom height
            ),            
        );


        $data['cSaveStatus']= 'E';
		
        $data['calling_application_data'] = $this->awards_model->get_calling_application_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/awards/calling_application_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_calling_application($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_calling_application')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/awards/calling_application');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/awards/calling_application');
            }
        } else {
            if ($this->common_model->save_data('tbl_calling_application')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/awards/calling_application');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/awards/calling_application');
            }
        }
    }

    public function remove_image() {
        if ($this->common_library->check_privilege('p_edit')) {
            $imageID = $this->security->xss_clean($this->uri->segment(5));
            $field = $this->security->xss_clean($this->uri->segment(6));
            $path = 'front_img/';
            $img = $this->security->xss_clean($this->uri->segment(7));
            $this->load->model('adminpanel/common_model');
            $postimage_delete = $this->common_model->delete_image($imageID, $field, $this->table_name, $path, $img);
            if ($postimage_delete == TRUE) {
                redirect(base_url() . "adminpanel/awards/calling_application/update_details/".$imageID);
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/awards/calling_application/update_details/".$imageID);
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
