<?php 
class Test2
{
private static $property;
public static function setProperty($prop)
{
   self::$property = $prop;
}

public static function getProperty()
{
    return self::$property;
}

}
?>