<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 05-07-2022
 * author : Ayodhya
 */

Class Study_abroad_opportunity extends CI_Controller {

    private $table_name = "tbl_study_abroad_opportunity";
    private $table_name2 = "tbl_testimonial_list";
    private $page_id = "41";
    private $redirect_path = "adminpanel/international/study_abroad_opportunity";
    private $redirect_path2 = "adminpanel/international/study_abroad_opportunity/testimonials";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/international_model');
        set_title("Study Abroad Opportunity");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['ckeditor_tShortTermVisitContent'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tShortTermVisitContent',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tLongTermVisitContent'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tLongTermVisitContent',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tTestimonial1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tTestimonial1',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tTestimonial2'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tTestimonial2',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );


        $data['cSaveStatus']= 'E';
		
        $data['study_opportunity_data'] = $this->international_model->get_study_abroad_opportunity_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/international/study_abroad_opportunity_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_study_abroad_opportunity($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_study_abroad_opportunity')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/international/study_abroad_opportunity');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/international/study_abroad_opportunity');
            }
        } else {
            if ($this->common_model->save_data('tbl_study_abroad_opportunity')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/international/study_abroad_opportunity');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/international/study_abroad_opportunity');
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
                redirect(base_url() . "adminpanel/international/study_abroad_opportunity/update_details/".$imageID);
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/international/study_abroad_opportunity/update_details/".$imageID);
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

    public function testimonials() {

        $data['ckeditor_tTestimonial'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tTestimonial',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'A';
		
        $data['list_data'] = $this->international_model->get_testimonial_list();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/international/testimonials_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_testimonial($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . $this->redirect_path2);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . $this->redirect_path2);
            }
        } else {
            if ($this->common_model->save_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . $this->redirect_path2);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . $this->redirect_path2);
            }
        }
    }

    public function edit_testimonial() {
		$data['ckeditor_tTestimonial'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tTestimonial',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->international_model->get_testimonial_list($this->table_name2);
		$recId = $this->uri->segment(5);
		$data['edit_testimonial'] = $this->international_model->get_edit_testimonial($recId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/international/testimonials_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status() {

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status($this->redirect_path2, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path2);
        }
    }

    public function delete_record() {
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record($this->redirect_path2, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path2);
        }
    }


}

?>
