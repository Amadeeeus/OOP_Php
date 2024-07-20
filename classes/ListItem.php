<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/Tag.php";
class ListItem extends Tag
{
 public function __construct()
 {
    parent::__construct("li");
 }
}
?>