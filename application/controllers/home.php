<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct(false, '');
        $this->data['globals'] = MY_Controller::globalVariables();
    }

    public function index() {
        $this->data['page_title'] = SITE_TITLE . ' | Home';
        $this->data['active_class'] = 'home';
        $this->load->view('home/index.php', $this->data);
    }

    public function jobs() {
        redirect('https://poputrust.recruiterbox.com');
    }

    public function affiliates() {
        $this->data['page_title'] = SITE_TITLE . ' | Affiliates';
        $this->data['active_class'] = 'affiliates';
        $this->load->view('home/affiliates.php', $this->data);
    }
    //Checkout details page with Opt Out PDF to download
    public function checkout(){
        $this->data['page_title'] = SITE_TITLE . ' | Checkout Details';
        $this->data['active_class'] = 'home';
        $this->load->view('home/checkout.php', $this->data);
    }

    public function curl() {

        $firstName = 'danna';
        $lastName = 'miller';
        $location = 'CA';
        $searchResult = $this->APICall($firstName, $lastName, $location);

        $this->data['totalResults'] = 0;
        $this->data['result'] = array();
        if (!empty($searchResult)) {
            $this->processXML($searchResult);
        }
        echo '<pre>';
        print_r($this->data);
        foreach ($this->data['result'] as $key => $val) {
            echo '<pre>';
            print_r($val);
        }

        exit;
    }

    function xml2array($xmlObject, $out = array()) {
        foreach ((array) $xmlObject as $index => $node)
            $out[$index] = ( is_object($node) ) ? $this->xml2array($node) : $node;

        return $out;
    }

    public function signin() {
        $this->data['page_title'] = SITE_TITLE . ' | Signin';
        $this->data['active_class'] = 'signin';
        $this->load->view('home/signin.php', $this->data);
    }

    public function search() {

        if (!empty($_POST['s'])) {
            $string = $_POST['s'];
            $splitByComma = explode(",", $string);

            $fullName = explode(" ", $splitByComma[0]);
            $firstName = $fullName[0];
            $lastName = "";
            $cityName = "";
            $stateName = "";
            if (!empty($fullName[1])) {
                $lastName = $fullName[1];
            }
            if (!empty($splitByComma[1])) {
                $cityName = $splitByComma[1];
            }
            if (!empty($splitByComma[2])) {
                $stateName = $splitByComma[2];
            }
            $searchResult = $this->APICall($firstName, $lastName, $cityName, $stateName);

            $this->data['totalResults'] = 0;
            $this->data['result'] = array();
            //30 k names
            $findLocalRecords = new People();
            $findLocalRecords->group_start();
            $findLocalRecords->like('name', "$firstName $lastName");
            $findLocalRecords->like('seo', "$firstName $lastName");
            $findLocalRecords->or_like('first_name', "$firstName");
            if (!empty($lastName)) {
                $findLocalRecords->or_like('last_name', "$lastName");
            }

            $findLocalRecords->group_end();
            if (!empty($cityName)) {
                $findLocalRecords->group_start();
                $findLocalRecords->like('city', $cityName);
                $findLocalRecords->group_end();
            }
            if (!empty($stateName)) {
                $findLocalRecords->group_start();
                $findLocalRecords->like('state', $stateName);
                $findLocalRecords->group_end();
            }
            $findLocalRecords->limit(10);
            $findLocalRecords->get();

            if ($findLocalRecords->exists()) {
                foreach ($findLocalRecords as $fo) {
                    $prepareArray = array(
                        'pt_result' => true,
                        'id' => $fo->id,
                        'urladdition' => '',
                        'fullName' => $fo->name,
                        'firstName' => $fo->first_name,
                        'lastName' => $fo->lastName,
                        'middleName' => '',
                        'birthYear' => '',
                        'birthMonth' => '',
                        'birthDay' => '',
                        'age' => 'age',
                        'displayAge' => '',
                        'city' => $fo->city,
                        'state' => $fo->state,
                        'names' => array(),
                        'addresses' => array(),
                        'relatives' => array(),
                    );
                    $this->data['totalResults']+=1;
                    $this->data['result'][] = $prepareArray;
                }
            }
            if (!empty($searchResult)) {
                $this->processXML($searchResult);
            }


            $this->data['s'] = $string;
            $this->data['l'] = $cityName;
            $this->data['page_title'] = SITE_TITLE . ' | Home';
            $this->data['active_class'] = 'home';
            $this->load->view('home/index.php', $this->data);
        } else {
            redirect('/');
        }
    }

    public function people($mode = 's') {

        if (empty($_GET['id'])) {
            redirect('/');
        }
        $this->data['get'] = $_GET;
        $this->data['page_title'] = SITE_TITLE . ' | Home';
        $this->data['active_class'] = 'home';
        if ($mode == 's') {
            //ask for mode selection           

            $this->load->view('home/reportOptions', $this->data);
        } else if ($mode == 'd' && $_GET['pay'] == 0) {
            //details mode
            if ($_GET['pt_result'] == 1 && !empty($_GET['id'])) {
                //PT result details
                $id = $_GET['id'];
                $this->data['next'] = "";
                $this->data['prev'] = "";
                $this->data['paginatedSearch'] = 1;
                //calculate next/previous
                $selectNext = new People();
                $selectNext->query("select id from peoples where id = (select min(id) from peoples where id > $id)", FALSE);
                if ($selectNext->exists()) {
                    $this->data['next'] = $selectNext->id;
                }

                $selectPrev = new People();
                $selectPrev->query("select id from peoples where id = (select max(id) from peoples where id < $id)", FALSE);
                if ($selectPrev->exists()) {
                    $this->data['prev'] = $selectPrev->id;
                }
                $getPersonDetails = new People();
                $getPersonDetails->get_by_id($_GET['id']);
                if ($getPersonDetails->exists()) {
                    $this->data['details'] = $getPersonDetails->show_data();
                    $this->load->view('home/personDetailsPT', $this->data);
                } else {
                    $this->data['details'] = array();
                    redirect('home/search');
                }
            } else {

                $string = $_GET['name'];
                $name = explode(" ", $string);
                $firstName = $name[0];
                $lastName = '';
                if (!empty($name[1])) {
                    $lastName = $name[1];
                }
                $searchResult = $this->APICall($firstName, $lastName, '');

                $this->data['totalResults'] = 0;
                $this->data['result'] = array();
                if (!empty($searchResult)) {
                    $this->processXML($searchResult);
                }

                foreach ($this->data['result'] as $key => $val) {

                    if ($val['id'] == $_GET['id']) {
                        $this->data['details'] = $val;
                    }
                }
                if (!empty($this->data['details'])) {
                    $this->load->view('home/personDetails', $this->data);
                } else {
                    redirect('home/search');
                }
            }
        } else {
            redirect('/');
        }
    }

    public function APICall($firstName, $lastName = "", $city = "", $state = "") {

        $url = 'http://api.peoplesearchxml.com//SearchServicePublic.asmx/Search';
        $xmlstring = '<search>'
                . '<searchType>PeopleSearchPartner-2</searchType>'
                . '<searchCriteria>'
                . '<firstName>' . $firstName . '</firstName>';
        if (!empty($lastName)) {
            $xmlstring .= '<lastName>' . $lastName . '</lastName>';
        } else {
            $xmlstring .= '<lastName/>';
        }

        if (!empty($city)) {
            $xmlstring .= '<city>' . $city . '</city>';
        } else {
            $xmlstring .= '<city/>';
        }

        if (!empty($state)) {
            $xmlstring .= '<state>' . $state . '</state>';
        } else {
            $xmlstring .= '<state/>';
        }
        $xmlstring .='</searchCriteria>'
                . '<identification>'
                . '<ipAddress>192.185.101.51</ipAddress>'
                . '<partnerID>PopuTrust</partnerID>'
                . '<partnerPassword>Trustpoputrust</partnerPassword>'
                . '</identification>'
                . '</search>';
        $fields = array(
            'sSearchRequest' => urlencode($xmlstring),
        );
  
        //url-ify the data for the POST
        $fields_string = '';

        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded',
            'Content-Length: ' . strlen($fields_string))
        );

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);  // Insert the data
        // Send the request
        $result = curl_exec($curl);
        // Free up the resources $curl is using
        curl_close($curl);

        $xml = simplexml_load_string($result);

        //header('Content-Type: text/xml');
        $xmlstr = <<<XML
            $xml
