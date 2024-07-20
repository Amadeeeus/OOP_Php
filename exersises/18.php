<span>Класс как набор методов</span><br><br>
<span>Исходный код</span><br>
<pre>
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
require_once "./classes/ArraySumHelper.php";
$array = [3,5,6,7,3,1,3,5,6,7,7];
$sum = new ArraySumHelper;
echo "Сумма= ".$sum->getSum1($array)."\n"."Сумма квадратов= ".$sum->getSum2($array)."\n"."Сумма кубов= ".$sum->getSum3($array)."\n"."Сумма в 4 степени= ".$sum->getSum4($array)."\n";

</pre><br>
<?php 
require_once "./classes/ArraySumHelper.php";
$array = [3,5,6,7,3,1,3,5,6,7,7];
$sum = new ArraySumHelper;
echo "Сумма= ".$sum->getSum1($array)."\n"."Сумма квадратов= ".$sum->getSum2($array)."\n"."Сумма кубов= ".$sum->getSum3($array)."\n"."Сумма в 4 степени= ".$sum->getSum4($array)."\n";
?>
<br><span>задание</span><br><br>
<span>Исходный код</span><br>
<pre>
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
require_once "./classes/ArrayAvgHelper.php";
$array = [3,5,6,7,3,1,3,5,6,7,7];
$avg = new ArrayAvgHelper;
echo "Сумма= ".$avg->getAvg1($array)."\n"."Сумма корня квадратов= ".$avg->getAvg2($array)."\n"."Сумма корня кубов= ".$avg->getAvg3($array)."\n"."Сумма корня в 4 степени= ".$avg->getAvg4($array)."\n";

</pre><br>
<?php 
require_once "./classes/ArrayAvgHelper.php";
$array = [3,5,6,7,3,1,3,5,6,7,7];
$avg = new ArrayAvgHelper;
echo "Сумма= ".$avg->getAvg1($array)."\n"."Сумма корня квадратов= ".$avg->getAvg2($array)."\n"."Сумма корня кубов= ".$avg->getAvg3($array)."\n"."Сумма корня в 4 степени= ".$avg->getAvg4($array)."\n";
?>