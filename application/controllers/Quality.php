<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 14-07-2022
 * author : Karshan
 */

Class Quality extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['functions_of_foaqac'] = $this->quality_model->get_functions_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/functions_of_foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function member_of_foaqac() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['member_of_foaqac'] = $this->quality_model->get_member_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/member_of_foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
    public function foaqac() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['member_of_foaqac'] = $this->quality_model->get_member_of_foaqac();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/foaqac_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function schedule_of_meetings() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['schedule_of_meetings'] = $this->quality_model->get_schedule_of_meetings();
        $data['schedules'] = $this->quality_model->get_schedules();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/schedule_of_meetings_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function frc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_faculty_research_committee();
        $data['members'] = $this->quality_model->get_members('tbl_research_committee_composition');
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/quality/frc_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function cdc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_curriculum_development_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_development_committee_composition');

            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/cdc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {

            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_development_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/cdc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function ltc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_language_teaching_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_teaching_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/ltc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_teaching_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/ltc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function lc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_library_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_library_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/lc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_library_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/lc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function pprc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_public_relations_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_public_relations_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/pprc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_public_relations_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/pprc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function elcumc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_computer_unit');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_computer_unit_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/elcumc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_computer_unit_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/elcumc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function ttc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_time_table_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_time_table_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/ttc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_time_table_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/ttc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function tmu() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_teaching_method_unit');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_teaching_method_unit_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/tmu_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_teaching_method_unit_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/tmu_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

    public function sawc() {

        $this->load->model('frontend_model/quality_model');

        $data = array();
        $data_header = array();

        $data['committee'] = $this->quality_model->get_committee('tbl_welfare_committee');
        // var_dump($data);exit();

        if($this->uri->segment(3)){
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][1]->id, 'tbl_welfare_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/sawc_previous_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        } else {
            $data['members'] = $this->quality_model->get_committee_members($data['committee'][0]->id, 'tbl_welfare_committee_composition');
            $this->load->view('frontendview/inner_header_view',$data_header);
            $this->load->view('frontendview/quality/sawc_view',$data);
            $this->load->view('frontendview/footer_view', $data_header);
        }
       
    }

}

?>
