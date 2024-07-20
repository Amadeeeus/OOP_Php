<?php 
class Geometry
{
    private static $pi = 3.14;
    private static $double = 2;
    private static $cube =3;

    private static $drob = 4/3;
    public static function getCircleSquare($radius)
{
  return self::$pi * $radius * $radius;
}

public static function getCircleCircuit($radius)
{
   return self::$double * self::$pi * $radius;
}

public static function getVolumeShar($radius)
{
  return self::$drob * self::$pi * pow($radius, self::$cube);
}
}
?>