<?php

trait MyTrait
{
    function TraitFunctionA(): void
    {
        echo "Hello from TraitFunctionA()\r\n";
    }
    function TraitFunctionB(): void
    {
        echo "Hello from TraitFunctionB()\r\n";
    }
}

class MyClassA
{
    use MyTrait;

    function info(): void
    {
        echo "MyClassA obj\r\n";
    }
}

class MyClassB
{
    use MyTrait;

    function info(): void
    {
        echo "MyClassB obj\r\n";
    }
}

class TestTraits
{
    public static function Run(): void
    {
        $obj1 = new MyClassA();
        $obj1->info();
        $obj1->TraitFunctionA();
        $obj1->TraitFunctionB();
    }
}