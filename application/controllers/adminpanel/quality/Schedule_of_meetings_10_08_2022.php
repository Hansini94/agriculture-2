<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* date : 05-07-2022
 * author : Karshan
 */

Class Schedule_of_meetings extends CI_Controller {

    private $table_name = "tbl_schedule_of_meetings";
    private $page_id = "54";
    private $redirect_path = "adminpanel/quality/schedule_of_meetings";

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('common_library');
        $this->load->helper('flexigrid');
        $this->load->helper('ckeditor');
        $this->load->model('adminpanel/common_model');
        $this->load->model('adminpanel/quality_model');
        set_title("Schedule of Meetings");
        $user_privilages = $this->common_model->get_page_detail($this->page_id);
        $this->session->set_userdata('u_privilages', $user_privilages);
    }

    public function index() {	

        $data['cSaveStatus']= 'E';

        $data['list_data'] = $this->quality_model->get_schedule_list();
        $data['edit_schedule'] = $this->quality_model->get_schedule_data();
		//echo 'ff'; exit();
        $this->load->view('adminpanel/header_view');
        $this->load->view('adminpanel/quality/schedule_of_meetings_view', $data);
        $this->load->view('adminpanel/footer_view');
    }

    public function save_schedule($data = '') {
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        if ($cSaveStatus === 'E') {
            if ($this->quality_model->update_schedule_data()) {
                //$tDes = "saved data has been updated";
                //$this->common_model->add_log($tDes);
                $this->session->set_flashdata('message_saved', 'Saved successfully.');
                redirect(base_url() . 'adminpanel/quality/schedule_of_meetings');
            } else {
                $this->session->set_flashdata('message_error', 'Save fail!');
                redirect(base_url() . 'adminpanel/quality/schedule_of_meetings');
            }
        } 
        // else {
        //     if ($this->common_model->save_data('tbl_schedule_of_meetings')) {
        //         //$tDes = "saved data has been updated";
        //         //$this->common_model->add_log($tDes);
        //         $this->session->set_flashdata('message_saved', 'Saved successfully.');
        //         redirect(base_url() . 'adminpanel/quality/schedule_of_meetings');
        //     } else {
        //         $this->session->set_flashdata('message_error', 'Save fail!');
        //         redirect(base_url() . 'adminpanel/quality/schedule_of_meetings');
        //     }
        // }
    }

}

?>
