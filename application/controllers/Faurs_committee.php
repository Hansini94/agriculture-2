<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Faurs_committee extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/research_model');

        $data = array();
        $data_header = array();

        $data['current'] = $this->research_model->get_current_committee();
        $data['previous'] = $this->research_model->get_previous_committee();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
    
}

?>

    