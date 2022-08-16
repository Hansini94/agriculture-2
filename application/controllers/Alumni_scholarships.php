<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Alumni_scholarships extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/alumni_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['scholarship'] = $this->alumni_model->get_scholarships_first();
        $data['schol_data'] = $this->alumni_model->get_scholarships_list();
        
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/alumni/header_view',$data_header);
        $this->load->view('frontendview/alumni/scholarships_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }   
    
    public function scholarships_detail($name) {
        
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/alumni_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['scholarship'] = $this->alumni_model->get_scholarships_detail($newString);
        $data['schol_data'] = $this->alumni_model->get_scholarships_list();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/alumni/header_view',$data_header);
        $this->load->view('frontendview/alumni/scholarships_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>

    