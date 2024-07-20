<span>Хранение обьектов в массивах</span><br><br>
<span>Исходный код</span><br><br>
<pre>

</pre>
<?php 
require_once "./classes/user.php";

$users = [new User("pavel", 26), new User("kyle", 34), new User("eric", 27)];
?>
<pre>
    <?php
print_r($users);
?>
</pre>
    <?php
foreach($users as $user)
{
    echo "Имя= ".$user->name."<br>"."Возраст".$user->age."<br>";
}
?>
<span>задание</span><br><br>
<span>Исходный код</span><br><br>
<pre>

</pre>
<?php 
include_once "./classes/city.php";
$city1= new City(1,1);
$city1->setName("Schakhty");
$city1->setPopulation(250000);
$array[] = $city1->combineToArray($city1->getName(), $city1->getPopulation());
$city2 = new City(1,1);
$city2->setName("Rostov");
$city2->setPopulation(3000000);
$city = $city2->getName();
$population = $city2->getPopulation();
$array[] = $city1->combineToArray($city2->getName(),$city2->getPopulation());
foreach($array as $value)
{
    echo "Имя= ".$value['name'].'<br>'."Популяция= ".$value['population'].'<br>';
}
?>
<span>Другая реализация</span><br><br>
<?php
$city3 = [new City("Schakhty",25000), new City("Rostov", 3000000),new City("Novocherkassk", 5000000)];
?>
<pre>
    <?php
print_r($city3);
?>
</pre>
    <?php
foreach($city3 as $cities)
{
    echo "Город= ".$cities->name.'<br>'."Население= ".$cities->population.'<br>';
}
?>