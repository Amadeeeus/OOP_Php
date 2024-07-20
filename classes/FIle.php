<?php 
require_once "./classes/iFile.php";
class File implements IFile
{
    public function __construct(private $filePath = 1)
    {

    }
    public function setDir($path)
    {
      $this->filePath = $path;
    }
    public function getPath()
    {
        return $this->filePath;
    }

    public function getDir()
    {
        return dirname($this->filePath);
    }

    public function getName()
    {
        return basename($this->filePath);
    }
    public function getExt()
    {
        return pathinfo($this->filePath)['extension']; 
    }
    
    public function getSize()
    {
        return filesize($this->filePath);
    }
    public function getText()
    {
        return file_get_contents($this->filePath);
    }

    public function setText($text)
    {
        file_put_contents($this->filePath, $text);
    }

    public function appendText($text)
    {
        file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    public function copy($copyPath)
    {
        copy($this->filePath, $copyPath);
    }

    public function delete()
    {
      unlink($this->filePath);
    }

    public function rename($newName)
    {
       rename($this->filePath, $newName);
    }

    public function replace($newPath)
    {
      copy($this->filePath, $newPath);
      unlink($this->filePath);
    }
    
}
?>