<?php 
class Math1{
    public static function getSum($a,$b)
    {
       return $a+$b;
    }

    public static function getProd($a, $b)
    {
        $a*$b;
    }

    public static function getDoubleSum($a,$b)
    {
        return 2*self::getSum($a,$b);
    }
}
?>