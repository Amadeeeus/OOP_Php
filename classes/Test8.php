<?php 
class Test
{
    public function __construct(private $prop1 = 0, private $prop2 = 0)
    {

    }

    public function __set($name, $value)
    {
        var_dump($name." ".$value);
    }
}
?>