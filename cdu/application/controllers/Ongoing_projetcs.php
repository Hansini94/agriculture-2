<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Ongoing_projetcs extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/projects_outreach_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 2;

        $data['advanced_module'] = $this->projects_outreach_model->get_ongoing_tab_data();
       $get_id = $this->projects_outreach_model->get_ongoing_id();
        // die($get_id->id);
        $data['detail'] = $this->projects_outreach_model->get_ongoing_detail($get_id->id);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/projects_outreach/ongoing_projects_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
    
    public function load_detail($id) {
        

        $this->load->model('frontend_model/projects_outreach_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 2;

        $data['detail'] = $this->projects_outreach_model->get_ongoing_detail($id);
        $data['advanced_module'] = $this->projects_outreach_model->get_ongoing_tab_data();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/projects_outreach/ongoing_projects_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
