<?php 
class EmployeersCollection
{
    private $employeers = [];
    
    public function add($employee) 
    {
        $this->employeers[]= $employee;
    } 
    
    public function getEmployeers()
    {
        return $this->employeers;
    }
    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employeers as $employee)
        {
            $sum+= $employee->getSalary();
        }
        return $sum;
    }
}
?>