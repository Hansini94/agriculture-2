<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Alumni_news extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/alumni_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['latest'] = $this->alumni_model->get_latest_news();
        $data['all'] = $this->alumni_model->get_news_list();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/news_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    public function news_detail($name) {
        
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/alumni_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['detail'] = $this->alumni_model->get_news_detail($newString);
        $data['all'] = $this->alumni_model->get_news_list();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/news_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>

    