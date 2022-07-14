<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Dean_office extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');

        $data = array();
        $data_header = array();

        $data['dean_office_data'] = $this->about_us_model->get_dean_office_data();
        // $data['dean_designation_data'] = $this->about_us_model->get_dean_officer_designation_data();
        // $data['dean_officer_data'] = $this->about_us_model->get_dean_office_officer_data();

        // var_dump($data['about_us_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/dean_office_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
