<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Faculty_organization extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');

        $data = array();
        $data_header = array();

        $data['faculty_org_data'] = $this->about_us_model->get_faculty_org_data();

        // var_dump($data['faculty_org_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/faculty_org_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
