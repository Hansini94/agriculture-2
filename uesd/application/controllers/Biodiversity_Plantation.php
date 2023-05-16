<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Biodiversity_Plantation extends CI_Controller {

    public function index() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        
        $data_header['meta'] = 13;
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/biodiversity_plantation_view');
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
}

?>
