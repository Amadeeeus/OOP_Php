<?php 
require_once "./classes/Employee9.php";
class EmployeeCollection
{
    public function __construct(private $collection= [])
    {
        
    }
    public function add(Employee $employees)
    {
        $this->collection[] = $employees;
    }

    public function getTotalSalary()
    {
        $sum = 0;
        foreach($this->collection as $coll)
        {
            $sum += $coll->getSalary();
        }
        return $sum;
    }
}
?>