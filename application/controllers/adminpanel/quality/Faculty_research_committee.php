<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 06-07-2022
 * author : Karshan
 */

Class Faculty_research_committee extends CI_Controller {

    private $table_name = "tbl_faculty_research_committee";
    private $page_id = "55";
    private $redirect_path = "adminpanel/quality/faculty_research_committee";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/quality_model');
        set_title("Faculty Research Committee");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	
        
        $data['ckeditor_tDescription'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tDescription',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
		
        $data['faculty_research_committee_data'] = $this->quality_model->get_faculty_research_committee_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/faculty_research_committee_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_faculty_research_committee($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_faculty_research_committee')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/faculty_research_committee');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/faculty_research_committee');
            }
        } else {
            if ($this->common_model->save_data('tbl_faculty_research_committee')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/faculty_research_committee');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/faculty_research_committee');
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
                redirect(base_url() . "adminpanel/quality/faculty_research_committee");
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/quality/faculty_research_committee");
            }
        }
    }

}

?>
