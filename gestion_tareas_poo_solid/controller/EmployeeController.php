<?php

class EmployeeController{
    protected $id_employee;
    protected $name;
    protected $phone;
    protected $email;
    private $password; //get / set
    private $salary;

    public function __construct($id, $name, $phone, $email, $salary)
    {
        $this->id_employee = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = "Kodigo";
        $this->salary = $salary;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($pass){
        $this->password = $pass;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
}