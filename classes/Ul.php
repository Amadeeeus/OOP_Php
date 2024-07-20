<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/HtmlList.php";
class Ul extends HtmlList
{
    public function __construct()
    {
        parent::__construct("ul");
    }
    public function ul($items = [])
    {
      foreach($items as $value)
      {
        $this->addItem((new ListItem())->text($value));
      }
      echo $this->show();
    }
}
?>