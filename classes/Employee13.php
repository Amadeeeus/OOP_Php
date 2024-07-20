<?php 
class Employee
{
    public function __construct(protected $name, protected $salary)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
?>