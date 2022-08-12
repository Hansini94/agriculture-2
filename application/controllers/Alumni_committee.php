<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 10-08-2022
 * author : Hansini
 */

Class Alumni_committee extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/alumni_model');

        $data = array();
        $data_header = array();

        $data['current'] = $this->alumni_model->get_current_committee();
        $data['previous'] = $this->alumni_model->get_previous_committee();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/alumni/committee_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }    
}

?>
