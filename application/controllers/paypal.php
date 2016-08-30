<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class paypal extends CI_Controller {

    public function __construct() {
        parent::__construct(false, '');
        $this->data['globals'] = MY_Controller::globalVariables();
    }
    
    public function index(){
        echo '<pre>';
        print_r(1111);
        exit;
    }

    public function cancel(){
        $this->data['page_title'] = SITE_TITLE . ' | Payment Status';
        $this->data['active_class'] = '';
        $this->load->view('home/cancel.php', $this->data);
    }
    
    public function success(){
        $this->data['page_title'] = SITE_TITLE . ' | Payment Status';
        $this->data['active_class'] = '';
        $this->load->view('home/success.php', $this->data);
    }

}
