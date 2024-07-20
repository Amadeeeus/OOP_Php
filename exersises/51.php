<h1>Самописный класс Date</h1><br><br>
Напишем класс для работы с датами и временем.<br>
Интерфеййс класса находится в файле iDate<br>
<?php 
require_once("./classes/DateClass.php");
$date = new Date();
$date->setDate(2024,07,01);
echo $date;
echo "<br>";

$s = strtotime(01-07-2024) - strtotime(date("Y-m-d"));
$sec = 60 * 60 *24 * 365;
$min = 60 *24 * 365;
$hour = 24 * 365;
echo "Секунды в год:".$sec;
echo "Минуты в год:".$min;
echo "Часы в год:".$hour;
echo "Time - ".time()/32140800;
echo date('j', $s)
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>задание</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 

?>