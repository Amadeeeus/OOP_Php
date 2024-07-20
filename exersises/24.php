<span>Использование классов внутри классов</span><br><br>
<span>Исходный код</span><br>
<pre>
require_once "./classes/SumHelper.php"; 
require_once "./classes/AvgHelper.php";
class Arr{
private $sumHelper;
private $avgHelper;
 private $nums = [];
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }
    public function add($num)
    {
        $this->nums[] = $num;
    }

    public function getNums()
    {
        return $this->nums;
    }

    public function getSum23()
    {
        return $this->sumHelper->getSum2($this->nums) +$this->sumHelper->getSum3($this->nums);
    }

    public function getAvgMeanSum()
    {
        return $this->avgHelper->getAvg($this->nums) + $this->avgHelper->getMeanSquare($this->nums);
    }
}

class SumHelper
{

    public function getSum2($arr)
    {
        return $this->getSum($arr,2);
    }
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }
    private function getSum($arr, $power)
   { 
    $sum = 0;
    foreach ($arr as $value)
    {
        $sum+=pow($value, $power);
    }
    return $sum;
    }
}

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
</pre><br>
<?php 
require_once "./classes/Arr4.php";
require_once "./classes/SumHelper.php";
require_once "./classes/AvgHelper.php";
$arr =new Arr;
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo "Имя= ".$arr->getSum23()."\n";
$SumArr = $arr->getNums();
$avg = new AvgHelper;
$res = $avg->getAvg($SumArr);
echo $res."\n";
$sq = $avg->getMeanSquare($SumArr);
echo $sq."\n";
echo "Сумма= ".$arr->getAvgMeanSum()."\n";
?>
