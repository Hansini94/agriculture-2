<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Faculty_brochure extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');

        $data = array();
        $data_header = array();

        $data['faculty_brochure_data'] = $this->about_us_model->get_faculty_brochure_data();
        $data['brochure_top_images'] = $this->about_us_model->get_faculty_brochure_top_img();
        $data['brochure_bottom_images'] = $this->about_us_model->get_faculty_brochure_bottom_img();

        // var_dump($data['brochure_bottom_images']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/aboutus/faculty_brochure_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
