<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 11-07-2022
 * author : Ayodhya
 */

Class About_us extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['about_us_data'] = $this->about_us_model->get_about_us_data();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        // var_dump($data_header['quick_links']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/about_us_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
