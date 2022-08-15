<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_page_model extends CI_Model {

    public function get_main_slider() {
        $this->db->from('tbl_main_slider');
        $this->db->where('tbl_main_slider.cEnable', 'Y');
        $this->db->order_by('tbl_main_slider.iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_main_slider_video() {
        $this->db->from('tbl_main_slider_video');
        $this->db->where('tbl_main_slider_video.id', 1);
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }


    public function get_mobile_slider() {
        $this->db->from('tbl_mobile_slider');
        $this->db->where('tbl_mobile_slider.cEnable', 'Y');
        $this->db->order_by('tbl_mobile_slider.iOrder', 'asc');
        $result = $this->db->get();
        //echo $this->db->last_query();  exit();  
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function load_home_detail() {
        $this->db->select('*');
        $this->db->from('tbl_home_detail');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }

    public function load_product_cat_detail() {
        $this->db->select('*');
        $this->db->from('tbl_product_cat_content');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }

    public function load_company_overview() {
        $this->db->select('*');
        $this->db->from('tbl_company_overview');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }

    public function get_achievement_data() {

        $this->db->from('tbl_achievements');
		$this->db->where('id', 1);
		$query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function load_awards() {
        $this->db->select('*');
        $this->db->from('tbl_awards');
        $this->db->order_by('iOrder', 'asc');
        $this->db->where('cEnable', 'Y');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_projects() {
        $this->db->select('*');
        $this->db->from('tbl_projects');
        $this->db->order_by('iOrder', 'asc');
        $this->db->where('iIsFeatured', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_cables() {

        $query = $this->db->query("(SELECT id, vTitle, fImage, iIsFeatured, concat('cables/Electric_Cables/',tbl_cables.id) as link FROM tbl_cables WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('lightings/Lightings/',tbl_lightings.id) as link FROM tbl_lightings WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('switchgears/Switchgear/',tbl_switchgear.id) as link FROM tbl_switchgear WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('other-products/Other_Products/',tbl_other_products.id) as link FROM tbl_other_products WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('switches-sockets/Switches_and_Sockets/',tbl_switches_sockets.id) as link FROM tbl_switches_sockets WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('fans/Fans/',tbl_fan.id) as link FROM tbl_fan WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)
        UNION
        (SELECT id, vTitle, fImage, iIsFeatured, concat('enameled_winding_wires/Enameled_Winding_Wires/',tbl_enameled_winding.id) as link FROM tbl_enameled_winding WHERE cEnable = 'Y' AND  iIsFeatured = 1 ORDER BY iOrder ASC)");

        // $this->db->select('*');
        // $this->db->from('tbl_cables');
        // $this->db->order_by('iOrder', 'desc');
        // $this->db->where('cEnable', 'Y');
        // $this->db->where('iIsFeatured', 1);
        // $query = $this->db->get();
        // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_electrics() {
        $this->db->select('*');
        $this->db->from('tbl_switches_sockets');
        $this->db->order_by('iOrder', 'asc');
        $this->db->where('cEnable', 'Y');
        //$this->db->limit(4, 0);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_proofs_of_confidence() {
        $this->db->select('*');
        $this->db->from('tbl_proof_confidence');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }

    public function load_contact() {
        $this->db->select('*');
        $this->db->from('tbl_contact_us');
        $this->db->where('id', 1);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }

    public function load_news() {
        $this->db->select('*');
        $this->db->from('tbl_news_media');
        $this->db->order_by('dDate', 'Desc');
        $this->db->where('cEnable', 'Y');
        $this->db->limit(4);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_latest_news($newsid) {
        $this->db->select('*');
        $this->db->from('tbl_news_media');
        $this->db->order_by('dDate', 'Desc');
        $this->db->where('cEnable', 'Y');
        $this->db->where_not_in('id', $newsid);
        $this->db->limit(3);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function load_news_gallery($id) {
        $this->db->from('tbl_news_gallery');
        $this->db->where('cEnable', 'Y');
        $this->db->where('iNewsID', $id);
        $this->db->limit(3);
        $query = $this->db->get();
        // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function get_research_development_content_data() {

        $this->db->from('tbl_research_development');
		$this->db->where('id', 1);
		//$this->db->order_by('tbl_research_development.iOrder', 'asc');
		$query = $this->db->get();
       // echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }	

    public function load_csr() {
        $this->db->select('*');
        $this->db->from('tbl_csr');
        $this->db->order_by('dDate', 'Desc');
        $this->db->where('cEnable', 'Y');
        $this->db->limit(2, 0);
        $query = $this->db->get();
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    // for shopping cart
    
    public function get_home_category() {
        $this->db->select('*');
        $this->db->from('tbl_b_department');        
        $this->db->where('cEnable','Y');
        $this->db->order_by('iOrder','ASC');
        $query = $this->db->get();
        //echo $this->db->last_query();exit();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
#################################################	

public function get_faq_category() {
    $this->db->from('tbl_faq_category');
    $this->db->where('tbl_faq_category.cEnable', 'Y');
    $this->db->order_by('tbl_faq_category.iOrder', 'asc');
    $result = $this->db->get();
    //echo $this->db->last_query();  exit();  
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return array();
    }
}


 ######################FOOTER###########################	
 public function get_quick_list() {
    $this->db->from('tbl_engagement_partnerships');
    $this->db->where('tbl_engagement_partnerships.cEnable', 'Y');
    $this->db->order_by('tbl_engagement_partnerships.iOrder', 'asc');
    $result = $this->db->get();
    //echo $this->db->last_query();  exit();  
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return array();
    }
}
}

?>
