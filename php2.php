<?php
class MyClass
{
    public $publicVar = "Hello";
    private $privateVar = "World";

    function Example()
    {
        echo $this->publicVar . " " . $this->privateVar;
    }
}

$myC = new MyClass();
echo $myC->publicVar;
echo " ";
echo $myC->privateVar;