XML;
        $xmltrim=trim($xmlstr);
        if(empty($xmltrim))
            return FALSE;
        else{
            $searchResult = new SimpleXMLElement($xmlstr);
            return $searchResult;
        }
    }

    public function processXML($searchResult) {
        if (!empty($searchResult->searchResult->dataset->persons)) {
            $totalResult = $searchResult->searchResult->dataset->persons->matches['count'];
            $this->data['totalResults'] += $totalResult;
            //$personsArray = $this->xml2array($searchResult->searchResult->dataset->persons->person);

            foreach ($searchResult->searchResult->dataset->persons->person as $person) {
                $basic = array();

                foreach ($person->attributes() as $key => $val) {
                    //basic details
                    $basic[$key] = (string) $val;
                }
                $nameArray = array();
                if (!empty($person->names)) {
                    foreach ($person->names as $namearraykey => $namearrayval) {
                        //names array
                        $nameAttrib = array();
                        $nameArray = array();
                        foreach ($namearrayval->name as $eachnamekey => $eachnamevalue) {

                            foreach ($eachnamevalue->attributes() as $eachnameattribkey => $eachnameattribvalue) {
                                //name array element
                                $nameAttrib[$eachnameattribkey] = (STRING) $eachnameattribvalue;
                            }
                            $nameArray[] = $nameAttrib;
                        }
                    }
                    $basic['names'] = (array) $nameArray;
                } else {
                    $basic['names'] = array();
                }


                $addressArray = array();
                if (!empty($person->addresses)) {
                    foreach ($person->addresses as $addressarraykey => $addressarrayval) {
                        //names array
                        $addressAttrib = array();
                        $addressArray = array();
                        foreach ($addressarrayval->address as $eachaddressskey => $eachaddressvalue) {

                            foreach ($eachaddressvalue->attributes() as $eachaddressattribkey => $eachaddressattribvalue) {
                                //name array element
                                $addressAttrib[$eachaddressattribkey] = (STRING) $eachaddressattribvalue;
                            }
                            $addressArray[] = $addressAttrib;
                        }
                        $basic['addresses'] = $addressArray;
                    }
                } else {
                    $basic['addresses'] = array();
                }



                $relativesArray = array();
                if (!empty($person->relatives->person)) {
                    foreach ($person->relatives->person as $relativepersonkey => $relativepersonval) {
                        $nameArray = array();
                        foreach ($relativepersonval->names as $namearraykey => $namearrayval) {
                            //names array
                            $nameAttrib = array();
                            $nameArray = array();
                            $nameArrayList = array();
                            foreach ($namearrayval->name as $eachnamekey => $eachnamevalue) {
                                foreach ($eachnamevalue->attributes() as $eachnameattribkey => $eachnameattribvalue) {
                                    //name array element
                                    $nameAttrib[$eachnameattribkey] = (STRING) $eachnameattribvalue;
                                }
                                $nameArray = $nameAttrib;
                            }
                            $nameArrayList = $nameArray;
                        }
                        $relativesArray[] = $nameArrayList;
                    }
                    $basic['relatives'] = $relativesArray;
                } else {
                    $basic['relatives'] = array();
                }

                $this->data['result'][] = $basic;
            }
        }
    }

    public function php_info() {
        echo '<pre>';
        print_r(phpinfo());
        exit;
    }

    public function xmlGeneration() {
        ini_set('memory_limit', '-1');
        $searchPeople = new People();
        $searchPeople->get();
        $xml = '';
        foreach ($searchPeople as $o) {
            $xml .="<url>" .
                    "<loc>https://poputrust.com/home/people/d?name=" . htmlentities($o->name) . "&id=" . $o->id . "&pay=0"
                    . "</loc>"
                    . "</url>";
        }
        echo '<pre>';
        print_r($xml);
        exit;
    }

    public function mobileExistance() {

        $phone = $_REQUEST['phone'];
        $checkMobile = new Authentication();
        $checkMobile->get_by_phone($phone);
        if ($checkMobile->exists()) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function emailExistance() {

        $email = $_REQUEST['email'];
        $checkEmail = new Authentication();
        $checkEmail->get_by_email($email);
        if ($checkEmail->exists()) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function signup() {
        $this->data['page_title'] = SITE_TITLE . ' | Signup';
        $this->data['active_class'] = 'signup';
        $this->load->view('home/signup.php', $this->data);
    }

    public function trySignin() {
        if (!empty($_POST)) {
            $validate = new Authentication();
            $validate->get_by_email($_POST['email']);

            if ($validate->exists()) {
                if (md5($_POST['password']) == $validate->password) {
                    $sessionArray = array(
                        'id' => $validate->id,
                        'role_id' => $validate->type,
                        'email' => $validate->email,
                        'firstName' => $validate->firstName,
                        'lastName' => $validate->lastName
                    );
                    $this->session->set_userdata($sessionArray);
                    if ($validate->type == 1) {
                        redirect('admin');
                    }
                    my_alert_message('success', 'Login successfull');
                    redirect('home/signin');
                } else {
                    my_alert_message('danger', 'Invalid password');
                    redirect('home/signin');
                }
            } else {
                my_alert_message('danger', 'Invalid Email address');
                redirect('home/signin');
            }
            $register->email = $_POST['email'];
            $register->password = md5($_POST['password']);
            $register->firstName = $_POST['firstName'];
            $register->lastName = $_POST['lastName'];
            if ($register->save()) {
                my_alert_message('success', 'Congrats! Registration successfull');
                redirect('home');
            } else {
                my_alert_message('danger', 'Error while reistration');
                redirect('home');
            }
        } else {
            my_alert_message('danger', 'Invalid request');
            redirect('home');
        }
    }

    public function save() {

        if (!empty($_POST)) {
            $register = new Authentication();
            $register->email = $_POST['email'];
            $register->password = md5($_POST['password']);
            $register->firstName = $_POST['firstName'];
            $register->lastName = $_POST['lastName'];
            if ($register->save()) {
                my_alert_message('success', 'Congrats! Registration successfull');
                redirect('home');
            } else {
                my_alert_message('danger', 'Error while reistration');
                redirect('home');
            }
        } else {
            my_alert_message('danger', 'Invalid request');
            redirect('home');
        }
    }

    public function privacy() {
        $this->data['page_title'] = SITE_TITLE . ' | Privacy and Policy';
        $this->data['active_class'] = '';
        $this->load->view('home/privacyandpolicy.php', $this->data);
    }

    public function termsofservice() {
        $this->data['page_title'] = SITE_TITLE . ' | Terms of Service';
        $this->data['active_class'] = '';
        $this->load->view('home/termsofservice.php', $this->data);
    }

    public function termsofuse() {
        $this->data['page_title'] = SITE_TITLE . ' | Terms of Use';
        $this->data['active_class'] = '';
        $this->load->view('home/termsofuse.php', $this->data);
    }

    public function dmca() {
        $this->data['page_title'] = SITE_TITLE . ' | Digital Millennium Copyright Act (DMCA) Compliance';
        $this->data['active_class'] = '';
        $this->load->view('home/dmca.php', $this->data);
    }

    public function advisory() {
        $this->data['page_title'] = SITE_TITLE . ' | Advisory';
        $this->data['active_class'] = '';
        $this->load->view('home/advisory.php', $this->data);
    }

    public function paypal($action) {
        if (!empty($action)) {
            echo json_encode(array('status' => true, 'message' => "Request accpted"));
            return exit;
        } else {
            echo json_encode(array('status' => false, 'message' => "Bad Request"));
            return exit;
        }
    }

}
