<?php 
class Test
{
    private $prop1;
    private $prop2;
    //public function __construct(private $prop1 =1, private $prop2 = 2)
    //{

    //}

    public function __set($property, $value)
    {
        if($property == 'prop1' or $property == 'prop2')
        {
            $this->$property = $value;
        }
    }
    public function __get($property)
    {
        if($property == 'prop1' or $property == 'prop2')
        {
            return $this->$property;
        }
    }
    
    
}
?>