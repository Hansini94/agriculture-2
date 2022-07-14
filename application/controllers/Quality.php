<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 14-07-2022
 * author : Karshan
 */

Class Quality extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['functions_of_foaqac'] = $this->quality_model->get_functions_of_foaqac();

        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/functions_of_foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
