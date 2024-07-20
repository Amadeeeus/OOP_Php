<h1>Магический метод toString в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
class User1
{
    public function __construct(private $name, private $surname, private $patronymic)
    {

    }
    public function __toString()
    {
        return $this->name." ".$this->surname." ".$this->patronymic;
    }
}

$user2 = new User1("pavel", "kravchenko", "andreevich");
echo $user2;
</pre><br>
<?php 
require_once "./classes/User15.php";
require_once "./classes/User16.php";
$user = new User("Pavel",10231);
echo $user;?>
<br><br>
Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic. Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя.<br><br>
<?php
$user2 = new User1("pavel", "kravchenko", "andreevich");
echo $user2;
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>задание</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/Arr5.php";
$arr = new Arr;
echo $arr->add(1)->add(2)->add(3)->add(4)->add(5);
?>