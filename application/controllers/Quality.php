<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 14-07-2022
 * author : Karshan
 */

Class Quality extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['functions_of_foaqac'] = $this->quality_model->get_functions_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/functions_of_foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function member_of_foaqac() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['member_of_foaqac'] = $this->quality_model->get_member_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/member_of_foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
    public function foaqac() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['member_of_foaqac'] = $this->quality_model->get_member_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function schedule_of_meetings() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['schedule_of_meetings'] = $this->quality_model->get_schedule_of_meetings();
        $data['schedules'] = $this->quality_model->get_schedules();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/schedule_of_meetings_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
