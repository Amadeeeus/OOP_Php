<?php 
class Compare
{
public function __construct(public $compare1 = 0)
{
    
}

public function getCompare1()
{
   return $this->compare1;
}

public function setCompare1($compare)
{
    $this->compare1= $compare;
}
}
?>