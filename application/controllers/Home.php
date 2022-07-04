<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {
            
        $this->load->model('frontend_model/home_page_model');
        $this->load->model('frontend_model/electrician_club_model');
        $this->load->model('frontend_model/contact_model');

        $data = array();
        $data['main_slider'] = $this->home_page_model->get_main_slider();	
        $data['mobile_slider'] = $this->home_page_model->get_mobile_slider();	
        $data['main_slider_video'] = $this->home_page_model->get_main_slider_video();	
        $data['home_details'] = $this->home_page_model->load_home_detail();
        $data['product_category'] = $this->home_page_model->load_product_cat_detail();
        $data['company_overview'] = $this->home_page_model->load_company_overview();
        $data['featured_products'] = $this->home_page_model->load_cables();
        $data['achievement'] = $this->home_page_model->get_achievement_data();
        $data['awards'] = $this->home_page_model->load_awards();
        $data['projects'] = $this->home_page_model->load_projects();
        $data['news'] = $this->home_page_model->load_news();
        $mainNewsId = $data['news'][0]->id;

        $data['latest_news'] = $this->home_page_model->load_latest_news($mainNewsId);

        $data['news_gallery'] = $this->home_page_model->load_news_gallery($mainNewsId);
        $data['research_development'] = $this->home_page_model->get_research_development_content_data();
        
        $data["contact_us"] = $this->contact_model->load_contact_details();

        $data["electrician_club_content"] = $this->electrician_club_model->get_electrician_club_content_data();
                
		$this->load->view('frontendview/header_view',$data);
		$this->load->view('frontendview/home_view',$data);
		$this->load->view('frontendview/footer_view',$data);
		
    }
	 
}
?>