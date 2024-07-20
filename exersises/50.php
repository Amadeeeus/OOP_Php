<h1>Магический метод __set</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/Test9.php";
$test = new Test;
$test->prop1 =3;
$test->prop2 =3;
echo "121".$test->prop1.$test->prop2;
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>задание</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/User18.php";
$user = new User;
$user->name = "pavelSR";
$user->age = 2;
echo "Имя=".$user->name."Возраст=".$user->age;
?>