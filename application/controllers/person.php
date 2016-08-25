<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class person extends CI_Controller {

    public function __construct() {
        parent::__construct(false, '');
        $this->data['globals'] = MY_Controller::globalVariables();
    }

    public function details($people_name = "", $id = "") {

        if (empty($people_name) && empty($id)) {
            my_alert_message('danger', "Person details not found");
            redirect('/home');
        }
        $findPeople = new people();
        $findPeople->like('seo', $people_name);
        $findPeople->get_by_id($id);
        if (!$findPeople->exists()) {
            my_alert_message('danger', "Person details not found");
            redirect('/home');
        }
        $this->data['next'] = "";
        $this->data['prev'] = "";
        $this->data['paginatedSearch'] = 1;
        if(!empty($findPeople->first_name) || !empty($findPeople->last_name)){
             $title = $findPeople->first_name . " " . $findPeople->last_name;
        }else{
             $title = $findPeople->name;
        }
       
        if (!empty($findPeople->city)) {
            $title .=" | " . $findPeople->city;
            if (!empty($findPeople->state)) {
                $title .=", " . $findPeople->state;
            }
        } else {
            if (!empty($findPeople->state)) {
                $title .=" | " . $findPeople->state;
            }
        }
        $title .=" | Poputrust";



        $this->data['page_title'] = $title;
        $this->data['active_class'] = 'home';
        $this->data['details'] = $findPeople->show_data();

        //calculate next/previous
        $selectNext = new People();
        $selectNext->query("select id,seo from peoples where id = (select min(id) from peoples where id > $id)", FALSE);
        if ($selectNext->exists()) {
            $this->data['next'] = "https://www.poputrust.com/person/details/" . htmlentities($selectNext->seo) . "/" . $selectNext->id;
            $this->data['next_seoname'] = htmlentities($selectNext->seo);
        }

        $selectPrev = new People();
        $selectPrev->query("select id,seo from peoples where id = (select max(id) from peoples where id < $id)", FALSE);
        if ($selectPrev->exists()) {
            $this->data['prev'] = "https://www.poputrust.com/person/details/" . htmlentities($selectPrev->seo) . "/" . $selectPrev->id;
            $this->data['prev_seoname'] = htmlentities($selectPrev->seo);
        }
        $this->load->view('home/personDetailsPT', $this->data);
    }

    public function personList() {
        $this->data['next'] = "";
        $this->data['prev'] = "";
        $this->data['paginatedSearch'] = 0;
        $this->data['page_title'] = "Person List";
        $this->data['active_class'] = 'home';
        //ini_set('memory_limit', '-1');
        $result = $this->db->query('SELECT id,seo from peoples');
        foreach ($result->result() as $o) {
            $this->data['people'][] = array('id' => $o->id, 'seo' => $o->seo);
        }

        $this->load->view('home/personList', $this->data);
    }

    public function create() {
        //ini_set('memory_limit', '-1');
//        $getPeople = new People();  
//        $getPeople->limit(10000,20000);
//        $getPeople->get();
//        $xml = '';
//        foreach ($getPeople as $o) {
//            $xml .="<url>\n" .
//                    "<loc>http://www.poputrust.com/person/details/" . htmlentities($o->seo) . "/" . $o->id . "</loc>\n"
//                    . "</url>\n";
//        }
//        echo '<pre>';
//        print_r($xml);
//        $sitemap = fopen('./assets/sitemap.xml', 'a');
//        fwrite($sitemap, $xml);
//        fclose($sitemap);
        exit;
    }

}
