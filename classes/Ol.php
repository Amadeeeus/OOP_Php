<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/classes/HtmlList.php";
Class Ol extends HtmlList
{
    public function __construct()
    {
        parent::__construct("ol");
    }

 public function ol($items = [])
{
  foreach($items as $value)
  {
    $this->addItem((new ListItem())->text($value));
  }
  echo $this->show();
}
}
?>