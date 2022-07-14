<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Undergraduate_programme extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');

        $data = array();
        $data_header = array();

        $data['undergraduate_data'] = $this->about_us_model->get_undergraduate_data();

        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academics/undergraduate_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
