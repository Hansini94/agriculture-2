<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Dynamic_menu {

    function __construct() {
        $this->ci = & get_instance();    // get a reference to CodeIgniter.
    }

    function build_menu($iUserType) {

        if ($this->ci->session->userdata('is_logged_inbackendsession') != "1") {
            redirect('adminpanel/login');
        } else {
            $query_string = "SELECT
tbl_biotech_dyn_menu.id,
tbl_biotech_dyn_menu.icon,
tbl_biotech_dyn_menu.title,
tbl_biotech_dyn_menu.page_id,
tbl_biotech_dyn_menu.url,
tbl_biotech_dyn_menu.parent_id,
tbl_biotech_dyn_menu.is_parent,
tbl_biotech_dyn_menu.show_menu,
tbl_biotech_dyn_menu.parent_order,
tbl_biotech_dyn_menu.child_order

FROM
tbl_biotech_privilage
INNER JOIN tbl_biotech_dyn_menu ON tbl_biotech_privilage.iFormID = tbl_biotech_dyn_menu.id
WHERE
tbl_biotech_privilage.iUserTypeID = $iUserType AND tbl_biotech_dyn_menu.show_menu = 1
AND tbl_biotech_privilage.vPrivilages != '0,0,0'
ORDER BY
tbl_biotech_dyn_menu.parent_order ASC";
            $query = $this->ci->db->query($query_string);

            $html_out = "";


            foreach ($query->result() as $row) {
                $id = $row->id;
                $icon = $row->icon;
				$title = $row->title;
                $page_id = $row->page_id;
                $url = $row->url;
                $parent_id = $row->parent_id;
                $is_parent = $row->is_parent;
                $show_menu = $row->show_menu;
                {
                    if ($show_menu && $parent_id == 0) {   // are we allowed to see this menu?
                        if ($is_parent == TRUE) {
                            $html_out .= '<li>';
                            $html_out .= '<a href="#"><i class="'.$icon.'"></i>' . $title . '<span class="fa fa-chevron-down"></span></a>';
                            $html_out .= '<ul class="nav child_menu" >'.$this->get_childs($id, $iUserType).'</ul>';
                            $html_out .= '</li>';
                        } else {
                            $html_out .= '<li class=""><a href="' . base_url() . $url . '"><i class="'.$icon.'"></i>' . $title . '</a>';
                        }
                    }
                }
            }

            return $html_out;
        }
    }

    function get_childs($id, $iUserType) {
        $html_out = "";
        $has_subcats = FALSE;

        $query_string = "SELECT
tbl_biotech_dyn_menu.id,
tbl_biotech_dyn_menu.icon,
tbl_biotech_dyn_menu.title,
tbl_biotech_dyn_menu.page_id,
tbl_biotech_dyn_menu.url,
tbl_biotech_dyn_menu.parent_id,
tbl_biotech_dyn_menu.is_parent,
tbl_biotech_dyn_menu.show_menu,
tbl_biotech_dyn_menu.parent_order,
tbl_biotech_dyn_menu.child_order

FROM
tbl_biotech_privilage
INNER JOIN tbl_biotech_dyn_menu ON tbl_biotech_privilage.iFormID = tbl_biotech_dyn_menu.id
WHERE
tbl_biotech_privilage.iUserTypeID = $iUserType AND
tbl_biotech_dyn_menu.parent_id = $id AND tbl_biotech_dyn_menu.show_menu = 1
AND tbl_biotech_privilage.vPrivilages != '0,0,0'
ORDER BY
tbl_biotech_dyn_menu.child_order ASC";
        $query = $this->ci->db->query($query_string);

        foreach ($query->result() as $row) {
			
            $id = $row->id;
			$icon = $row->icon;
            $title = $row->title;
            $page_id = $row->page_id;
            $url = $row->url;
            $parent_id = $row->parent_id;
            $is_parent = $row->is_parent;

            $has_subcats = TRUE;

            if ($is_parent == TRUE) {
				
                $html_out .= '<li>';
                $html_out .= '<a href="#">' . $title . '</a>';
                $html_out .= '<ul class="nav child_menu" >'.$this->get_childs($id, $iUserType).'</ul>';
                $html_out .= '</li>';
				
            } else {
				
                
                $html_out .= '<li><a href="' . base_url() . $url . '">' . $title . '</a></li>';
				
                
            }
			
        }

        return ($has_subcats) ? $html_out : FALSE;
    }

}

?>
