<?php
require_once "./classes/City2.php";
require_once "./classes/User9.php";
require_once "./classes/Employee7.php";
require_once "./classes/InstOfInheritance.php";

class Compare1{
 public function __construct(private $arr = [])
 {
    
 }

 public function add($person)
 {
   if(!in_array($person, $this->arr, false))
   {
     $this->arr[] = $person;
   }
 }

 public function getNameUser()
 {
    foreach($this->arr as $value)
    {
        if($value instanceof User && $value instanceof Employee1)
        {
            echo "name1 = ".$value->name."<br>";
        }
    }
 }
 public function getNonUser()
 {
    foreach ($this->arr as $value)
    {
        if(!$value instanceof User && !$value instanceof Employee1)
        {
            echo "name2".$value->name."<br>";
        }
    }
 }

 public function getUser()
 {
    foreach ($this->arr as $value)
    {
        if($value instanceof User)
        {
            echo "name3".$value->name."<br>";
        }
    }
 }
}

?>
