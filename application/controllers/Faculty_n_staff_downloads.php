<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Faculty_n_staff_downloads extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/faculty_n_staff_model');

        $data = array();
        $data_header = array();

        $data['general'] = $this->faculty_n_staff_model->get_general_downloads();       
        $data['research'] = $this->faculty_n_staff_model->get_research_downloads();  
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/faculty_n_staff/downloads_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    