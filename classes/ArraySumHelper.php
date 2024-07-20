<?php 
class ArraySumHelper
{

    public function getSum1($arr)
    {
        $sum = 0;
        foreach($arr as $val)
        {
            $sum += $val; 
        }
        return $sum;
    }

    public function getSum2($arr)
    {
        $sum= 0;
        foreach($arr as $val)
        {
            $sum += pow($val, 2); 
        }
        return $sum;
    }
    public function getSum3($arr)
    {
        $sum= 0;
        foreach($arr as $val)
        {
            $sum += pow($val, 3); 
        }
        return $sum;
    }

    public function getSum4($arr)
    {
        $sum= 0;
        foreach($arr as $val)
        {
            $sum += pow($val, 4); 
        }
        return $sum;
    }
}
?>