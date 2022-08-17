<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Academic_calender extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/current_student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 26;
        $data['ac_content'] = $this->current_student_model->get_academic_calender();   
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();   
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/current_students/academic_calender_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    