<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 18-07-2022
 * author : Karshan
 */

Class International extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/international_model');

        $data = array();
        $data_header = array();

        $data['overview'] = $this->international_model->get_overview();
        $data['visiting_professors'] = $this->international_model->get_visiting_professors();
        $data['terms_of_reference'] = $this->international_model->get_terms_of_reference();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/international/overview_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>
