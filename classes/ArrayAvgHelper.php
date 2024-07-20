<?php 
class ArrayAvgHelper
{
    public function getAvg1($array)
    {
       $avg =$this->calcSqrt($this->getSum($array),1);
       return $avg;
    }

    public function getAvg2($array)
    {
        $avg = $this->calcSqrt($this->getSum($array), 2);
        return $avg;
    }
    
    public function getAvg3($array)
    {
       $avg = $this->calcSqrt($this->getSum($array), 3);
       return $avg;
    }
    public function getAvg4($array)
    {
       $avg = $this->calcSqrt($this->getSum($array),4);
       return $avg;
    }
    private function getSum($array)
    {
      $sum = 0;
      foreach ($array as $value) 
      {
        $sum += $value;     
      }
      return $sum;
    }
    private function calcSqrt($num, $power)
    {
      $sqrt = 0;
      $sqrt = pow($num, 1/$power);
      return $sqrt;
    }
}
?>