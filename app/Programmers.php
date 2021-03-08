<?php


namespace EmployeersApp;
use EmployeersApp\Employee;
class Programmers extends Employee
{
    private $lang;
    private $education;
    public static $title = 'Programmers';

    public function __construct($naame ,$name, $age, $position, $salary, $lang, $education)
    {
        parent::__construct($naame ,$name, $age, $position, $salary);
        $this -> lang = $lang;
        $this -> education = $education;
    }

    public function setTitle()
    {
        return self::$title;
    }


    public function getEmployee()
    {
        return [
            $this -> naame,
            $this->name,
            $this->age,
            $this->position,
            $this->salary,
            $this->lang,
            $this->education
        ];
    }
}