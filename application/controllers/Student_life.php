<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Student_life extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/student_life_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 36;

        $data['data'] = $this->student_life_model->get_home_content();    
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();  
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    } 
    
    public function ss_sinhala() {

        $this->load->model('frontend_model/student_life_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 36;

        $data['data'] = $this->student_life_model->get_home_content();    
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();  
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_sinhala_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    } 

    public function ss_tamil() {

        $this->load->model('frontend_model/student_life_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 36;

        $data['data'] = $this->student_life_model->get_home_content();    
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();  
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_tamil_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    }

    
    
    
}

?>

    