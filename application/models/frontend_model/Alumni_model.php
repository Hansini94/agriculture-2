<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alumni_model extends CI_Model {

    // ***********************home**************
    public function get_mainslider_details() {
        $this->db->from('tbl_alumni_main_slider');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_home_content() {
        $this->db->from('tbl_home_content');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    
    public function get_shortlinks_details() {
        $this->db->from('tbl_alumni_short_links');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
     // ********************Alumni Committee*******************
    public function get_current_committee() {
        $this->db->from('tbl_alumni_committee_current');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_previous_committee() {
        $this->db->from('tbl_alumni_committee_previous');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    // ********************Alumni News*******************
    public function get_latest_news() {
        $this->db->from('tbl_alumni_news');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_count_news() 
	{
        return $this->db->count_all("tbl_alumni_news");
    }

    public function get_news_list($limit, $start) {
        $this->db->from('tbl_alumni_news');
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

    public function get_news_detail($id) {
        $this->db->from('tbl_alumni_news');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

        public function get_news_detail_list() {
            $this->db->from('tbl_alumni_news');
            $this->db->where('cEnable', 'Y');
            $this->db->order_by('id', 'desc');
            $result = $this->db->get();
            //echo $this->db->last_query();  exit();  
            if ($result->num_rows() > 0) {
                return $result->result();
            } else {
                return array();
            }
        }
    

    // ********************Alumni Events*******************
    public function get_latest_events() {
        $this->db->from('tbl_alumni_events');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_count_events() 
	{
        return $this->db->count_all("tbl_alumni_events");
    }

    public function get_events_list($limit, $start) {
        $this->db->from('tbl_alumni_events');
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

    public function get_events_detail($id) {
        $this->db->from('tbl_alumni_events');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
        
        public function get_events_detail_list() {
            $this->db->from('tbl_alumni_events');
            $this->db->where('cEnable', 'Y');
            $this->db->order_by('id', 'desc');
            $result = $this->db->get();
            //echo $this->db->last_query();  exit();  
            if ($result->num_rows() > 0) {
                return $result->result();
            } else {
                return array();
            }
        }
    

    // ********************Alumni Newsletters*******************
    public function get_latest_newsletters() {
        $this->db->from('tbl_alumni_newsletters');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_count_newsletters() 
	{
        return $this->db->count_all("tbl_alumni_newsletters");
    }

    public function get_newsletters_list($limit, $start) {
        $this->db->from('tbl_alumni_newsletters');
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

    public function get_newsletters_detail($id) {
        $this->db->from('tbl_alumni_newsletters');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    public function get_newsletters_detail_list() {
        $this->db->from('tbl_alumni_newsletters');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    // ******************Alumni Scholarships********************
    public function get_scholarships_list() {
        $this->db->from('tbl_alumni_scholarships');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_scholarships_first() {
        $this->db->from('tbl_alumni_scholarships');
        $this->db->where('cEnable', 'Y');
        $this->db->order_by('iOrder', 'asc');
        $this->db->limit(1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_scholarships_detail($id) {
        $this->db->from('tbl_alumni_scholarships');
        $this->db->where('id', $id);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        // return $this->db->get_where('tbl_engagement_research', ['id' => $id])->row();
    }

    //**********************Join Us**************
    public function get_joinus_detail() {
        $this->db->from('tbl_joinus');
        $this->db->where('id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

}

?>
