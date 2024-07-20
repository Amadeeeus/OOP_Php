<?php 
require_once "./classes/iUser.php";
class User implements iUser
{
    public function __construct(private $name = 0, private $age = 0)
    {
        
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
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