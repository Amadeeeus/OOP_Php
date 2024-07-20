<?php 
class AvgHelper
{
    public function getAvg($arr)
    {
        $sum=0;
        $count = 0;
        foreach($arr as $value)
        {
            $count++;
            $sum+=$value;
        }
        $avg= $sum/$count;
        return $avg;
    }

    public function getMeanSquare($arr)
    {
        $sum = 0;
        $count = 0;
        foreach($arr as $val)
        {
            $count++;
            $sum += pow($val,2);
        
        }
        $sq= pow(($sum/$count),1/2);
        return $sq;
    }
}
?>