<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Ayodhya
 */

Class Student_notices extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academics_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['student_notices'] = $this->home_page_model->get_student_notices();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/shortcutlinks/student_notices_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
