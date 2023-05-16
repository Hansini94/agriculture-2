<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Advanced_module extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academic_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 3;

        $data['advanced_module'] = $this->academic_model->get_module_tab_data();
        $get_id = $this->academic_model->get_id();
        // die($get_id->id);
        $data['detail'] = $this->academic_model->get_module_detail($get_id->id);
        

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academic/advanced_module_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
    public function load_detail($id) {
        

        $this->load->model('frontend_model/academic_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 3;

        $data['detail'] = $this->academic_model->get_module_detail($id);
        $data['advanced_module'] = $this->academic_model->get_module_tab_data();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academic/advanced_module_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
