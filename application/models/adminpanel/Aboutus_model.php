<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus_model extends CI_Model {

    public function get_aboutus_data() {

        $this->db->from('tbl_aboutus_content');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_quick_links_list() {

        $this->db->from('tbl_quick_links');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_quick_links($id) {

        $this->db->from('tbl_quick_links');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_history_data() {

        $this->db->from('tbl_history');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_org_data() {

        $this->db->from('tbl_faculty_organization');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_board_data() {

        $this->db->from('tbl_faculty_board');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_schedule_list() {

        $this->db->from('tbl_meeting_schedule');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_meeting_schedule($id) {

        $this->db->from('tbl_meeting_schedule');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_map_direction_data() {

        $this->db->from('tbl_map_direction');
		$this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_dean_list() {

        $this->db->from('tbl_former_deans');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_deans($id) {

        $this->db->from('tbl_former_deans');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_dean_office_data() {

        $this->db->from('tbl_dean_office');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_dean_officers_list() {

        $this->db->from('tbl_dean_office_officer');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_officers_dean($id) {

        $this->db->from('tbl_dean_office_officer');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_faculty_brochure_data() {

        $this->db->from('tbl_faculty_brochure');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_degree_list() {

        $this->db->from('tbl_degree');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_undergraduate($id) {

        $this->db->select('tbl_undergraduate.*, tbl_degree.vName');
        $this->db->from('tbl_undergraduate');
        $this->db->join('tbl_degree', 'tbl_degree.id = tbl_undergraduate.iDegree');
        $this->db->where('tbl_undergraduate.iDegree', $id);
        $this->db->where('tbl_undergraduate.iStudentType', 1);
        $query = $this->db->get();
    //    echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_undergraduate_conferred($id) {

        $this->db->select('tbl_undergraduate.*, tbl_degree.vName');
        $this->db->from('tbl_undergraduate');
        $this->db->join('tbl_degree', 'tbl_degree.id = tbl_undergraduate.iDegree');
        $this->db->where('tbl_undergraduate.iDegree', $id);
        $this->db->where('tbl_undergraduate.iStudentType', 2);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function update_undergraduate_data($table, $save_status)
	{  
		// $data = array(
		// 	'vStoreName' => $this->input->post('vStoreName', TRUE),
		// 	'vAddress' => $this->input->post('vAddress', TRUE),
		// 	'vMapLink' => $this->input->post('vMapLink', TRUE),
		// 	'vTele' => $this->input->post('vTele', TRUE),
		// 	'vEmail' => $this->input->post('vTele', TRUE),
		// 	'iOrder' => $this->input->post('iOrder', TRUE),
		// 	'dSaveadte' => date('Y-m-d H:i:s'),
		// 	'cEnable' => 'Y'
		// );

        $id = $this->input->post('id', TRUE);

        $undCount = count($id);

        for($i=0; $i<$undCount; $i++) {
            $id = $_POST['id'][$i];
            $data['vBatch'] = $_POST['vBatch'][$i];
            $data['iMale'] = $_POST['iMale'][$i];
            $data['iFemale'] = $_POST['iFemale'][$i];


			$this->db->where('id', $id);
            $query =  $this->db->update($table, $data);
           
        }

        // print_r($this->db->last_query());      exit();

        // for($i=0; )
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }

	//print_r($this->db->last_query());      exit();

	}

    public function get_academic_staff_list() {

        $this->db->from('tbl_academic_staff');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_academic_staff($id) {

        $this->db->from('tbl_academic_staff');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_non_academic_staff_list() {

        $this->db->from('tbl_non_academic_staff');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_non_academic_staff($id) {

        $this->db->from('tbl_non_academic_staff');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_brochure_images_list() {

        $this->db->from('tbl_brochure_images');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_brochure_images($id) {

        $this->db->from('tbl_brochure_images');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    ###############################3

##about us start
    public function get_overview_data() {

        $this->db->from('tbl_company_overview');
        $this->db->where('id', 1);
        $query = $this->db->get();
    //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_bod_list() {

        $this->db->from('tbl_bod');
		$this->db->order_by('tbl_bod.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_edit_bod($id) {

        $this->db->from('tbl_bod');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_customer_data() {

        $this->db->from('tbl_customer_content');
		$this->db->where('id', 1);
		$query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_technology_data() {

        $this->db->from('tbl_technology');
		$this->db->where('id', 1);
		$query = $this->db->get();
       //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

	 public function get_awards_list() {

        $this->db->from('tbl_awards');
		$this->db->order_by('tbl_awards.iOrder','asc');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

	public function get_edit_awards($id) {

        $this->db->from('tbl_awards');
		$this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	
## end about us	
}

?>
