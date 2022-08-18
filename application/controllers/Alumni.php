<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Alumni extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/alumni_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 18;

        $data['slider'] = $this->alumni_model->get_mainslider_details();
        $data['content'] = $this->alumni_model->get_home_content();
        $data['news_data'] = $this->alumni_model->get_news_detail_list();
        $data['links'] = $this->alumni_model->get_shortlinks_details();
        
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/alumni/header_view',$data_header);
        $this->load->view('frontendview/alumni/home_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    