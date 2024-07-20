<?php 
class TestMethods2
{
   public function __construct(public $prop1 = 1, public $prop2 = 2, private $prop3 = 3, private $prop4 = 4)
   {
    
   }
public static function Method1()
{
    echo "Method1";
}
public static function Method2()
{
    echo "Method2";
}
public static function Method3()
{
    echo "Method3";
}

public static function getVars()
{
 return get_class_vars(__CLASS__);
}
}
?>