<?php
class Printer
{
    private $content;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function cetak()
    {
        echo $this->content;
    }
}

$printer = new Printer();
$printer->setContent('Printer EPSON L3250 </br>');
$printer->cetak();

$printer = new Printer();
$printer->setContent('Laptop HP Pavilion </br>');
$printer->cetak();

$printer = new Printer();
$printer->setContent('Laptop Lenovo </br>');
$printer->cetak();