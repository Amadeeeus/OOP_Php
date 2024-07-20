<h1>Нeсколько интерфейсов в ООП</h1><br><br>
В PHP нет множественного наследования - каждый класс может иметь только одного родителя. 
С интерфейсами дело, однако, обстоит по другому: каждый класс может реализовывать любое количество интерфейсов. 
Для этого имена интерфейсов нужно перечислить через запятую после ключевого слова implements.
В этом проявляется еще одно отличие интерфейсов от абстрактных классов - можно реализовывать много интерфейсов, но унаследовать несколько абстрактных классов нельзя.
<span>Исходный код</span><br>
<pre>
interface iTetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}

interface iFigure
{
    public function getSquare();
    public function getPerimeter();
}

class Quadrade implements iFigure,iTetragon
{
    public function __construct(private $a)
    {
        
    }

    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

    public function getSquare()
    {
        return $this->a*$this->a;
    }

    public function getPerimeter()
    {
        return 4*$this->a;
    }
}

$qua = new Quadrade(6);
</pre><br>
<?php 
require_once "./classes/Quadrate3.php";
$qua = new Quadrade(6);
echo "A = ".$qua->getA()."\n"."B = ".$qua->getB()."\n"."C = ".$qua->getC()."\n"."D = ".$qua->getD()."\n"."Площадь= ".$qua->getSquare()."\n"."Периметр= ".$qua->getPerimeter()."\n";
?>
<br><h1>Задание</h1><br><br>
Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и iFigure, и iTetragon.
<span>Исходный код</span><br>
<pre>
class Rectangle implements iFigure, iTetragon
{
  public function __construct(private $a, private $b)
  {
    
  }

  public function getA()
  {
    return $this->a;
  }
  public function getB()
  {
    return $this->b;
  }
  public function getC()
  {
    return $this->b;
  }
  public function getD()
  {
    return $this->a;
  }

  public function getSquare()
  {
    return $this->a*$this->b;
  }

  public function getPerimeter()
  {
    return 2*$this->a + 2*$this->b;
  }
}
$rec = new Rectangle(4,7);
</pre><br>
<?php 
require_once "./classes/Rectangle2.php";
$rec = new Rectangle(4,7);
echo "A = ".$rec->getA()."\n"."B = ".$rec->getB()."\n"."C = ".$rec->getC()."\n"."D = ".$rec->getD()."\n"."Площадь= ".$rec->getSquare()."\n"."Периметр= ".$rec->getPerimeter()."\n";
?>
<br><h1>Задание</h1><br><br>
Сделайте интерфейс iCircle с методами getRadius и getDiameter.
Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.
<span>Исходный код</span><br>
<pre>
require_once "./classes/iFigure.php";
require_once "./classes/iCircle.php";
class Disk implements iFigure,iCircle
{
    private static $mod = 4;
    const PI = 3.14;
    const MOD = 2;
public function __construct(private $rad)
{
    
}

public function getSquare()
{
   return self::MOD * self::PI*pow($this->rad,2);
}

public function getPerimeter()
{
    return self::MOD * self::PI* $this->rad;
}

public function getRadius()
{
    return $this->rad;
}

public function getDameter()
{
    return $this->rad*self::MOD;
}
}

$disk = new Disk(6);
</pre><br>
<?php 
require_once "./classes/Disk2.php";
$disk = new Disk(6);
echo "Радиус = ".$disk->getRadius()."\n"."Диаметр = ".$disk->getDameter()."\n"."Площадь = ".$disk->getSquare()."\n"."Длина = ".$disk->getPerimeter();