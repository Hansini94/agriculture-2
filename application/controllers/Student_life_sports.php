<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Student_life_sports extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/student_life_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['sports'] = $this->student_life_model->get_sport_details();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_sports_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    public function sports_detail($name) {
        
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/student_life_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['data'] = $this->student_life_model->get_sport_data($newString);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_sports_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>

    