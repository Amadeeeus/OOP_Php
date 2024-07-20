<span>Начальные значения свойств при обьявлении</span><br><br>
<span>Исходный код</span><br><br>
<pre>
Class Test
{
    public $prop1;
    public $prop2;

    public function __construct()
    {
        $this->prop1 = "value1";
        $this->prop2 = "value2";
    }
}
include "./classes/test.php";
$test = new Test();
echo $test->prop1;
echo $test->prop2;
</pre>
<?php 
include "./classes/test.php";
$test = new Test();
echo $test->prop1, "<br>";
echo $test->prop2, "<br><br>";
?>
<span>Применение</span><br><br>
<span>Исходный код</span><br>
<pre>
class Student
{
    private $name;
    private $course = 1;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function upToNextCourse()
    {
        $this->course++;
    }
}

</pre>
<?php 
include_once "./classes/Student1.php";
$stud = new Student("pasha");
$stud->upToNextCourse();
echo "Имя= ".$stud->getName()."<br>"."Курс= ".$stud->getCourse(); 
?>
<br><br><span>Задание</span><br>
<br><span>Реализовать класс который может принимать массив, одна из функций принимает массив и добавляет в конец существующего массива и реальзовать функцию которая подсчитывает среднее арифметическое</span><br><br>
<span>Исходный код</span><br>
<pre>
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
require_once "./classes/Arr.php";
$num1 = [1,2,4,5,6,7,8];
pasteCodeArr($num1);
$num2 = [7,3,3,23,8,3,8];
pasteCodeArr($num2);
$num = new Arr($num1);
pasteCodeArr($num->addNum($num2));
echo "Среднее арифметическое= ".$num->getAvg($num2)
</pre>
<br><span>Реализация</span><br>
<?php 
require_once "./classes/Arr.php";
$num1 = [1,2,4,5,6,7,8];
pasteCodeArr($num1);
$num2 = [7,3,3,23,8,3,8];
pasteCodeArr($num2);
$num = new Arr($num1);
pasteCodeArr($num->addNum($num2));
echo "Среднее арифметическое= ".$num->getAvg($num2);
?>