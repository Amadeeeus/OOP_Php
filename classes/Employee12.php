<?php
require_once "./classes/iEmployee.php";
class Employee implements iEmployee
{
    public function __construct(private $name = 0, private $age = 0, private $salary = 0)
    {
        
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
      return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getMethods()
    {
        return get_class_methods(__CLASS__);
    }
}
?>