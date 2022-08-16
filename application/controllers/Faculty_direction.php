<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 16-08-2022
 * author : Ayodhya
 */

Class Faculty_direction extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/getting_around_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['faculty_direction_data'] = $this->getting_around_model->get_faculty_direction_data();   
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/getting_around/faculty_direction_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    