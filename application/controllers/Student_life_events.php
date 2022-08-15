<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Hansini
 */

Class Student_life_events extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/student_life_model');

        $data = array();
        $data_header = array();

        $data['events'] = $this->student_life_model->get_sport_details();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_events_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    public function events_detail($name) {
        
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/student_life_model');

        $data = array();
        $data_header = array();

        $data['data'] = $this->student_life_model->get_sport_data($newString);
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_life_events_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>

    