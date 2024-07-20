<?php 
class User
{
    public function __construct(private $name, private $age)
    {

    }
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
      return $this->name;
    }
}
?>