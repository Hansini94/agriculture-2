<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function get_search_result($limit,$start) {
        $vSearch = $this->input->post("search_text", TRUE);
        
        if($vSearch=='')
        { 
            $vSearch = $this->session->userdata('search_text');
        } else { 
            $this->session->set_userdata('search_text', $vSearch);
        }

        $replace_str = array('"', "'");
        $vSearch = str_replace($replace_str, "", $vSearch);
        if($limit==0 && $start==0){$limit='';}else{$limit='limit '.$start.', '.$limit.'';}
            $result = $this->db->query("(
                SELECT
                tbl_bsc_agtech_mgt.id,
                tbl_bsc_agtech_mgt.vHeading as Heading,
                tbl_bsc_agtech_mgt.tContent2 as tContent,
                concat('undergraduate-programme') as link
                FROM
                tbl_bsc_agtech_mgt
                WHERE
                (tbl_bsc_agtech_mgt.vHeading LIKE '%$vSearch%' OR
                tbl_bsc_agtech_mgt.tContent2 LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_bsc_asf_introduction.id,
                tbl_bsc_asf_introduction.vHeading as Heading,
                tbl_bsc_asf_introduction.tContent1 as tContent,
                concat('undergraduate-programme') as link
                FROM
                tbl_bsc_asf_introduction
                WHERE
                (tbl_bsc_asf_introduction.vHeading LIKE '%$vSearch%' OR
                tbl_bsc_asf_introduction.tContent1 LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_bsc_fst_introduction.id,
                tbl_bsc_fst_introduction.vHeading as Heading,
                tbl_bsc_fst_introduction.tContent1 as tContent,
                concat('undergraduate-programme') as link
                FROM
                tbl_bsc_fst_introduction
                WHERE
                (tbl_bsc_fst_introduction.vHeading LIKE '%$vSearch%' OR
                tbl_bsc_fst_introduction.tContent1 LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_postgraduate_programme.id,
                tbl_postgraduate_programme.vTitle as Heading,
                tbl_postgraduate_programme.tContent as tContent,
                concat('postgraduate-programme') as link
                FROM
                tbl_postgraduate_programme
                WHERE
                (tbl_postgraduate_programme.vTitle LIKE '%$vSearch%' OR
                tbl_postgraduate_programme.tContent LIKE '%$vSearch%')) UNION(
                SELECT
                tbl_research_stories.id,
                tbl_research_stories.vTitle as Heading,
                tbl_research_stories.tContent as tContent,
                concat('research-stories') as link
                FROM
                tbl_research_stories
                WHERE
                (tbl_research_stories.vTitle LIKE '%$vSearch%' OR
                tbl_research_stories.tContent LIKE '%$vSearch%'))$limit");
        //  echo $this->db->last_query();exit();
         if ($result->num_rows() > 0) {
            return $result->result();
        } else {
        	return array();
        }
	
       
    }
 
}

?>
