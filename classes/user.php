<?php 
class User
{
 public $name;
 public $age;

 public function __construct($name, $age)
 {
    $this->name = $name;
    $this->age=$age;
 }

 public function setName($name)
 {
    $this->name =$name;
 }

 public function setAge($age)
 {
    $this->age= $age;
 }

 public function getName()
 {
    return $this->name;
 }

 public function getAge()
 {
    return $this->age;
 }

}
?>