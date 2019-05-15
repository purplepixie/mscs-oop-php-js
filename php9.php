<?php
class C
{
    public $value;
    function __construct($v=10)
    {
        $this->value = $v;
    }
    function P() { echo $this->value; }
}
$c=new C(20);
$c->P();
$d=new C();
$d->P();
