<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 08-08-2022
 * author : Hansini
 */

Class Rag_harassment extends CI_Controller {

    private $table_name = "tbl_rag_harassment";
    private $page_id = "300";
    private $redirect_path = "adminpanel/home_page/rag_harassment";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        set_title("Rag & Harassment");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	
        
        $data['ckeditor_tContentRight'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContentRight',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['ckeditor_tContentLeft'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContentLeft',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),            
        );

        $data['cSaveStatus']= 'E';
		
        $data['edit_data'] = $this->common_model->get_all_data_list($this->table_name);
		// echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/home_page/rag_harassment_view', $data);
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
                redirect(base_url() . 'adminpanel/home_page/rag_harassment');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/home_page/rag_harassment');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/home_page/rag_harassment');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/home_page/rag_harassment');
            }
        }
    }

}

?>
