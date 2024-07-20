<span>
Работа со свойствами обьектов на PHP
</span>
<?php
class User{
    public $name;
    public $age;
}

$user1 = new User;
$user1->name = "Jonh";
$user1->age = "18";

$user2 = new User;
$user2->name = "Pablo";
$user2->age = '28';

echo $user1->age+$user2->age;
?>
<span>Задание 1:Создать класс Employee в котором будут следующие свойства: name, age, salary</span>
<?php 
Class Employee{
    public $name;
    public $age;
    public $salary;
}
?>
<span>
Задание 2:Создать обьект класса Employee, затем установить его свойства: Имя - Jonh, возраст 25, зарплата 1000
</span>
<?php
$emp1 = new Employee;
$emp1->name = "Jonh";
$emp1->age = 25;
$emp1->salary= 1000;
?>
<span>
Задание 3:Создать обьект класса Employee, затем установить его свойства: Имя - Eric, возраст 26, зарплата 2000
</span>
<?php
$emp2 = new Employee;
$emp2->name = "Eric";
$emp2->age = 26;
$emp2->salary = 2000;
?>
<span>
Задание 4:Вывести на экран сумму зарплат пользователей
</span>
<?php 
echo $emp1->salary+$emp2->salary;
?>
<span>
Задание 4:Вывести на экран сумму возрастов пользователей
</span>
<?php 
echo $emp1->age+$emp2->age;
?>