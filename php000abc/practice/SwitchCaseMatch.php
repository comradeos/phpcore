<?php

require_once "ToolBox.php";


class TestSwitchCaseMatch
{
    public static function Run():void
    {
        Tools::Line();

        $a = 1;

        switch ($a) {
            case 1:
                $a = "one";
                break;
            case 2:
                $a = "two";
                break;
            default:
                $a = "I dont know";
                break;
        }

        echo "$a\n";

        match ($a) {
            1 => "one",
            2 => "two",
            default => "x3",
        };

        echo "$a\n";


    }
}