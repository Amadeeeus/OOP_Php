<?php 
interface IFile
{
    public function __construct($filePath);
    public function getPath();
    public function getDir();
    public function getName();
    public function getExt();
    public function getSize();
    public function getText();
    public function setText($text);
    public function appendText($text);
    public function copy($copyPath);
    public function delete();
    public function rename($newName);
    public function replace($newPath);
}
?>