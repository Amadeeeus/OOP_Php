<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/Tag.php";
class Button extends Tag
{
    public function __construct()
    {
        parent::__construct('button');
    }
    public function button($attrs = [], $text = ' ')
    {
       $this->setAttrs($attrs);
       echo $this->text($text)->show();
    }
}
?>