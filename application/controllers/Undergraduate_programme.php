<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-07-2022
 * author : Ayodhya
 */

Class Undergraduate_programme extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/about_us_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        /*************************AGTECH********************************* */
        $data['undergraduate_agtech_data'] = $this->about_us_model->get_undergraduate_agtech_data();
        $data['agtech_programme_details'] = $this->about_us_model->get_agtech_programme_details_data();
        $data['scholarship_agtech_details'] = $this->about_us_model->get_agtech_scholarship_data();

        /*************************ASF********************************* */
        $data['undergraduate_asf_data'] = $this->about_us_model->get_undergraduate_asf_data();
        $data['asf_programme_details'] = $this->about_us_model->get_asf_programme_details_data();
        $data['scholarship_asf_details'] = $this->about_us_model->get_asf_scholarship_data();

        /*************************FST********************************* */
        $data['undergraduate_fst_data'] = $this->about_us_model->get_undergraduate_fst_data();
        $data['fst_programme_details'] = $this->about_us_model->get_fst_programme_details_data();
        $data['scholarship_fst_details'] = $this->about_us_model->get_fst_scholarship_data();


        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/academics/undergraduate_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
