<?php
class X
{
    function __construct() { echo "X construct!"; }
}
class Y extends X
{
    function __construct()
    {
        parent::__construct();
        echo "Y construct!";
    }
}
$x=new Y();
