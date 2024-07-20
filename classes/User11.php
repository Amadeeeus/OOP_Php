<?php
abstract class User
{
  public function __construct(private $name = 0)
  {
    
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
  abstract public function increaseRevenue($value);
  abstract public function decreaseRevenue($value);
}
?>