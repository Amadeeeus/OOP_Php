<?php
require_once "./classes/User9.php";
class Employee1 extends User
{
    public function __construct($name, $surname, public $salary)
    {
        parent::__construct($name, $surname);
    }
}
?>