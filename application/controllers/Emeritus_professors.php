<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Emeritus_professors extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/faculty_n_staff_model');

        $data = array();
        $data_header = array();

        $data['emeritus'] = $this->faculty_n_staff_model->get_emeritus_professor();       
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/faculty_n_staff/emeritus_professors_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    