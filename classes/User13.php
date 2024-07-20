<?php
require_once "./classes/iUser2.php";
class User implements iUser
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
}
?>