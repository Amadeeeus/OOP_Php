<?php 
require_once "./classes/User11.php";
class Employee extends User
{
    public function __construct(private $salary=0)
    {
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value)
    {
        $this->salary+=$value;
    }

    public function decreaseRevenue($value)
    {
        $this->salary-=$value;
    }
}
?>