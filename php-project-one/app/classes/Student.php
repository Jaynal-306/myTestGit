<?php

namespace App\classes;

class Student{
    public $firstname;
    public $lastname;
    public $fullname;
    public function __construct($data){
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        //echo $data['first_name'];

        $this->firstname = $data['first_name'];
        $this->lastname = $data['last_name'];
    }

    public function index(){
        $this->fullname = $this->firstname.' '.$this->lastname;
        return $this->fullname;
    }
}