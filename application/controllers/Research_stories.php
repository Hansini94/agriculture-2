<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 15-08-2022
 * author : Ayodhya
 */

Class Research_stories extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 14;

        $data['research_story_main'] = $this->research_model->get_research_story_main();
        // var_dump($data['research_story_main'][0]->id);
        $data['research_stories'] = $this->research_model->get_research_stories($data['research_story_main'][0]->id);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['research_stories']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/research_stories_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 

    public function story_detail() {

        $this->load->model('frontend_model/research_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $title = $this->uri->segment(3);

        // var_dump($title);exit();

        $storyTitle = str_replace('-', ' ', $title);

        $data_header['meta'] = 14;

        $data['research_story_detail'] = $this->research_model->get_research_story_detail($storyTitle);
        $data['research_stories'] = $this->research_model->get_research_stories($data['research_story_detail'][0]->id);
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['research_stories']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/research/research_story_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
}

?>
