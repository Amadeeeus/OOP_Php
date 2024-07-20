<?php
require_once "./classes/user4.php"; 
class Student extends User
{
private $course= 1;

public function addToNextCourse()
{
   if($this->checkCourse($this->course))
   {
     $this->course++;
   }
}
public function getCourse()
{
    return $this->course;
}
public function downToLowCourse()
{
    if($this->checkCourse($this->course))
    {
      $this->course--;
    }
}
private function checkCourse($course)
{
  if($course >= 1 && $course <= 5)
  {
    $this->course = $course;
    return $this->course;
  }
}
}
?>