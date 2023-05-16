<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student_model extends CI_Model {   

    public function get_ss_content() {

        $this->db->from('tbl_ss_home_content');
        $this->db->where('id', 1);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }


    //*******************Student Life*************************
    public function get_sports_list() {

        $this->db->from('tbl_student_sports');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_sports($id) {

        $this->db->from('tbl_student_sports');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_events_list() {

        $this->db->from('tbl_student_events');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_events($id) {

        $this->db->from('tbl_student_events');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    

    //****************************Future Students***********************
    public function get_future_student_data() {

        $this->db->from('tbl_fs_home');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_future_student($id) {

        $this->db->from('tbl_fs_home');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
     //****************************Current Students***********************
     public function get_current_student_data() {

        $this->db->from('tbl_cs_home');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_current_student($id) {

        $this->db->from('tbl_cs_home');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_prospectus_data() {

        $this->db->from('tbl_prospectus');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    
    public function get_academic_calender_data() {

        $this->db->from('tbl_academic_calender');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }


    public function get_scholarship_data() {

        $this->db->from('tbl_faculty_level_schol');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_video_list() {

        $this->db->from('tbl_video_laboratory');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_video($id) {

        $this->db->from('tbl_video_laboratory');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_deans_list() {

        $this->db->from('tbl_deans_list');
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_edit_deans_list($id) {

        $this->db->from('tbl_deans_list');
        $this->db->where('id', $id);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    public function save_data($tbl_name) {
		$fields = $this->db->list_fields($tbl_name);

        $data = array();
        foreach ($fields as $field) {
            $f_string = "";
            $f_string = $field[0];

            if ($field !== "id")
                $data[$field] = $this->input->post($field, TRUE);

            if ($f_string === 'p')
                $data[$field] = md5($this->input->post($field, TRUE));

            /* if ($f_string === 'd')
              $data[$field] = date('Y-m-d H:i:s'); */
            if ($f_string === 'f') {

                $filevalidate = $_FILES[$field]['name'];

                if ($filevalidate != '') {

                    $imagename = $this->doupload($field);

                    $img = $imagename['upload_data']['file_name'];


                    $data[$field] = $img;
                }
            }
        }

        $query = $this->db->insert($tbl_name, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function update_saved_data($tbl_name) {
        $fields = $this->db->list_fields($tbl_name);

        $data = array();
        foreach ($fields as $field) {
            $f_string = "";
            $f_string = $field[0];

            if ($field === "id")
                $id = $this->input->post($field, TRUE);
            else if ($f_string === 'p')
                $data[$field] = md5($this->input->post($field, TRUE));
            else if ($f_string === 'f') {

                $filevalidate = $_FILES[$field]['name'];

                if ($filevalidate != '') {

                    $imagename = $this->doupload($field);

                    $img = $imagename['upload_data']['file_name'];


                    $data[$field] = $img;
                }
            }
            /* else if ($f_string === 'd')
              $data[$field] = date('Y-m-d H:i:s'); */ else if ($f_string === 't')
                $data[$field] = $this->input->post($field);
            else
                $data[$field] = $this->input->post($field, TRUE);
        }
        $query = $this->db->update($tbl_name, $data, "id = $id");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function doupload($field) {



        $curentpath = FCPATH;

        $uploadpath = $this->input->post("uploadpath", TRUE);

        // $filename = $_FILES[$field]['name'];
        $filename = "gpa_calculator";

        //  $path = str_replace("allianceadmin", $uploadpath, $curentpath);
        $path = $curentpath . $uploadpath;

        $field_name = $field;
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xls|xlsx|csv|gif|jpg|png|pdf|doc|docs|mp3|wav|ogg|mp4|docx';

        $config['max_size'] = '99999999900000000';


        $config['file_name'] = time() . $filename;


        if (!is_dir($config['upload_path']))
            die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        //echo 'dd';
        //print_r($config);
        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $uploadfile = $this->upload->do_upload($field_name);

        $field_name;

        if (!$uploadfile) {

            echo 'error';
        } else {

            return array('upload_data' => $this->upload->data());
        }
    }

}

?>
