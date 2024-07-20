<?php
class User
{
    public function __construct(protected $name, protected $age)
    {
        
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age= $age;
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