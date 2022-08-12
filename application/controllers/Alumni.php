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

        $data = array();
        $data_header = array();

        $data['slider'] = $this->alumni_model->get_mainslider_details();
        $data['content'] = $this->alumni_model->get_home_content();
        $data['news_data'] = $this->alumni_model->get_news_list();
        $data['news_latest'] = $this->alumni_model->get_latest_news();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/home_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    