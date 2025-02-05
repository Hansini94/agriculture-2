<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Faculty_n_staff extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/faculty_n_staff_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 28;

        $data['home'] = $this->faculty_n_staff_model->get_home_content();   
        $data['link'] = $this->faculty_n_staff_model->get_academic_staff();      
        $data['form'] = $this->faculty_n_staff_model->get_declaration_form();   
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/faculty_n_staff/home_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    