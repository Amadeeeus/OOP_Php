<?php 
require_once "./classes/Helper.php";
class User
{
    use Helper;
    public function __construct(private $name, private $age)
    {
        
    }
}
?>