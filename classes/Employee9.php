<?php
class Employee
{
    public function __construct(private $name, private $salary)
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