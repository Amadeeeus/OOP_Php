<?php 
class ArraySumHelper
{
    public static function getSum1($arr)
    {
        return self::getSum($arr,1);
    }

    public static function getSum2($arr)
    {
        return self::getSum($arr,2);
    } 

    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }

    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }

    private static function getSum($arr, $pow)
    {
        $sum = 0;
        foreach($arr as $el)
        {
            $sum += pow($el, $pow);
        }
        return $sum;
    }
}
?>