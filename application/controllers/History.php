<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class History extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 7;
        $data['history_data'] = $this->about_us_model->get_history_data();
        $data['former_deans_data'] = $this->about_us_model->get_former_deans_data();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/history_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
