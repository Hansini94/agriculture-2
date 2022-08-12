<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Alumni_events extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/alumni_model');

        $data = array();
        $data_header = array();

        $data['latest'] = $this->alumni_model->get_latest_events();
        $data['all'] = $this->alumni_model->get_events_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/events_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    public function events_detail($name) {

        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/alumni_model');

        $data = array();
        $data_header = array();

        $data['detail'] = $this->alumni_model->get_events_detail($newString);
        $data['all'] = $this->alumni_model->get_events_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/events_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>

    