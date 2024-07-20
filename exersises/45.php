<h1>Работа с трейтами в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php
require_once "./classes/User14.php";
$user = new User("Pavel", 27);
echo "Имя= ".$user->getName()."\n"."Возраст= ".$user->getAge();
require_once "./classes/Country.php";
$country = new Country("Russia",2000,173000000);
echo "Имя= ".$country->getName()."\n"."Возраст= ".$country->getAge()."Population = ".$country->getPopulation();
?>
<br><h1>Несколько трейтов</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/Test6.php";
$test = new Test;
echo "сумма ".$test->SumMethids();
?>