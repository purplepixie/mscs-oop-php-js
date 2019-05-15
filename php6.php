<?php
abstract class A
{
    function F() { echo "Hello"; }
    abstract function X();
}

class B extends A
{
    function F() { echo "World"; }
}

$b = new B();
$b->F();
