<?php

require_once "tools.php";
class TestNewArrSyntax
{
    public static function Run(): void
    {
        Tools::Line();

        $arr = [1, 2, 3];

        foreach ($arr as $item)
        {
            echo "$item\n";
        }

        $arr = [
            "a" => 10,
            "b" => "fff",
            "c" => 4.3,
            "d" => true,
        ];

        Tools::Line();

        foreach ($arr as $key => $value)
        {
            echo "$key -> $value\n";
        }

        Tools::Line();

        [$a, $b] = [111, 222];
        echo "$a, $b\n";
    }
}