<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 08-07-2022
 * author : Karshan
 */
require_once 'vendor/autoload.php';

Class About_us extends CI_Controller {

    public function __construct() {
        parent::__construct();

        set_title("About us");
        // $this->load->model('frontend_model/Contact_us_page_model');
        // $this->load->model('frontend_model/About_us_page_model');

    }

    public function index() {
        $data = array();
        $data_header = array();

        // $data_header['contact_details'] = $this->Contact_us_page_model->get_all_data();
        // $data_header['title'] = 'About us';


        //$this->load->view('frontendview/inner_header_view');
        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/about_us_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
	
	 
}

?>
