<?php 
class Arr{
    private $arr;
    
    public function __construct($num)
    {
        $this->arr = $num; 
    } 

    public function getArr()
    {
        return $this->arr;
    }

    public function addNum($arr){
       $arr1 = $this->arr;
       $arr2 = $arr;
       foreach($arr1 as $val1)
       {
        $val3[] = $val1;
       }
       foreach($arr2 as $val2)
        {
            $val3[] = $val2;
        }
       return $val3;
    }

    public function getAvg($arr)
    {
        $sum = 0;
        $count = 0;
        foreach($arr as $key=>$value){
          $sum += $value;
          $count++;
          $avg = $sum/$count;
        }
        return $avg;
    }
}
?>