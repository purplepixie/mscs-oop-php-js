<?php
class C
{
    public $value;
    function __construct($v)
    {
        $this->value = $v;
    }
    function P() { echo $this->value; }
}
$c=new C(10);
$c->P();
