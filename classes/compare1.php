<?php 
require_once './classes/Student5.php';
require_once './classes/Employee6.php';
class Compare
{
public function __construct(private $peoples = [])
{
    
}

public function add($emp)
{
    if(!in_array($emp, $this->peoples, false))
    {
        $this->peoples[]= $emp;
    }
}

public function Show()
{
    echo "<pre>".print_r($this->peoples)."</pre>";
}
public function getEmpArr()
{
    foreach($this->peoples as $emp)
    {
        if($emp instanceof Employee)
        echo "Работник - ".$emp->getName()."<br>";
    }
    foreach($this->peoples as $stud)
    {
        if($stud instanceof Student)
        {
           echo  "Студент - ".$stud->getName()."<br>";
        }
    }
}

public function getSum()
{   $sum = 0;
    foreach($this->peoples as $emp)
    {
        if($emp instanceof Employee)
        {
       $sum+=$emp->getSalary();
    }
    }
    echo "Сумма зарплат = ".$sum;
    $sum=0;
    foreach($this->peoples as $stud)
    {
        if($stud instanceof Student)
        $sum+=$stud->getScholarship();
    }
    echo "Сумма стипендий".$sum;
}
}
?>