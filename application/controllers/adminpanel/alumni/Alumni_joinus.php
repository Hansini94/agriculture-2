<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 04-08-2022
 * author : Hansini
 */

Class Alumni_joinus extends CI_Controller {

    private $table_name = "tbl_joinus";
    private $page_id = "269";
    private $redirect_path = "adminpanel/alumni/alumni_joinus";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/alumni_model');
        set_title("Alumni Join Us");
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

        $data['ckeditor_tContent_benefits'] = array(
            //ID of the textarea that will be replaced
            'id' => 'tContent_benefits',
            'path' => 'assets/js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),            
        );


        $data['cSaveStatus']= 'E';
		
        $data['joinus_data'] = $this->alumni_model->get_alumni_joinus_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/alumni/alumni_joinus_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_joinus($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data('tbl_joinus')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/alumni/alumni_joinus');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/alumni/alumni_joinus');
            }
        } else {
            if ($this->common_model->save_data('tbl_joinus')) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/alumni/alumni_joinus');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/alumni/alumni_joinus');
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
