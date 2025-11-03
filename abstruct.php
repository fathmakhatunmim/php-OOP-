<?php
abstract class A
{
    public $name;

    abstract protected function calc($a, $b);
}

class  B extends A
{
    public function calc($c, $d)
    {
        echo $c + $d;
    }
}


$text = new B();
$text->calc(10, 20);
