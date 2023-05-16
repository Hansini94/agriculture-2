<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Outreach extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/projects_outreach_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 4;

        $data['post_graduate'] = $this->projects_outreach_model->get_postgraduate_data();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/projects_outreach/outreach_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
