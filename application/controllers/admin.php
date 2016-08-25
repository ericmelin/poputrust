<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . "core/MY_Admin_Controller.php";

class admin extends MY_Admin_Controller {

    public function __construct() {
        parent::__construct(false, 1);
        $this->data['globals'] = MY_Controller::globalVariables();
    }

    public function index() {
        parent::__construct(true, 1);
        $this->data['page_title'] = 'Home';
        $this->data['active_class'] = 'Home';

        $this->load->view('admin/index.php', $this->data);
    }

    public function people($action = 'import') {
        parent::__construct(true, 1);

        $this->data['page_title'] = 'Import People List';
        $this->data['active_class'] = 'people';

        if ($action == 'doImport' && !empty($_FILES)) {
            echo '<pre>';
            $uploadedFile = fopen($_FILES['peopleCSV']['tmp_name'], 'r');
            $i = 0;
            $columns=array();
            while (($data = fgetcsv($uploadedFile, null, ",")) !== FALSE) {
                if ($i == 0) {
                    $columns=$data;
                }
                
                if($i!=0){

                    $prepArray=array();
                    foreach($columns as $key=>$val){
                        $prepArray[$val]=(string)$data[$key];                        
                    }
                    $this->db->insert("peoples",$prepArray);                   
                }
                $i++;
            }

            fclose($uploadedFile);

            my_alert_message('success', "Data imported successfully");
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->load->view('admin/people/import.php', $this->data);
    }

}
