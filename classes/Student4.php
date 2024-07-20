<?php
class Student extends User
{
    public function __construct($name, $age, protected $course)
    {
        parent::__construct($name, $age);
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
    
    public function setName($name)
    {
        if(strlen($name)<10)
        {
            parent::setName($name);
        }
    }
    public function setAge($age)
    {
        if($age<=25)
        {
            parent::setAge($age);
        }
    }
}
?>