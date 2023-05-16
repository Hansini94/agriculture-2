<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Staff extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/staff_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 5;

        $data['academic_caption'] = $this->staff_model->get_academic_caption();
        $data['academic_details'] = $this->staff_model->get_academic_staff_data();
        $data['non_caption'] = $this->staff_model->get_non_academic_caption();
        $data['non_details'] = $this->staff_model->get_non_academic_staff_data();
        $data['academic_category'] = $this->staff_model->get_academic_staff_category(); 
        $data['non_category'] = $this->staff_model->get_non_academic_staff_category();  

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/staff/staff_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
    public function academic_staff_detail($id) {
        

        $this->load->model('frontend_model/staff_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 5;

        $data['detail'] = $this->staff_model->get_academic_staff_detail($id);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/staff/management_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function non_academic_staff_detail($id) {
        

        $this->load->model('frontend_model/staff_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 5;

        $data['detail'] = $this->staff_model->get_non_academic_staff_detail($id);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/staff/management_support_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
