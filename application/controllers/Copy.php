<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Copy extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {

        $this->load->model('frontend_model/home_page_model');

        $data = array();

        $data_header['meta'] = 1;
        $data['home_details'] = $this->home_page_model->get_home_details();
        $data['featured_news'] = $this->home_page_model->get_featured_news_data();
        $data['slider_news'] = $this->home_page_model->get_slider_news_data();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
                
		$this->load->view('frontendview/header_copy_view',$data_header);
		$this->load->view('frontendview/home_copy_view',$data);
		$this->load->view('frontendview/footer_copy_view',$data_header);
		
    }
	 
}
?>