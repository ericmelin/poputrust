<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authentication extends DataMapper {

    var $table = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    /**
     * verfiy username for application login by technician
     * 
     * @param string username
     * 
     * @return boolean returns true/flse
     */
    public function validateUserName($username) {

        $memberObj = new Authentication();
        $memberObj->select('username');
        $memberObj->where('user_type', 2);
        $memberObj->where('username', $username);
        $memberObj->get();

        if ($memberObj->username) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * verfiy Email for admin login
     * 
     * @param string email
     * @param string emailid values
     * 
     * @return boolean returns true/flse
     */
    public function validateEmail($email) {

        $memberObj = new Authentication();
        $memberObj->select('email');
        $memberObj->where('email', $email);
        $memberObj->get();

        if ($memberObj->exists()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * verfiy Email or username for Block or not
     * 
     * @param string username or email
     * @param string emailid/username values
     * 
     * @return boolean returns true/flse
     */
    public function checkVerfied($email) {

        $memberObj = new Authentication();
        $memberObj->select('email');
        $memberObj->where('email', $email);
        $memberObj->where('isactive', 1);
        $memberObj->get();

        if ($memberObj->exists()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * verfiy Email or username with password
     * 
     * @param string usertype username or email
     * @param string value username or email
     * @param string password for admin encrypted and user visible
     * 
     * @return boolean returns true/flse
     */
    public function validateCredential($type, $value, $password) {

        if ($type == 'username') {
            $orginalCredential = $this->getOriginalCredential($type, $value);
            if ($orginalCredential->password == $password) {
                return true;
            } else {
                return false;
            }
        } else {
            //for admin credenitals 
            $orginalCredential = $this->getOriginalCredential($type, $value);
            $comparePassword = md5($password);

            if ($orginalCredential->password == $comparePassword) {
                //set session
                $session_array = array(
                    'userid' => $orginalCredential->id,
                    'email' => $orginalCredential->email,
                    'fullname' => $orginalCredential->fullname,
                    'username' => $orginalCredential->username,
                );

                return $session_array;
            } else {
                return false;
            }
        }
    }

    /**
     * get password for  Email or username 
     * 
     * @param string usertype username or email
     * @param string value username or email
     * 
     * @return boolean returns true/flse
     */
    public function getOriginalCredential($type, $value) {
        if ($type == 'username') {
            $memberObj = new Authentication();
            $memberObj->where('username', $value);
            $memberObj->get();
            if ($memberObj->count()) {
                return $memberObj;
            } else {
                return false;
            }
        } else {
            $memberObj = new Authentication();
            $memberObj->where('email', $value);
            $memberObj->get();

            if ($memberObj->result_count()) {
                return $memberObj;
            } else {
                return false;
            }
        }
    }

    public function doctorDetails() {
        return array(
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'address' => $this->address,
            'city' => $this->city,
            'zip' => $this->zip,
            'phone' => $this->phone,
        );
    }

}
