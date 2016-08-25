<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class People extends DataMapper {

    var $table = 'peoples';

    public function __construct() {
        parent::__construct();
    }

    public function show_data() {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'address'=>  $this->address,
            'state'=>  $this->state,
            'city'=>  $this->city,
            'fax'=>  $this->fax,
            'phone'=>  $this->phone,
            'company'=>  $this->company,
            'email'=>  $this->email,
            'website'=>  $this->website,
            'first_name'=>  $this->first_name,
            'last_name'=>  $this->last_name,
            'facebook'=>  $this->facebook,
            'twitter'=>  $this->twitter,
            'about'=>  $this->about,
            'specializations'=>  $this->specializations,
            'seo'=>  $this->seo,
        );
    }

}
