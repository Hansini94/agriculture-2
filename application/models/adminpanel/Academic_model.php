<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academic_model extends CI_Model {

    public function get_bsc_agtech_data() {

        $this->db->from('tbl_bsc_agtech_mgt');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_core_programme_structure_list() {

        $this->db->from('tbl_bsc_core_programme_structure');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_core_programme_structure($id) {

        $this->db->from('tbl_bsc_core_programme_structure');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_agtech_course_sequence_list() {

        $this->db->from('tbl_agtech_course_sequence');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_agtech_course_sequence($id) {

        $this->db->from('tbl_agtech_course_sequence');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_advance_programme_structure_list() {

        $this->db->from('tbl_agtech_adv_prog_structure');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_advance_programme_structure($id) {

        $this->db->from('tbl_agtech_adv_prog_structure');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_module_name($id) {

        $this->db->from('tbl_agtech_adv_prog_structure');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_advance_programme_course_list($id) {

        $this->db->from('tbl_agtech_adv_prog_course');
        $this->db->where('iAdvProgId', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_advance_programme_course_list($id) {

        $this->db->from('tbl_agtech_adv_prog_course');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_introduction_data() {

        $this->db->from('tbl_bsc_fst_introduction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_course_sequence_list() {

        $this->db->from('tbl_bsc_fst_course_sequence');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_fst_course_sequence($id) {

        $this->db->from('tbl_bsc_fst_course_sequence');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_introduction_data() {

        $this->db->from('tbl_bsc_asf_introduction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_course_sequence_list() {

        $this->db->from('tbl_bsc_asf_course_sequence');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_bsc_asf_course_sequence($id) {

        $this->db->from('tbl_bsc_asf_course_sequence');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_agtech_undergraduate_data() {

        $this->db->from('tbl_bsc_undergraduate');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_undergraduate_data() {

        $this->db->from('tbl_bsc_undergraduate');
		$this->db->where('id', 2);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_undergraduate_data() {

        $this->db->from('tbl_bsc_undergraduate');
		$this->db->where('id', 3);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_agtech_prog_org_data() {

        $this->db->from('tbl_bsc_prog_org');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_prog_org_data() {

        $this->db->from('tbl_bsc_prog_org');
		$this->db->where('id', 2);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_prog_org_data() {

        $this->db->from('tbl_bsc_prog_org');
		$this->db->where('id', 3);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_agtech_requirement_data() {

        $this->db->from('tbl_bsc_requirement');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_requirement_data() {

        $this->db->from('tbl_bsc_requirement');
		$this->db->where('id', 2);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_requirement_data() {

        $this->db->from('tbl_bsc_requirement');
		$this->db->where('id', 3);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_agtech_assessment_scheme_data() {

        $this->db->from('tbl_bsc_assessment_scheme');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_asf_assessment_scheme_data() {

        $this->db->from('tbl_bsc_assessment_scheme');
		$this->db->where('id', 2);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_bsc_fst_assessment_scheme_data() {

        $this->db->from('tbl_bsc_assessment_scheme');
		$this->db->where('id', 3);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_postgraduate_programme_data() {

        $this->db->from('tbl_postgraduate_programme');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    ###############################

}

?>
