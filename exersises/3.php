<span>Работа с методами обьектов</span>
<?php 
Class User1{
    public $name;
    public $age;

    public function show()
    {
        return "!!!";
    }
}

$user = new User1;
echo $user->show();

Class User2{
    public $name;
    public $age;

    public function show($hi)
    {
        return $hi."!!!!";
    }
}

$user2 = new User2;
$user2->name = "Pavel";
echo $user2->show($user2->name);


class User3 
{
    public $name;
    public $age;
    public $color;

    public function allProper($one, $two, $three)
    {
         return $one.$two.$three;
    }
}

$user3 = new User3;
$user3->name= "Djambo";
$user3->age="55";
$user3->color="black";

echo $user3->allProper($user3->name, $user3->age, $user3->color);

?>