<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Gpa_calculator extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/current_student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 30;

        $data['agtech'] = $this->current_student_model->get_gpa_agtech_data();  
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();    
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/current_students/gpa_cal_agatech_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    }   
    
    public function asf_gpa() {

        $this->load->model('frontend_model/current_student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 30;

        $data['asf'] = $this->current_student_model->get_gpa_asf_data();   
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();   
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/current_students/gpa_cal_asf_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    }

    public function fst_gpa() {

        $this->load->model('frontend_model/current_student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 30;

        $data['fst'] = $this->current_student_model->get_gpa_fst_data();  
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();    
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/current_students/gpa_cal_fst_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);       
    }
    
}

?>

    