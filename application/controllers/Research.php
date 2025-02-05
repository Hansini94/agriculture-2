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
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 14;

        $data['faculty_research'] = $this->research_model->get_faculty_research();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/faculty_research_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function ethical_clearance_committee() {

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 14;

        $data['commitee'] = $this->research_model->get_ethical_clearance_committee();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/ethical_clearance_committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function faculty_research_committee() {

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 14;

        $data['commitee'] = $this->research_model->get_faculty_research_committee();
        $data['members'] = $this->research_model->get_members();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/faculty_research_committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

}

?>
