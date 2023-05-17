<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


Class Sales_centres extends CI_Controller {

    private $table_name = "tbl_livestock_sales_centres";
    private $table_name1 = "tbl_livestock_sales_units_gallery";
    private $page_id = "33";
    private $redirect_path = "adminpanel/academic/sales_centres";
    private $redirect_path1 = "adminpanel/academic/sales_centres/gallery";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/academic_model');
        set_title("Sales Centres");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['ckeditor_tOverview'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tOverview',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academic/sales_centres_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_series($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/sales_centres');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/sales_centres');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/sales_centres');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/sales_centres');
            }
        }
    }
	
	public function edit() {
        $data['ckeditor_tOverview'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tOverview',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academic/sales_centres_view', $data);
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
    
    
    //gallery
    public function gallery() {
        $recId = $this->uri->segment(5); 
        $data['cSaveStatus']= 'A';
        // var_dump($this->table_name1);exit();
        $data['list_data'] = $this->academic_model->get_units_gallery($recId,$this->table_name1);
        // var_dump("sdasd");exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academic/sales_unit_gallery_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_gallery($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        $iUnitId = $this->input->post('iUnitId', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/sales_centres/gallery/'.$iUnitId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/sales_centres/gallery/'.$iUnitId);
            }
        } else {
            if ($this->common_model->save_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/academic/sales_centres/gallery/'.$iUnitId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/academic/sales_centres/gallery/'.$iUnitId);
            }
        }
    }
	
	public function gallery_edit() {

        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name1);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name1);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/academic/sales_unit_gallery_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function gallery_change_status() {

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status($this->redirect_path1, $this->table_name1);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path1);
        }
    }

    public function gallery_delete_record() {
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record($this->redirect_path1, $this->table_name1);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path1);
        }
    }
    
}

?>
