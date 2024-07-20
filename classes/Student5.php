<?php 
class Student
{
    public function __construct(private $name, private $scholarship)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}
?>