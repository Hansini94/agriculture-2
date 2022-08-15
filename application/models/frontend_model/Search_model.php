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
                tbl_csr.id,
                tbl_csr.vTitle as Title,
                tbl_csr.tDescription as Description,
                concat('csr/csr_detail/',tbl_csr.id) as link
                FROM
                tbl_csr
                WHERE
                (tbl_csr.vTitle LIKE '%$vSearch%' OR
                tbl_csr.tDescription LIKE '%$vSearch%') AND
                tbl_csr.cEnable = 'Y') union(
                SELECT
                tbl_cables.id,
                tbl_cables.vTitle as Title,
                tbl_cables.tDesc as Description,
                concat('products/cables') as link
                FROM
                tbl_cables
                WHERE
                (tbl_cables.vTitle LIKE '%$vSearch%') AND
                tbl_cables.cEnable = 'Y') union(
                SELECT
                tbl_cable_data.id,
                tbl_cable_data.vTitle as Title,
                tbl_cable_data.tDesc as Description,
                concat('products/cables/Electric_Cables','/',tbl_cable_data.iCableId) as link
                FROM
                tbl_cable_data
                INNER JOIN tbl_cables ON tbl_cable_data.iCableId = tbl_cables.id
                WHERE
                (tbl_cable_data.vTitle LIKE '%$vSearch%') AND
                tbl_cable_data.cEnable = 'Y') union(
                SELECT
                tbl_fan.id,
                tbl_fan.vTitle as Title,
                tbl_fan.tDesc as Description,
                concat('products/fans') as link
                FROM
                tbl_fan
                WHERE
                (tbl_fan.vTitle LIKE '%$vSearch%') AND
                tbl_fan.cEnable = 'Y') union(
                SELECT
                tbl_fan_data.id,
                tbl_fan_data.vTitle as Title,
                tbl_fan_data.tDesc as Description,
                concat('products/fans/Fans','/',tbl_fan_data.iFanId) as link
                FROM
                tbl_fan_data
                INNER JOIN tbl_fan ON tbl_fan_data.iFanId = tbl_fan.id
                WHERE
                (tbl_fan_data.vTitle LIKE '%$vSearch%') AND
                tbl_fan_data.cEnable = 'Y') union(
                SELECT
                tbl_lightings.id,
                tbl_lightings.vTitle as Title,
                tbl_lightings.tDesc as Description,
                concat('products/lightings') as link
                FROM
                tbl_lightings
                WHERE
                (tbl_lightings.vTitle LIKE '%$vSearch%') AND
                tbl_lightings.cEnable = 'Y') union(
                SELECT
                tbl_lighting_data.id,
                tbl_lighting_data.vTitle as Title,
                tbl_lighting_data.tDesc as Description,
                concat('products/lightings/Lightings','/',tbl_lighting_data.iLightId) as link
                FROM
                tbl_lighting_data
                INNER JOIN tbl_lightings ON tbl_lighting_data.iLightId = tbl_lightings.id
                WHERE
                (tbl_lighting_data.vTitle LIKE '%$vSearch%') AND
                tbl_lighting_data.cEnable = 'Y') union(
                SELECT
                tbl_other_products.id,
                tbl_other_products.vTitle as Title,
                tbl_other_products.tDesc as Description,
                concat('products/other_products') as link
                FROM
                tbl_other_products
                WHERE
                (tbl_other_products.vTitle LIKE '%$vSearch%') AND
                tbl_other_products.cEnable = 'Y') union(
                SELECT
                tbl_other_product_data.id,
                tbl_other_product_data.vTitle as Title,
                tbl_other_product_data.tDesc as Description,
                concat('products/other-products/Other_Products','/',tbl_other_product_data.iOtherProductId) as link
                FROM
                tbl_other_product_data
                INNER JOIN tbl_other_products ON tbl_other_product_data.iOtherProductId = tbl_other_products.id
                WHERE
                (tbl_other_product_data.vTitle LIKE '%$vSearch%') AND
                tbl_other_product_data.cEnable = 'Y') union(
                SELECT
                tbl_switches_sockets.id,
                tbl_switches_sockets.vTitle as Title,
                tbl_switches_sockets.tDesc as Description,
                concat('products/switches_sockets') as link
                FROM
                tbl_switches_sockets
                WHERE
                (tbl_switches_sockets.vTitle LIKE '%$vSearch%') AND
                tbl_switches_sockets.cEnable = 'Y') union(
                SELECT
                tbl_switches_sockets_data.id,
                tbl_switches_sockets_data.vTitle as Title,
                tbl_switches_sockets_data.tDesc as Description,
                concat('products/switches-sockets/Switches_and_Sockets','/',tbl_switches_sockets_data.iSwitchSocketId) as link
                FROM
                tbl_switches_sockets_data
                INNER JOIN tbl_switches_sockets ON tbl_switches_sockets_data.iSwitchSocketId = tbl_switches_sockets.id
                WHERE
                (tbl_switches_sockets_data.vTitle LIKE '%$vSearch%') AND
                tbl_switches_sockets_data.cEnable = 'Y') union(
                SELECT
                tbl_switchgear.id,
                tbl_switchgear.vTitle as Title,
                tbl_switchgear.tDesc as Description,
                concat('products/switchgears') as link
                FROM
                tbl_switchgear
                WHERE
                (tbl_switchgear.vTitle LIKE '%$vSearch%') AND
                tbl_switchgear.cEnable = 'Y') union(
                SELECT
                tbl_switchgear_data.id,
                tbl_switchgear_data.vTitle as Title,
                tbl_switchgear_data.tDesc as Description,
                concat('products/switchgears/Switchgear','/',tbl_switchgear_data.iSwitchgearId) as link
                FROM
                tbl_switchgear_data
                INNER JOIN tbl_switchgear ON tbl_switchgear_data.iSwitchgearId = tbl_switchgear.id
                WHERE
                (tbl_switchgear_data.vTitle LIKE '%$vSearch%') AND
                tbl_switchgear_data.cEnable = 'Y') union(
                SELECT
                tbl_enameled_winding.id,
                tbl_enameled_winding.vTitle as Title,
                tbl_enameled_winding.tDesc as Description,
                concat('products/enameled_winding_wires') as link
                FROM
                tbl_enameled_winding
                WHERE
                (tbl_enameled_winding.vTitle LIKE '%$vSearch%') AND
                tbl_enameled_winding.cEnable = 'Y') union(
                SELECT
                tbl_enameled_winding_data.id,
                tbl_enameled_winding_data.vTitle as Title,
                tbl_enameled_winding_data.tDesc as Description,
                concat('products/enameled-winding-wires/Enameled_Winding_Wires','/',tbl_enameled_winding_data.iEnWinId) as link
                FROM
                tbl_enameled_winding_data
                INNER JOIN tbl_enameled_winding ON tbl_enameled_winding_data.iEnWinId = tbl_enameled_winding.id
                WHERE
                (tbl_enameled_winding_data.vTitle LIKE '%$vSearch%') AND
                tbl_enameled_winding_data.cEnable = 'Y') union(
                SELECT
                tbl_news_media.id,
                tbl_news_media.vTitle as Title,
                tbl_news_media.tDescription as Description,
                concat('news/view_more/',tbl_news_media.id) as link
                FROM
                tbl_news_media
                WHERE
                (tbl_news_media.vTitle LIKE '%$vSearch%' OR
                tbl_news_media.tDescription LIKE '%$vSearch%') AND
                tbl_news_media.cEnable = 'Y')$limit");
        //  echo $this->db->last_query();exit();
         if ($result->num_rows() > 0) {
            return $result->result();
        } else {
        	return array();
        }
	
       
    }
 
}

?>
