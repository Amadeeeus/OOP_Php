<?php 
class Student
{
    private $name;
    private $course = 1;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function upToNextCourse()
    {
        $this->course++;
    }
}
?>