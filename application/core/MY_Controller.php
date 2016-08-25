<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct($sessionInit = true, $role_id = '') {
        parent::__construct();
        // We should use our custom function to handle errors.
        //set_error_handler(array($this, 'custom_error'));

        if ($sessionInit == true) {
            $sessionDetails = $this->session->userdata('id');
            if (!empty($sessionDetails)) {
                if ($role_id != '') {
                    if ($this->session->userdata('role_id') != $role_id) {
                        my_alert_message('danger', 'Invalid access');
                        redirect('home/login');
                    }
                }
            } else {
                my_alert_message('danger', 'Session Expired. Please Login');
                redirect('home/login');
            }
        }
    }

    public function globalVariables() {
        //setting up global varible for local use
        if ($this->session->userdata('id') != '') {
            $data['id'] = $this->session->userdata('id');
            $data['email'] = $this->session->userdata('email');
            $data['firstName'] = $this->session->userdata('firstName');
            $data['lastName'] = $this->session->userdata('lastName');
            return $data;
        } else {
            return false;
        }
    }

    public function paginationInit($url, $totalresult, $numlinks, $per_page) {
        $this->load->library('pagination');
        $config["base_url"] = base_url() . $url;
        $config["total_rows"] = $totalresult;
        $config["per_page"] = $per_page;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $numlinks;
        $config['cur_tag_open'] = '&nbsp;<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $str_links = $this->pagination->create_links();
        $links[] = explode('&nbsp;', $str_links);
        return $links;
    }

    // Our custom error handler
    function custom_error($number, $message, $file, $line, $vars) {
        $email_param['title'] = SITE_TITLE . "Error-Report";
        $email_param['content'] = "<h4>Hello Chintan,</h4>"
                . "<p>We have received a error report in <b>" . SITE_TITLE . "</b> Project. "
                . "<br> Here is detail report</p>"
                . "<hr>"
                . "<strong>Error #:</strong> $number<br> "
                . "<strong>Line:  </strong>$line<br>"
                . "<strong>File: </strong> $file <br>"
                . "<p><strong>Details:</strong><i> $message </i></p>";

        if ($number != 2048) {
            my_email_send(ERROR_REPORT_EMAIL, SITE_TITLE . "Error-Report", 'customErrorEmail', $email_param, SITE_EMAIL, 'Team ' . SITE_TITLE);
        }
    }

    public function form_validate($validation) {
        $this->request = new stdClass();

        $fileds = array();
        foreach ($validation as $field => $value) {

            $fileds[] = $field;

            $rules = $value['rules'];
            $label = $field;

            if (isset($value['model']) && $value['model'] != '') {
                $model = $value['model'];
                $this->lang->load("model_" . $model);

                $label = $this->lang->line($model . "_" . $field);
            }

            $this->form_validation->set_rules($field, $label, $rules);

            $this->request->{$field} = htmlspecialchars($this->input->post($field));
        }

        if ($this->form_validation->run()) {
            return true;
        } else {
            $errors = array();
            for ($i = 0; $i < count($fileds); $i ++) {
                $error = form_error($fileds[$i], ' ', ' ');
                if ($error != '') {
                    $errors[] = $error;
                }
            }
            return ($errors);
        }
    }

}
