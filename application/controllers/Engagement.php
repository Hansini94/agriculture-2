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

        $data = array();
        $data_header = array();

        $data['overview'] = $this->engagement_model->get_overview();
        
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/overview_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function engagement_partnerships() {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['partnerships'] = $this->engagement_model->get_partnerships();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/partnerships_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Research Engagement********************

    public function research_engagement() {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['latest'] = $this->engagement_model->get_latest_research();
        $data['all'] = $this->engagement_model->get_research_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/research_engagements_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function rs_detail($id) {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['detail'] = $this->engagement_model->get_rs_detail($id);
        $data['all'] = $this->engagement_model->get_research_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/rs_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

// **********************Student Engagement********************

    public function student_engagement() {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['latest'] = $this->engagement_model->get_latest_ste();
        $data['all'] = $this->engagement_model->get_ste_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/student_engagement_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function st_detail($id) {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['detail'] = $this->engagement_model->get_st_detail($id);
        $data['all'] = $this->engagement_model->get_ste_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/st_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    // **********************Community Engagement********************

    public function community_engagement() {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['latest'] = $this->engagement_model->get_latest_com();
        $data['all'] = $this->engagement_model->get_com_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/community_engagement_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function com_detail($id) {

        $this->load->model('frontend_model/engagement_model');

        $data = array();
        $data_header = array();

        $data['detail'] = $this->engagement_model->get_com_detail($id);
        $data['all'] = $this->engagement_model->get_com_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/engagement/com_detail_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
}

?>
