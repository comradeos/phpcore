<?php

trait MyTrait
{
    function TraitFunctionA(): void
    {
        echo "Hello from TraitFunctionA()\n";
    }
    function TraitFunctionB(): void
    {
        echo "Hello from TraitFunctionB()\n";
    }
}

class MyClassA
{
    use MyTrait;

    function info(): void
    {
        echo "MyClassA obj\n";
    }
}

class MyClassB
{
    use MyTrait;

    function info(): void
    {
        echo "MyClassB obj\n";
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