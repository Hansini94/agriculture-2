<?php

if (!function_exists('active_link')) {

    function activate_menu($controller) {

// Getting CI class instance.        

        $CI = get_instance();

// Getting router class to active.        

        $class = $CI->router->fetch_class();

        return ($class == $controller) ? 'active' : '';
    }

    function activate_menu_1($controller) {

// Getting CI class instance.        

        $CI = get_instance();

// Getting router class to active.        

        echo $class = $CI->router->fetch_class();

//echo $controller;       
        //  echo "hi";       
        // exit();       

        return ($class == $controller) ? 'style="color:#048fbd;"' : '';
    }

}



if (!function_exists('get_customer_name')) {

    function get_customer_name($custType, $custID) {

        if ($custType == "RE") {

            $ci = & get_instance();

            $ci->load->database();

            $ci->db->select('vFname');

            $ci->db->from('tbl_customer');

            $ci->db->where('id', $custID);

            $query = $ci->db->get();

            if ($query->num_rows() > 0) {

                return $query->result();
            } else {

                return array();
            }
        }

        if ($custType == "TE") {

            $ci = & get_instance();

            $ci->load->database();

            $ci->db->select('vFname');

            $ci->db->from('tbl_customer_temp');

            $ci->db->where('id', $custID);

            $query = $ci->db->get();

            if ($query->num_rows() > 0) {

                return $query->result();
            } else {

                return array();
            }
        }
    }

}

if (!function_exists('get_sub_department')) {

    function get_sub_department($iDepartmentID) {

        $ci = & get_instance();

        $ci->load->database();

        $ci->db->select('*');

        $ci->db->from('tbl_b_sub_department');

        $ci->db->where('cEnable', 'Y');

        $ci->db->where('iDepartmentID', $iDepartmentID);

        $ci->db->order_by('iOrder', "asc");

        $query = $ci->db->get();

        if ($query->num_rows() > 0) {

            return $query->result();
        } else {

            return array();
        }
    }

}

if (!function_exists('get_price_list')) {

    function get_price_list($iDepartmentID) {

        $ci = & get_instance();

        $ci->load->database();

        $ci->db->select('tbl_item.id,
tbl_item.iDepartmentID,
tbl_item.iSubDepartmentID,
tbl_item.iCategoryID,
tbl_item.iSubCategoryID,
tbl_item.vDescription,
tbl_item.iERPID,
tbl_item.iTotalQuantity,
tbl_item.iMinOrderQuantity,
tbl_item.vMetaDes,
tbl_item.vSearcgTag,
tbl_item.dPriceMRP,
tbl_item.dPriceWeb,
tbl_item.dPriceDealer,
tbl_item.dPriceDistributor,
tbl_item.dVat,
tbl_item.cNew,
tbl_item.cSaleStatus,
tbl_item.dItemQty,
tbl_item.vLableText1,
tbl_item.vLableText2,
tbl_item.cItemStatus,
tbl_item.iDeliveryOptID,
tbl_item.dAddedDate,
tbl_item.dLastUpdateDate,
tbl_item.iLable1,
tbl_item.vLableText3,
tbl_item.vStockUnit,
tbl_b_department.vDepartmentName,
tbl_b_department.vLink,
tbl_b_department.vDepartmentName,
tbl_b_sub_department.vSubDepartmentName,
tbl_b_department.vMeta_title,
tbl_b_category.vCategoryName');

        $ci->db->from('tbl_item');
        $ci->db->join('tbl_b_department', 'tbl_item.iDepartmentID = tbl_b_department.id');
        $ci->db->join('tbl_b_sub_department', 'tbl_item.iSubDepartmentID = tbl_b_sub_department.id');
        $ci->db->join('tbl_b_category', 'tbl_item.iCategoryID = tbl_b_category.id');
        $ci->db->where('tbl_item.iDepartmentID', $iDepartmentID);
        $ci->db->where('tbl_item.cItemStatus ', 'AC');
        $ci->db->where('tbl_b_category.cEnable ', 'Y');
        // $this->db->where('tbl_item.iTotalQuantity >', '0');

        $ci->db->order_by('tbl_b_category.vCategoryName', 'ASC');
        $ci->db->order_by('tbl_item.iOrder', 'ASC');
        $ci->db->order_by('tbl_item.iLable1', 'ASC');
        $ci->db->order_by('tbl_item.vLableText1', 'ASC');
        $ci->db->order_by('tbl_item.vLableText2', 'ASC');
        $ci->db->order_by('tbl_item.vLableText3', 'ASC');

        $ci->db->order_by('tbl_b_sub_department.vSubDepartmentName', "asc");

        $query = $ci->db->get();

        if ($query->num_rows() > 0) {

            return $query->result();
        } else {

            return array();
        }
    }

}

if (!function_exists('url_clean')) {

    function url_clean($string) {
        $string = str_replace(' ', '-', $string);

        // Replaces all spaces with hyphens.          

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        // Removes special chars.      
    }

}?>