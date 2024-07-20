<h1>Интерфейсы и instanceof в ООП</h1><br><br>
С помощью instanceof можно проверять, реализует какой-то класс заданный интерфейс или нет.
 Посмотрим на примере. 
<span>Исходный код</span><br>
<pre>
class Quadrate implements iFigure
{
    
}
</pre><br>
<?php 
require_once "./classes/Quadrate1.php";
$qua = new Quadrate1;
var_dump($qua instanceof Quadrate1);
var_dump($qua instanceof iFigure);
?>
<br><h1>Практика</h1><br><br>
<p>Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).
Сделайте класс Cube, который будет реализовывать интерфейс Figure3d.
Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.
Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс iFigure.
Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.
</p>
<span>Исходный код</span><br>
<pre>
interface iFigure3d
{
    public function getVolume();
    public function getSurfaceSquare();
}

class checkInter
{
    public function __construct(private $a = [])
    {
        
    }

    public function add($arr)
    {
        $this->a[] = $arr;
    }

    public function getNon3D()
    {
        foreach($this->a as $val)
        {
            if($val instanceof iFigure)
            {
                echo "Площадь iFigure = ".$val->getSquare()."<br>";
            }
        }
    }

    public function getAllSq()
    {
        foreach($this->a as $val)
        {
            if($val instanceof iFigure)
            {
                echo "Площадь плоских iFigure = ".$val->getSquare()."<br>";
            }
            if($val instanceof iFigure3d)
            {
                echo "Площадь поверхностей обьемныъ = ".$val->getSurfaceSquare()."<br>";
            }
        }
    }
}

require_once "./classes/CheckInter.php";
require_once "./classes/Rectangle.php";
require_once "./classes/Cube2.php";
require_once "./classes/Quadrate.php";
$obj = new checkInter();
$obj->add(new Quadrate(5));
$obj->add(new Quadrate(8));
$obj->add(new Quadrate(15));
$obj->add(new Rectangle(3,6));
$obj->add(new Rectangle(4,8));
$obj->add(new Rectangle(2,10));
$obj->add(new Cube(7));
$obj->add(new Cube(10));
$obj->add(new Cube(20));
</pre><br>
<?php 
require_once "./classes/CheckInter.php";
require_once "./classes/Rectangle.php";
require_once "./classes/Cube2.php";
require_once "./classes/Quadrate.php";
$obj = new checkInter();
$obj->add(new Quadrate(5));
$obj->add(new Quadrate(8));
$obj->add(new Quadrate(15));
$obj->add(new Rectangle(3,6));
$obj->add(new Rectangle(4,8));
$obj->add(new Rectangle(2,10));
$obj->add(new Cube(7));
$obj->add(new Cube(10));
$obj->add(new Cube(20));
?>
<p>Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс iFigure.</p>
<?php
$obj->getNon3D();
?>
<p>Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.</p>
<?php
$obj->getAllSq();
?>