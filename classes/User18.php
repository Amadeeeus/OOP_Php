<?php 
class User
{
    public function __construct(private $name = 0,private $age = 0)
    {

    }
    
    public function __get($property)
    {
        if($property!='')
        {
            return $this->$property;
        } 
    }
    public function __set($property, $value)
    {
        if($property == 'age' and $value >= 0 and $value<=70)
        {
            $this->$property = $value;
        }
        if($property == "name" and $value!='')
        {
            $this->$property = $value;
        }
    }
}
?>