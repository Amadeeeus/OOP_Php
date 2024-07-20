<?php
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
?>