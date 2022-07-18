<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-07-2022
 * author : Karshan
 */

Class Faq extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['faq'] = $this->home_page_model->get_faq_category();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/faq_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>
