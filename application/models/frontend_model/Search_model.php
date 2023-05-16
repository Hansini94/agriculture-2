<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function get_search_result($limit,$start) {
        $vSearch = $this->input->post("search_text", TRUE);
        
        // echo $vSearch; exit();
        
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
                tbl_alumni_committee_current.id,
                tbl_alumni_committee_current.vName as Heading,
                tbl_alumni_committee_current.tContent as tContent,
                concat('alumni-committee') as link
                FROM
                tbl_alumni_committee_current
                WHERE
                (tbl_alumni_committee_current.vName LIKE '%$vSearch%' OR
                tbl_alumni_committee_current.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_alumni_committee_previous.id,
                tbl_alumni_committee_previous.vName as Heading,
                tbl_alumni_committee_previous.tContent as tContent,
                concat('alumni-committee') as link
                FROM
                tbl_alumni_committee_previous
                WHERE
                (tbl_alumni_committee_previous.vName LIKE '%$vSearch%' OR
                tbl_alumni_committee_previous.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_alumni_news.id,
                tbl_alumni_news.vTitle as Heading,
                tbl_alumni_news.tContent as tContent,
                concat('alumni-news') as link
                FROM
                tbl_alumni_news
                WHERE
                (tbl_alumni_news.vTitle LIKE '%$vSearch%' OR
                tbl_alumni_news.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_alumni_events.id,
                tbl_alumni_events.vTitle as Heading,
                tbl_alumni_events.tContent as tContent,
                concat('alumni-events') as link
                FROM
                tbl_alumni_events
                WHERE
                (tbl_alumni_events.vTitle LIKE '%$vSearch%' OR
                tbl_alumni_events.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_alumni_newsletters.id,
                tbl_alumni_newsletters.vTitle as Heading,
                tbl_alumni_newsletters.tContent as tContent,
                concat('alumni-newsletter') as link
                FROM
                tbl_alumni_newsletters
                WHERE
                (tbl_alumni_newsletters.vTitle LIKE '%$vSearch%' OR
                tbl_alumni_newsletters.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_aboutus_content.id,
                tbl_aboutus_content.vMissionTitle as Heading,
                tbl_aboutus_content.tMissionDes as tContent,
                concat('about-us') as link
                FROM
                tbl_aboutus_content
                WHERE
                (tbl_aboutus_content.vTitle LIKE '%$vSearch%' OR
                tbl_aboutus_content.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_aboutus_content.id,
                tbl_aboutus_content.vVisionTitle as Heading,
                tbl_aboutus_content.tVisionDes as tContent,
                concat('about-us') as link
                FROM
                tbl_aboutus_content
                WHERE
                (tbl_aboutus_content.vTitle LIKE '%$vSearch%' OR
                tbl_aboutus_content.tContent LIKE '%$vSearch%'))UNION(
                SELECT
                tbl_aboutus_content.id,
                tbl_aboutus_content.vName as Heading,
                tbl_aboutus_content.tDeanMsg as tContent,
                concat('about-us') as link
                FROM
                tbl_aboutus_content
                WHERE
                (tbl_aboutus_content.vTitle LIKE '%$vSearch%' OR
                tbl_aboutus_content.tContent LIKE '%$vSearch%'))UNION(
                
                
                
                
                
                SELECT
                tbl_news_updates.id,
                tbl_news_updates.vName as Heading,
                tbl_news_updates.tContent as tContent,
                concat('news') as link
                FROM
                tbl_news_updates
                WHERE
                (tbl_news_updates.vName LIKE '%$vSearch%' OR
                tbl_news_updates.tContent LIKE '%$vSearch%'))UNION(
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
