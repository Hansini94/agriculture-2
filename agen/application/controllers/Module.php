<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Module extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 6;

        $data['module'] = $this->student_model->get_module();
        
        
        $module_name_id = $this->student_model->get_module_name_id();
        $data['name'] = $this->student_model->get_module_name($module_name_id->id);        
        
        $module_series_id = $this->student_model->get_module_series_id($module_name_id->id);
        $data['series'] = $this->student_model->get_module_series($module_name_id->id);        
        
        $module_students_id = $this->student_model->get_module_students_id($module_name_id->id);
        $data['students'] = $this->student_model->get_module_students($module_name_id->id);

        // var_dump($module_name_id->id);exit();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/module_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	
    
    public function load_detail($id) {
        

        $this->load->model('frontend_model/student_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();
        
        $data_header['meta'] = 6;

        $data['module'] = $this->student_model->get_module();
        $data['name'] = $this->student_model->get_module_name($id);
        $data['series'] = $this->student_model->get_module_series($id);
        $data['students'] = $this->student_model->get_module_students($id);

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/student/module_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
}

?>
