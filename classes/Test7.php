<?php 
class Test
{
    private $prop1 = 1; 
    private $prop2 = 2;
   // public function __construct(private $prop1 = 1, public $prop2 = 2)
    //{

   // }

    public function __get($name)
    {
        return $this->$name;
    }
}
?>