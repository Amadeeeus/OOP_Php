<?php 
require_once "./classes/iUser3.php";
interface iEmployee extends iUser
{
    public function setSalary($salary);
    public function getSalary();
    public function getMethods();
}
?>