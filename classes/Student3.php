<?php 
require_once "./classes/User5.php";
class Student extends User
{
    public function __construct($name, $age, protected $course)
    {
        parent::__construct($name, $age);
    }
public function addOneYear()
{
    $this->age++;
}

  public function setCourse($course)
  {
    $this->course = $course;
  }
  
  public function getCourse()
{
    return $this->course;
}
}

?>