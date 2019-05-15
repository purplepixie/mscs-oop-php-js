<?php
class A
{
    function F() { echo "Hello"; }
}

class B extends A { }

$b = new B();
$b->F();
