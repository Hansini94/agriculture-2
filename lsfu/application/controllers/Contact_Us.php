<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Contact_Us extends CI_Controller {

    public function index() {

        $this->load->library("pagination");
        $this->load->model('frontend_model/home_page_model');
        $this->load->model('frontend_model/contactus_model');

        $data = array();
        $data_header = array();

        
        $data_header['meta'] = 13;
        $data['contactus'] = $this->contactus_model->get_details();
        
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/contact_us_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }
    
    public function save_content($data = '') {
        
        $captcha;
        $cSaveStatus = $this->input->post('cSaveStatus', TRUE);
        $id = $this->input->post('id', TRUE);
        //die('hi222');

        if (isset($_POST['g-recaptcha-response'])) 
            $captcha = $_POST['g-recaptcha-response'];

        if(isset($_POST['Response'])){
            $captcha = $_POST['Response'];
        }
        
        // die($captcha);
        if (!$captcha) {
            //die('hi333');
            //echo "1"; exit();
            $this->session->set_flashdata('message_error', ' Please check the captcha. ');
            redirect(base_url() . 'contact-us');
            exit();
        } 
        else 
        {
            //die('hi444');
            //echo "2"; exit();
            //echo "ok-else-1"; exit();
            $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfvHsYlAAAAAB8n1Xh_EKNDFoS7q5Bn6wwtNgQ0&response=".$captcha));
            // var_dump($response);exit();
            if ($response->success != false) {
                if ($this->common_model->save_data($this->table_name)) {
                    //$tDes = "saved data has been updated";
                    //$this->common_model->add_log($tDes);
                    $this->session->set_flashdata('message_saved', 'Saved successfully.');
                    redirect(base_url() . 'contact-us');
                } else {
                    $this->session->set_flashdata('message_error', 'Save fail!');
                    redirect(base_url() . 'contact-us');
                }
                
            } 
            else 
            {
                
                //echo "2"; exit();
                $this->session->set_flashdata('message_warning', 'You are a Spammer');
                redirect(base_url() . 'contact-us');
                exit();
            }
        }
    }
    
}

?>
