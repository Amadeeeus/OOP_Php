<span>Цепочки методов</span><br><br>
<span>Исходный код</span><br>
<pre>
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
require_once "./classes/Arr3.php"; 
$arr = new Arr;
echo "Сумма= ".$arr->add(3)->add(2)->push([2,8,9])->sum();
</pre><br>
<?php
require_once "./classes/Arr3.php"; 
$arr = new Arr;
echo "Сумма= ".$arr->add(3)->add(2)->push([2,8,9])->sum();
?>
<br><span>задание</span><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 

?>