<?php 
class User
{
private static $count =0;
    public function __construct(public $name)
    {
       self::$count++; 
    }
    public function getCount()
    {
        return self::$count;
    }
}


?>