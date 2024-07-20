<?php 
require_once "./classes/User11.php";
class Student extends User
{
    public function __construct(private $scholarship = 0)
    {
        
    }

    public function setScholarship($scholarship)
{
  $this->scholarship = $scholarship;
}
public function getScholarship()
{
    return $this->scholarship;
}

public function increaseRevenue($value)
{
    $this->scholarship+=$value;
}

public function decreaseRevenue($value)
{
    $this->scholarship-=$value;
}
}

?>