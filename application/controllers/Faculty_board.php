<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Faculty_board extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 6;
        $data['faculty_board_data'] = $this->about_us_model->get_faculty_board_data();
        $data['meeting_schedule_latest_data'] = $this->about_us_model->get_meeting_schedule_latest_data();
        $data['meeting_schedule_data'] = $this->about_us_model->get_meeting_schedule_data($data['meeting_schedule_latest_data'][0]->id);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        // var_dump($data['meeting_schedule_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/faculty_board_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 

    public function meeting_schedule_detail() {

        $this->load->model('frontend_model/about_us_model');
        $this->load->model('frontend_model/home_page_model');

        $year = $this->uri->segment(2);

        // var_dump($year);exit();

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 6;
        $data['meeting_schedule_detail'] = $this->about_us_model->get_meeting_schedule_detail_data($year);
        $data['meeting_schedule_data'] = $this->about_us_model->get_meeting_schedule_data($data['meeting_schedule_detail'][0]->id);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        // var_dump($data['meeting_schedule_detail']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/meeting_schedule_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
}

?>
