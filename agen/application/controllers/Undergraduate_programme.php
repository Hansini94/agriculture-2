<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Undergraduate_programme extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academic_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 2;

        $data['core_program'] = $this->academic_model->get_core_program_data();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academic/undergraduate_programme_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
