<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student_model extends CI_Model {  
    
    public function get_module_students($recId,$tbl) {
        $this->db->from($tbl);
        $this->db->where('iModuleId', $recId);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    // public function get_eae_student($recId,$tbl) {
    //     $this->db->from($tbl);
    //     $this->db->where('iSeriesId', $recId);
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }

    // public function get_gip_student($recId,$tbl) {
    //     $this->db->from($tbl);
    //     $this->db->where('iSeriesId', $recId);
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }

    // public function get_mbb_student($recId,$tbl) {
    //     $this->db->from($tbl);
    //     $this->db->where('iSeriesId', $recId);
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }

    // public function get_ppm_student($recId,$tbl) {
    //     $this->db->from($tbl);
    //     $this->db->where('iSeriesId', $recId);
    //     $query = $this->db->get();
    //    // echo $this->db->last_query();exit();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }
}

?>
