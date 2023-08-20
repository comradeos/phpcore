<?php

require_once "tools.php";

class TestManyFuncArgs
{

    private static function MyFuction(... $args): void
    {
        foreach ($args as $arg)
        {
            echo $arg . "\n";
        }
    }

    public static function Run(): void
    {
        Tools::Line();
        self::MyFuction(1, 2 , 3 , 4 , 5, "A", "B", "C");
    }
}