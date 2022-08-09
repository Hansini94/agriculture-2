<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 08-08-2022
 * author : Ayodhya
 */

Class Walk_around_uni extends CI_Controller {

    private $table_name = "tbl_walk_around_uni";
    private $page_id = "117";
    private $redirect_path = "adminpanel/getting_around/walk_around_uni";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        set_title("Walk Around the Uni");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {

        $data['cSaveStatus']= 'E';
		
        $data['map_direction_data'] = $this->common_model->get_all_data_list($this->table_name);
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/getting_around/walk_around_uni_view', $data);
        $this->load->view('adminpanel/footer_view');
    }
	

    public function save_map_direction($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->common_model->update_saved_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/getting_around/walk_around_uni');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/getting_around/walk_around_uni');
            }
        } else {
            if ($this->common_model->save_data($this->table_name)) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/getting_around/walk_around_uni');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/getting_around/walk_around_uni');
            }
        }
    }

}

?>
