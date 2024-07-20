<?php 
require_once "./classes/user4.php";
class Employee extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
?>