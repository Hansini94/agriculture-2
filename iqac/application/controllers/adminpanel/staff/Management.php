<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


Class Management extends CI_Controller {

    private $table_name = "tbl_management";
    private $table_name1 = "tbl_management_caption";
    private $table_name2 = "tbl_management_category";
    private $page_id = "10";
    private $redirect_path = "adminpanel/staff/management";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        set_title("Management");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {
        $data['cSaveStatus']= 'A';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/staff/management_category_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_category($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management');
            }
        } else {
            if ($this->common_model->save_data($this->table_name2)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management');
            }
        }
    }
	
	public function cat_edit() {
        $data['cSaveStatus']= 'E';
        $data['list_data'] = $this->common_model->get_all_data_list($this->table_name2);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name2);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/staff/management_category_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function cat_change_status() {

        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status($this->redirect_path, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path);
        }
    }

    public function cat_delete_record() {
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record($this->redirect_path, $this->table_name2);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . $this->redirect_path);
        }
    }

    // staffs

    public function management_staffs() {
        $data['ckeditor_tContent1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent1',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
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
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent3'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent3',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent4'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent4',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'A';
        $CatId = $this->uri->segment(5);
        $data['list_data'] = $this->common_model->get_cat_staff($CatId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/staff/management_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_data($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $iCatId = $this->input->post('iCatId', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
            }
        }
    }
	
	public function edit() {
        $data['ckeditor_tContent1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent1',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
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
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent3'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent3',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContent4'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent4',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
        $CatId = $this->uri->segment(6);
        $data['list_data'] = $this->common_model->get_cat_staff($CatId, $this->table_name);
		$recId = $this->uri->segment(5);
		$data['edit_data'] = $this->common_model->get_edit_data($recId, $this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/staff/management_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function change_status() {
        $iCatId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_edit')) {
            $this->common_library->flexigrid_change_status('adminpanel/staff/management/management_staffs/'.$iCatId, $this->table_name);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
        }
    }

    public function delete_record() {
        $iCatId = $this->uri->segment(7);
        $this->common_library->check_privilege('p_edit');
        if ($this->common_library->check_privilege('p_delete')) {
            $this->common_library->flexigrid_delete_record('adminpanel/staff/management/management_staffs/'.$iCatId, $this->table_name);
        } else {
            $this->session->set_flashdata('message_restricted', 'You do not have permission.');
            redirect(base_url() . 'adminpanel/staff/management/management_staffs/'.$iCatId);
        }
    }

    //add caption
    public function add_caption() {        
        $data['cSaveStatus']= 'E';		
		$data['edit_data'] = $this->common_model->get_all_data_list($this->table_name1);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/staff/management_caption_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_caption($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management/add_caption');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management/add_caption');
            }
        } else {
            if ($this->common_model->save_data($this->table_name1)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/staff/management/add_caption');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/staff/management/add_caption');
            }
        }
    }
    
}

?>
