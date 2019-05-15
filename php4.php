<?php
class A
{
    function F() { echo "Hello"; }
}

class B extends A
{
    function F() { echo "World"; }
}

$b = new B();
$b->F();
