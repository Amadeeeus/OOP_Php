<?php 
require_once "./classes/Employee3.php";
class Employee extends User{
public function __construct($name, $surname, $birthday, protected $salary)
{
    parent::__construct($name,$surname,$birthday);
}

public function getSalary()
{
    return $this->salary;
}
}
?>