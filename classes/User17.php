<?php 
class User
{
    public function __construct(private $name, private $age)
    {
        
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
?>