<?php 
require_once "./classes/Employee8.php";
require_once "./classes/Student6.php";
class UserCollection
{
  public function __construct(private $employees = [], private $students = [])
  {
    
  }

  public function add($user)
  {
     if($user instanceof Employee2)
     {
        $this->employees[]= $user;
     }
     if($user instanceof Student1)
     {
        $this->students[]= $user;
     }
  }

  public function getTotalSalary()
  {
    $sum = 0;
    foreach($this->employees as $emp)
    {
        $sum += $emp->getSalary();
    }
    return $sum;
  }

  public function getTotalScholarship()
  {
    $sum = 0;
    foreach($this->students as $stud)
    {
        $sum += $stud->getScholarship();
    }
    return $sum;
  }

  public function getAllMoney()
  {
    return $this->getTotalSalary() + $this->getTotalScholarship();
  }
}
?>