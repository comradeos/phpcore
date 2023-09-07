<?php

require_once "ToolBox.php";

class TestManyFuncArgs
{

    private static function MyFunction(... $args): void
    {
        foreach ($args as $arg)
        {
            echo $arg . "\n";
        }
    }

    public static function Run(): void
    {
        Tools::Line();
        self::MyFunction(1, 2 , 3 , 4 , 5, "A", "B", "C");
    }
}