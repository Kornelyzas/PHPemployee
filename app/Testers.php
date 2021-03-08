<?php

namespace EmployeersApp;
use EmployeersApp\Employee;
class Testers extends Employee
{
    private $education;
    public static $title = 'Testers';

    public function __construct($naame ,$name, $age, $position, $salary, $education)
    {
        parent::__construct($naame ,$name, $age, $position, $salary);
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
            $this->position,
            $this->name,
            $this->age,
            $this->salary,
            $this->education
        ];
    }
}