<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Ayodhya
 */

Class Ahead_projects extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/quality_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 13;

        $data['ahead_project_list'] = $this->quality_model->get_ahead_projects();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/ahead_projects_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 

    public function projects() {

        $this->load->model('frontend_model/quality_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 13;

        $projectName = $this->uri->segment(3);

        $data['ahead_project_list'] = $this->quality_model->get_ahead_projects();

        $project = str_replace('-', ' ', $projectName);

        $data['ahead_projects'] = $this->quality_model->get_ahead_projects_others($project);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/ahead_project_details_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
}

?>
