<span>Вызов метода сразу после создания обьекта</span><br><br>
<span>Исходный код</span><br>
<pre>
class Arr
{
    private $numbers = [];


public function __construct($numbers)
{
  $this->numbers = $numbers;
}

public function add($number)
{
    $this->numbers[]=$number;
}

public function getSum()
{
  return array_sum($this->numbers);
}
}
require_once "./classes/Arr2.php";
echo (new Arr([1,2,3,4,5,6,7,8,9]))->getSum();
</pre><br>
<?php 
require_once "./classes/Arr2.php";
echo (new Arr([1,2,3,4,5,6,7,8,9]))->getSum();
?>
