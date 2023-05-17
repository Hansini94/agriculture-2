<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function add_log($tDes, $title = '') {
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        if (!empty($_SERVER['HTTP_X_FORWARD_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARD_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        if (empty($title))
            $title = get_title();

        $logData = array(
            'vPage' => $title,
            'iUserId' => $this->session->userdata('userbackendsession'),
            'tDes' => $tDes,
            'vIP' => $ip,
            'dDateTime' => date('Y-m-d H:i:s')
        );
         $this->db->insert('tbl_aext_logs', $logData);
        // echo $this->db->last_query();
        //exit();
    }

    /* common model for save and update
     * date : 27-10-2014
     * author : Thushara
     */

    public function save_data($tbl_aext_name) {
		$fields = $this->db->list_fields($tbl_aext_name);

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

        $query = $this->db->insert($tbl_aext_name, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function update_saved_data($tbl_aext_name) {
        $fields = $this->db->list_fields($tbl_aext_name);

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
        $query = $this->db->update($tbl_aext_name, $data, "id = $id");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function update_password_data_useless($tbl_aext_name) {

        $uUserID = $this->session->userdata('userbackendsession');

        $oldpw = md5($this->input->post($pPasswordold, TRUE));
        $newpw = md5($this->input->post($pPassword, TRUE));
        $olpdbpw = $this->input->post('odpw', TRUE);

        if ($oldpw == $olpdbpw) {




            $data = array();
            $data['pPassword'] = $newpw;

            $query = $this->db->update($tbl_aext_name, $data, "id = $uUserID");
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function update_password_data($tbl_aext_name) {

        $uUserID = $this->session->userdata('userbackendsession');

        // $oldpw = md5($this->input->post('pPasswordold', TRUE));
        $newpw = md5($this->input->post('pPassword', TRUE));
        // $olpdbpw = $this->input->post('odpw', TRUE);
        // if ($oldpw == $olpdbpw) {
        $data = array();
        $data['pPassword'] = $newpw;

        $query = $this->db->update($tbl_aext_name, $data, "id = $uUserID");
        if ($query) {
            return true;
        } else {
            return false;
        }
        //} else {
        //     return false;
        //}
    }

    /* common model for flexigrid 
     * date : 27-10-2014
     * author : Thushara
     */

    function get_edit_data($userID, $tbl_aext_name) {
        $result = $this->db->get_where($tbl_aext_name, array('id' => $userID));
        //echo $this->db->last_query(); exit();
        if ($result->num_rows() > 0) {
            return $result->row_array();
        }
        return array();
    }

    function chge_status($userID, $tbl_aext_name) {
		//echo "hh";exit();
        $this->db->select('cEnable');
        $this->db->where('id', $userID);
        $query = $this->db->get($tbl_aext_name);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $status = $row->cEnable;

        }

        if ($status === 'Y') {
            $status = 'N';
        } else {
            $status = 'Y';
        }
        $arrData = array(
            'cEnable' => $status
        );

        $this->db->update($tbl_aext_name, $arrData, "id = $userID");
		//echo $this->db->last_query(); exit();
    }

    function del_records($userID, $tbl_aext_name) {
        $this->db->where('id', $userID);
        $this->db->delete($tbl_aext_name);
    }

    function get_sector_detail($sec_id) {
        $this->db->select('vCompanysector');
        $this->db->where('id', $sec_id);
        $query = $this->db->get('tbl_aext_company_sector');

        if ($query->num_rows() > 0) {
            return $query->result();
            //return $row = $query->row();
            //$status = $row->cEnable;
        }
    }

    // page details
    function get_page_detail($page_id) {
        if ($this->session->userdata('is_logged_inbackendsession') != "1") {
            redirect('adminpanel/login');
        } else {
            $iUserType = $this->session->userdata('iUserTypebackendsession');
            $query_string = "SELECT
            tbl_aext_privilage.vPrivilages 
            FROM
            tbl_aext_privilage
            INNER JOIN tbl_aext_dyn_menu ON tbl_aext_privilage.iFormID = tbl_aext_dyn_menu.id
            WHERE
            tbl_aext_privilage.iUserTypeID = $iUserType AND
            tbl_aext_dyn_menu.id = $page_id";
            $query = $this->db->query($query_string);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                return $vPrivilages = $row->vPrivilages;
            }
        }
    }

    // populate drop down for many table
    public function populate_drop_down($query) {
        $query = $this->db->query($query);
		//echo $this->db->last_query();exit();
        return $query->result();
    }

    // populate drop down for one table
    public function populate_drop_down_one($table, $field, $oderby) {
        $this->db->select($field);
        $this->db->group_by($field);
        $this->db->where('cEnable', 'Y');
        $this->db->order_by($oderby);
        $query = $this->db->get($table);
         //echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	
	public function populate_drop_down_group_by($table, $field,$groupby,$oderby) {
        $this->db->select($field);
        $this->db->group_by($groupby);
        $this->db->where('cEnable', 'Y');
        $this->db->order_by($oderby);
        $query = $this->db->get($table);
         //echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_last_serial($tbl_aext_name, $field_name) {
        $query = "select TOP 1 $field_name from $tbl_aext_name order by id DESC";
        $res = $this->db->query($query);
        if ($res->num_rows() > 0) {
            $row = $res->row();
            return $vPrivilages = $row->$field_name;
        }
        return $csv = "0";
    }

    public function doupload($field) {



        $curentpath = FCPATH;

        $uploadpath = $this->input->post("uploadpath", TRUE);

        $filename = $_FILES[$field]['name'];

        //  $path = str_replace("allianceadmin", $uploadpath, $curentpath);
        $path = $curentpath . $uploadpath;

        $field_name = $field;
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docs|mp3|wav|ogg|mp4|docx';

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
	
	public function get_all_data_multi_where($table_name, $field, $value, $oderby,$oderOption) {
        //Build contents query
        $this->db->select('*')->from($table_name);

        for ($i = 0; $i < count($field); $i++) {
            $fieldname = $field[$i];
            $valuev = $value[$i];
            $this->db->where('' . $fieldname . '', $valuev);
        }
        $this->db->order_by($oderby,$oderOption);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit();
         
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function delete_image($imageID,$field,$table,$path,$img){
       // echo base_url().$path.$img;exit();
        $data = array(
            $field => '',
        );
        //unlink(base_url().$path.$img);
        $query = $this->db->update($table, $data, "id = $imageID");
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function get_all_data_list($tbl){
        $this->db->from($tbl);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    public function get_cat_staff($recId,$tbl) {
        $this->db->from($tbl);
        $this->db->where('iCatId', $recId);
        $query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

}

?>
