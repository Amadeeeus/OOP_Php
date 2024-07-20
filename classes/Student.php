<?php 
class Student{
    private $name;
    private $course;

    public function __construct($name)
    {
       $this->name = $name;
       $this->course = 1;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function addToNextCourse()
    {    $course = $this->getCourse();
        if($this->checkCourse($course)){
        $this->course++;
        $course = $this->course;
        }
        if($this->checkCourse($course))
        {
            $this->course = $course; 
        }
       
    }

    private function checkCourse($course)
    {
       if($course>=1 && $course <= 5)
       {
        $this->course= $course;
       }
    }
}
?>