<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Hansini
 */

Class Downloads_faculty extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/downloads_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['enewsletter'] = $this->downloads_model->get_enewsletter_downloads();
        $data['faurs'] = $this->downloads_model->get_faurs_downloads();
        $data['hanthana'] = $this->downloads_model->get_hanthana_downloads();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/downloads/faculty_downloads_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    