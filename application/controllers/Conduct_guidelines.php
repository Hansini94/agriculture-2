<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Conduct_guidelines extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/faculty_n_staff_model');

        $data = array();
        $data_header = array();

        $data['guide'] = $this->faculty_n_staff_model->get_con_guidelines_content();       
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/faculty_n_staff/conduct_guidelines_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    