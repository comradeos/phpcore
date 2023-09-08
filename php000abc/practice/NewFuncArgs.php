<?php

require_once "ToolBox.php";


class TestNewFuncArgs
{
    public static function MyFunc(string $name, int $age, float $salary):void
    {
        echo "Name: $name\nAage = $age\nSalary = $salary\n";
    }

    public static  function Run():void
    {
        Tools::Line();
        self::MyFunc(name: "Iaroslav Os", salary: 5000, age: 33);
    }
}