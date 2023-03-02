<?php
namespace App\classes;

class Calculator{
    public $firstNumber;
    public $secondNumber;
    public $action;
    public $result;

    public function __construct($data){
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        $this->firstNumber = $data['first_nuber'];
        $this->secondNumber = $data['second_number'];
        $this->action = $data['action'];
    }

    public function index(){
         switch($this->action){
            case'+':
                $this->result = $this->add();
                break;
            case'-':
                $this->result = $this->sub();
                break;
            case'*':
                $this->result = $this->multi();
                break;
            case'/':
                $this->result = $this->div();
                break;
            case'%':
                $this->result = $this->rem();
                break;
         }

         return $this->result;
    }

    protected function add(){
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub(){
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multi(){
        return $this->firstNumber * $this->secondNumber;
    }
    protected function div(){
        return $this->firstNumber / $this->secondNumber;
    }
    
    protected function rem(){
        return $this->firstNumber % $this->secondNumber;
    }
}