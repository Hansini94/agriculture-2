<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Student_Research extends CI_Controller {

    public function index() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $config = array();
        $config["base_url"] = base_url() . "Student-Research";

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

        $config["total_rows"] = $this->research_model->get_count_student();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        
        $data_header['meta'] = 12;
        $data['all'] = $this->research_model->get_student_list($config["per_page"], $page);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/student_research_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
    public function student_detail() {
        $id = $this->uri->segment(3);
        // $newstring = str_replace('_', ' ', $name);
        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 12;

        $data['detail'] = $this->research_model->get_student_detail($id);
        $data['all'] = $this->research_model->get_student_detail_list($id);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/student_research_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
