<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class paypal extends CI_Controller {

    public function __construct() {
        parent::__construct(false, '');
        $this->data['globals'] = MY_Controller::globalVariables();
    }

    public function index() {
        echo '<pre>';
        print_r(1111);
        exit;
    }

    public function cancel() {
        $this->data['page_title'] = SITE_TITLE . ' | Payment Status';
        $this->data['active_class'] = '';

        $fp = fopen("./assets/uploads/paypal.log", "a");
        fwrite($fp, my_datenow() . "\n ___________ ERROR _______________\n");
        fwrite($fp, print_r($_POST, true));
        fclose($fp);


        $this->load->view('home/cancel.php', $this->data);
    }

    public function success() {
        $this->data['page_title'] = SITE_TITLE . ' | Payment Status';
        $this->data['active_class'] = '';
        $fp = fopen("./assets/uploads/paypal.log", "a");
        fwrite($fp, my_datenow() . "\n ___________ SUCCESS ________________\n");
        fwrite($fp, print_r($_POST, true));
        fclose($fp);
        $this->load->view('home/success.php', $this->data);
    }

}
