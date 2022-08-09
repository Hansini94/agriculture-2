<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 09-08-2022
 * author : Hansini
 */

Class Services extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/services_model');

        $data = array();
        $data_header = array();

        $data['transcript'] = $this->services_model->get_transcript_list();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/services/transcript_request_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }


    public function outreach_centers() {

        $this->load->model('frontend_model/services_model');

        $data = array();
        $data_header = array();

        $data['centers'] = $this->services_model->get_outreach_centers();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/services/outreach_centers_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Analytical services********************

    public function analytical_services() {

        $this->load->model('frontend_model/services_model');

        $data = array();
        $data_header = array();

        $data['content'] = $this->services_model->get_as_content();
        $data['links'] = $this->services_model->get_as_link_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/services/analytical_services_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Research & Experiemental Facilities********************

    public function Research_Experiemental_Facilities() {

        $this->load->model('frontend_model/services_model');

        $data = array();
        $data_header = array();

        $data['content'] = $this->services_model->get_ref_content();
        $data['links'] = $this->services_model->get_ref_link_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/services/research_experimental_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }


    
}

?>
