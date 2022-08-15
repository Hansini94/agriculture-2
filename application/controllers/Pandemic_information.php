<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Ayodhya
 */

Class Pandemic_information extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academics_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data['prevention_information'] = $this->home_page_model->get_prevention_information_data();
        $data['prevent_post_data'] = $this->home_page_model->get_prevent_post_data();
        $data['leaflet_data'] = $this->home_page_model->get_leaflet_data();
        $data['pandemic_other_data'] = $this->home_page_model->get_pandemic_other_data();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/shortcutlinks/pandemic_information_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
