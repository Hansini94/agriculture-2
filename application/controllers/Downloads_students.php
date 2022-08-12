<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Downloads_students extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/downloads_model');

        $data = array();
        $data_header = array();

        $data['student'] = $this->downloads_model->get_student_downloads();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/downloads/student_downloads_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    