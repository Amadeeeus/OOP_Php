<?php 
class Arr
{
private $numbers = [];

public function add($number)
{
    $this->numbers[] = $number;
    return $this;
}

public function push($numbers)
{
    $this->numbers = array_merge($this->numbers, $numbers);
    return $this;
}

public function sum()
{
    return array_sum($this->numbers);
}

}
?>