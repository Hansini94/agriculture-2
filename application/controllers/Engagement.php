<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 09-08-2022
 * author : Hansini
 */

Class Engagement extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 16;
        $data['overview'] = $this->engagement_model->get_overview();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/overview_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function engagement_partnerships() {

        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 16;
        $data['partnerships'] = $this->engagement_model->get_partnerships();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/partnerships_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Research Engagement********************

    public function research_engagement() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $config = array();
        $config["base_url"] = base_url() . "engagement/research-engagement";

        $config['full_tag_open'] = '<ul class="pagination" style="padding-left: 0px !important;">';
		$config['full_tag_close'] = '</ul>';

        $config['first_link'] = false;
        $config['last_link'] = false;
 
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
 
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item" aria-current="page"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['attributes'] = array('');

        $config["total_rows"] = $this->engagement_model->get_count_research();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $data_header['meta'] = 16;

        $data['latest'] = $this->engagement_model->get_latest_research();
        $data['all'] = $this->engagement_model->get_research_list($config["per_page"], $page);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/research_engagements_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function rs_detail($name) {
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 16;

        $data['detail'] = $this->engagement_model->get_rs_detail($newString);
        $data['all'] = $this->engagement_model->get_research_list(0,0);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/rs_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Student Engagement********************

    public function student_engagement() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $config = array();
        $config["base_url"] = base_url() . "engagement/student-engagement";

        $config['full_tag_open'] = '<ul class="pagination" style="padding-left: 0px !important;">';
		$config['full_tag_close'] = '</ul>';

        $config['first_link'] = false;
        $config['last_link'] = false;
 
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
 
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item" aria-current="page"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['attributes'] = array('');

        $config["total_rows"] = $this->engagement_model->get_count_students();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $data_header['meta'] = 16;

        $data['latest'] = $this->engagement_model->get_latest_ste();
        $data['all'] = $this->engagement_model->get_ste_list($config["per_page"], $page);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/student_engagement_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function st_detail($name) {
        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 16;

        $data['detail'] = $this->engagement_model->get_st_detail($newString);
        $data['all'] = $this->engagement_model->get_ste_list(0,0);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/st_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    // **********************Community Engagement********************

    public function community_engagement() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $config = array();
        $config["base_url"] = base_url() . "engagement/community-engagement";

        $config['full_tag_open'] = '<ul class="pagination" style="padding-left: 0px !important;">';
		$config['full_tag_close'] = '</ul>';

        $config['first_link'] = false;
        $config['last_link'] = false;
 
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
 
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item" aria-current="page"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['attributes'] = array('');

        $config["total_rows"] = $this->engagement_model->get_count_community();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $data_header['meta'] = 16;

        $data['latest'] = $this->engagement_model->get_latest_com();
        $data['all'] = $this->engagement_model->get_com_list($config["per_page"], $page);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/community_engagement_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function com_detail($name) {

        $newString = str_replace('_', ' ', $name);

        $this->load->model('frontend_model/engagement_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 16;

        $data['detail'] = $this->engagement_model->get_com_detail($newString);
        $data['all'] = $this->engagement_model->get_com_list(0,0);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/com_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>
