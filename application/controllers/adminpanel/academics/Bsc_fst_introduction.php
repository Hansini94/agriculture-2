<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 08-07-2022
 * author : Ayodhya
 */

Class Bsc_fst_introduction extends CI_Controller {

    private $table_name = "tbl_bsc_fst_introduction";
    private $page_id = "92";
    private $redirect_path = "adminpanel/academics/bsc_fst_introduction";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("B.Sc. Fst");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['ckeditor_tIntroduction'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tIntroduction',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent1',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent2'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent2',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tCourseSeq'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tCourseSeq',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tCalendarDate'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tCalendarDate',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
		
        $data['introduction_data'] = $this->academic_model->get_bsc_fst_introduction_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academics/bsc_fst_introduction_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_bsc_fst($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_bsc_fst_introduction')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_introduction');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_introduction');
            }
        } else {
            if ($this->common_model->save_data('tbl_bsc_fst_introduction')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_introduction');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academics/bsc_fst_introduction');
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
                redirect(base_url() . "adminpanel/academics/bsc_fst_introduction/update_details/".$imageID);
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/academics/bsc_fst_introduction/update_details/".$imageID);
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
