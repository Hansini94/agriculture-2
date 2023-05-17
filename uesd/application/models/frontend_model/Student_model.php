<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student_model extends CI_Model {
// 
// Student Alumni

    public function get_count_alumni() 
	{
        return $this->db->count_all("tbl_experimental_student_alumni");
    }

    public function get_alumni_list($limit, $start) {
        $this->db->from('tbl_experimental_student_alumni');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $start);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }    

    public function get_module() {
        $this->db->from('tbl_experimental_module');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }    
    
     public function get_module_name_id() {
        $this->db->from('tbl_experimental_module');
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_experimental_engagement_research', ['id' => $id])->row();
    }

    public function get_module_name($id) {
        $this->db->from('tbl_experimental_module');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    } 
    
     public function get_module_series_id($id) {
        $this->db->from('tbl_experimental_module_students');
        $this->db->where('iModuleId', $id);
        $this->db->group_by('vSeries');
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_experimental_engagement_research', ['id' => $id])->row();
    }

    public function get_module_series($id) {
        $this->db->from('tbl_experimental_module_students');
        $this->db->where('iModuleId', $id);
        $this->db->group_by('vSeries');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    } 
    
     public function get_module_students_id($id) {
        $this->db->from('tbl_experimental_module_students');
        $this->db->where('iModuleId', $id);
        $this->db->group_by('vSeries');
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_experimental_engagement_research', ['id' => $id])->row();
    }
    
    public function get_module_students($id) {
        $this->db->from('tbl_experimental_module_students');
        $this->db->where('iModuleId', $id);
        $this->db->order_by('id','asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

//Economic and Applied Entomology

    // public function get_eae_students() {
    //     $this->db->from('tbl_experimental_eae_series_students');
    //     $this->db->group_by('vSeries');
    //     $this->db->order_by('id', 'desc');
    //     $result = $this->db->get();
    //     //echo $this->db->last_query();  exit();  
    //     if ($result->num_rows() > 0) {
    //         return $result->result();
    //     } else {
    //         return array();
    //     }
    // } 

//Genetic Improvement of plants

// public function get_gip_students() {
//     $this->db->from('tbl_experimental_gip_series_students');
//     $this->db->group_by('vSeries');
//     $this->db->order_by('id', 'desc');
//     $result = $this->db->get();
//     //echo $this->db->last_query();  exit();  
//     if ($result->num_rows() > 0) {
//         return $result->result();
//     } else {
//         return array();
//     }
// } 

//Molecular biology and biotechnology

// public function get_mbb_students() {
//     $this->db->from('tbl_experimental_mbb_series_students');
//     $this->db->group_by('vSeries');
//     $this->db->order_by('id', 'desc');
//     $result = $this->db->get();
//     //echo $this->db->last_query();  exit();  
//     if ($result->num_rows() > 0) {
//         return $result->result();
//     } else {
//         return array();
//     }
// } 

//plant pathology and microbiology

// public function get_ppm_students() {
//     $this->db->from('tbl_experimental_ppm_series_students');
//     $this->db->group_by('vSeries');
//     $this->db->order_by('id', 'desc');
//     $result = $this->db->get();
//     //echo $this->db->last_query();  exit();  
//     if ($result->num_rows() > 0) {
//         return $result->result();
//     } else {
//         return array();
//     }
// } 

}

?>
