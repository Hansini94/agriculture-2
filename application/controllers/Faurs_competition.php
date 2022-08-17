<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Faurs_competition extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 15;

        $data['competition'] = $this->research_model->get_competition_first();
        $data['competition_data'] = $this->research_model->get_competition_list();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/competition_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }   
    
    public function competition_detail($name) {
        
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 15;

        $data['competition'] = $this->research_model->get_competition_detail($newString);
        $data['competition_data'] = $this->research_model->get_competition_list();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/competition_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>

    