<?php


namespace EmployeersApp;

abstract class Employee
{
    protected $naame;
    protected $name;
    protected $age;
    protected $position;
    protected $salary;

    public function __construct($naame, $name, $age, $position, $salary)
    {
        $this -> naame = $naame;
        $this -> name = $name;
        $this -> age = $age;
        $this -> position = $position;
        $this -> name = $salary;
    }

//    public function getID()
//    {
//        return 'ID Unknown';
//    }

//    abstract public function gettID();

    public function getEmployee()
    {
       return [
           $this -> naame,
           $this -> name,
           $this -> age,
           $this -> position,
           $this -> salary
       ];
    }
}