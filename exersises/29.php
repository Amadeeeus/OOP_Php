<h1>Статические методы в ООП</h1><br><br>
При работе с классами можно делать методы, которые для своего вызова не требуют создания объекта.
 Такие методы называются статическими. Чтобы объявить метод статическим, нужно после модификатора доступа написать ключевое слово static:
<span>Исходный код</span><br>
<pre>
class Math
{
    public static function getSum($a,$b)
    {
        return $a+$b;
    }
    public static function getProd($a,$b)
    {
        return $a*$b;
    }
}

require_once "./classes/Math.php";
echo  "Sum= ".Math::getSum(52,28);
echo "Prod= ".Math::getProd(130, 58);
</pre><br>
<?php 
require_once "./classes/Math.php";
echo  "Sum= ".Math::getSum(52,28);
echo "Prod= ".Math::getProd(130, 58);
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Статические методы внутри класса</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/Math1.php";
echo "DoubleSum = ".Math1::getDoubleSum(592,127);
?>
<br><h1>Практика</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/ArraySumHelper1.php";
$arr = [11,22,33,44,55,66,77,88,99];
echo  "Sum= ".ArraySumHelper::getSum1($arr)."\n";
echo "Sum2= ".ArraySumHelper::getSum2($arr)."\n";
echo "Sum3= ".ArraySumHelper::getSum3($arr)."\n";
echo "Sum4= ".ArraySumHelper::getSum4($arr)."\n";
?>