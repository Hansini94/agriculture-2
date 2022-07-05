<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 04-07-2022
 * author : Ayodhya
 */

Class Terms_of_reference extends CI_Controller {

    private $table_name = "tbl_terms_of_reference";
    private $page_id = "38";
    private $redirect_path = "adminpanel/international/terms_of_reference";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/international_model');
        set_title("Overview");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['ckeditor_tIntro'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tIntro',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tCondition'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tCondition',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tAppProcedure'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tAppProcedure',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );


        $data['cSaveStatus']= 'E';
		
        $data['tor_data'] = $this->international_model->get_tor_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/international/terms_of_reference_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_tor($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_terms_of_reference')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/international/terms_of_reference');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/international/terms_of_reference');
            }
        } else {
            if ($this->common_model->save_data('tbl_terms_of_reference')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/international/terms_of_reference');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/international/terms_of_reference');
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
                redirect(base_url() . "adminpanel/international/terms_of_reference/update_details/".$imageID);
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/international/terms_of_reference/update_details/".$imageID);
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
