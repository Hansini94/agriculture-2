<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 06-07-2022
 * author : Karshan
 */

Class Time_table_committee extends CI_Controller {

    private $table_name = "tbl_time_table_committee";
    private $table_name2 = "tbl_time_table_committee_composition";
    private $page_id = "65";
    private $redirect_path = "adminpanel/quality/time_table_committee";

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

        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->quality_model->get_committee_list($this->table_name);
		// echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/time_table_committee_view', $data);
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
                redirect(base_url() . 'adminpanel/quality/time_table_committee');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/time_table_committee');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/time_table_committee');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/time_table_committee');
            }
        }
    }

    public function edit() {

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
        $data['list_data'] = $this->quality_model->get_committee_list($this->table_name);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->quality_model->get_edit_committee($recId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/time_table_committee_view', $data);
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

    public function composition(){
        $data['cSaveStatus']= 'A';
        $recId = $this->uri->segment(5);
        $data['list_data'] = $this->quality_model->get_composition_list($recId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/time_table_committee_composition_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_data_composition($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $iCommitteeId = $this->input->post('iCommitteeId', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
            }
        } else {
            if ($this->common_model->save_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
            }
        }
    }
	
	public function edit_member() {
		
        $data['cSaveStatus']= 'E';
        $recId = $this->uri->segment(6);
        $data['list_data'] = $this->quality_model->get_composition_list($recId, $this->table_name2);
		$compositionId = $this->uri->segment(5);
		$data['edit_member'] = $this->quality_model->get_edit_member($compositionId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/time_table_committee_composition_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status_member() {
        $iCommitteeId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status('adminpanel/quality/time_table_committee/composition/'.$iCommitteeId, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
        }
    }

    public function delete_record_composition() {
        $iCommitteeId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record('adminpanel/quality/time_table_committee/composition/'.$iCommitteeId, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/quality/time_table_committee/composition/'.$iCommitteeId);
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
                redirect(base_url() . "adminpanel/quality/time_table_committee/edit/".$imageID);
            } else {
                $this->session->set_flashdata('message_error', 'Delete fail!');
                redirect(base_url() . "adminpanel/quality/time_table_committee/edit/".$imageID);
            }
        }
    }

}

?>
