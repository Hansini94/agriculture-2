<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 21-07-2022
 * author : Karshan
 */

Class Research extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/research_model');

        $data = array();
        $data_header = array();

        $data['faculty_research'] = $this->research_model->get_faculty_research();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/faculty_research_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function ethical_clearance_committee() {

        $this->load->model('frontend_model/research_model');

        $data = array();
        $data_header = array();

        $data['commitee'] = $this->research_model->get_ethical_clearance_committee();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/ethical_clearance_committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function faculty_research_committee() {

        $this->load->model('frontend_model/research_model');

        $data = array();
        $data_header = array();

        $data['commitee'] = $this->research_model->get_faculty_research_committee();
        $data['members'] = $this->research_model->get_members();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/faculty_research_committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

}

?>
