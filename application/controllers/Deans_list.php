<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Deans_list extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/current_student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['dean'] = $this->current_student_model->get_deans_list();  
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();     
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/current_students/deans_list_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    