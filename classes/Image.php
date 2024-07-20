<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/Tag.php";
class Image extends Tag
{
 public function __construct()
 {
    $this->setAttr("scr",'')->setAttr("alt",'');
    parent::__construct("img");
 }
 public function __tostring()
 {
    return parent::open();
 }
 public function image($attrs = [])
 {
   echo $this->setAttrs($attrs)->show();
 }
}
?>