<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Processing_units extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academic_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 3;

        $data['advanced_module'] = $this->academic_model->get_processing_unit_data();
        $get_id = $this->academic_model->get_processing_unit_id();
        // die($get_id->id);
        $data['detail'] = $this->academic_model->get_processing_unit_details($get_id->id);
       

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academic/processing_unit_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
    public function load_detail() {
        $module_id = $this->uri->segment(3); 
        $id = base64_decode($module_id);
        // die($id);exit();

        $this->load->model('frontend_model/academic_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 3;

        $data['detail'] = $this->academic_model->get_processing_unit_details($id);
        $data['advanced_module'] = $this->academic_model->get_processing_unit_data();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academic/processing_unit_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
