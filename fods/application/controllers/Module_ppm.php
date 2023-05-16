<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Module_ppm extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 9;            
        $data['students'] = $this->student_model->get_ppm_students();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/module_ppm_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
