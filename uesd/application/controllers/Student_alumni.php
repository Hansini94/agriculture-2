<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Student_alumni extends CI_Controller {

    public function index() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $config = array();
        $config["base_url"] = base_url() . "student_alumni";

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

        $config["total_rows"] = $this->student_model->get_count_alumni();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        
        $data_header['meta'] = 10;
        $data['all'] = $this->student_model->get_alumni_list($config["per_page"], $page);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/student_alumni_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
}

?>
