<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Home_detail extends CI_Controller {

    private $table_name = "tbl_home_detail";
    private $page_id = "3";
    private $redirect_path = "adminpanel/home_page/home_detail";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/home_model');
        set_title("Home");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }
	
	public function edit_home_detail() {

        $data['ckeditor'] = array(
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

        $data['ckeditor_tDescriptionChinese'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tDescriptionChinese',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
            
        );

        $data['ckeditor_tProductCatDesc'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tProductCatDesc',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
            
        );

        $data['ckeditor_tFeaturedProDesc'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tFeaturedProDesc',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
            
        );

        $data['ckeditor_tAcheiveDesc'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tAcheiveDesc',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
            
        );

        $data['ckeditor_tFeaturedProjDesc'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tFeaturedProjDesc',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
            
        );
        
        $data['cSaveStatus']= 'E';
		
		$data['edit_data'] = $this->common_model->get_all_data_list($this->table_name);
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/home_page/home_detail_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_home($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/home_page/home_detail/edit_home_detail');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/home_page/home_detail/edit_home_detail');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/home_page/home_detail/edit_home_detail');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/home_page/home_detail/edit_home_detail');
            }
        }
    }

}

?>
