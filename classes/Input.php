<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/Ol.php";
class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    public function input($attrs = [])
    {
      echo $this->setAttrs($attrs)->open();
    }
}
?>