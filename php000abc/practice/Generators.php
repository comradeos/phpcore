<?php

require_once "ToolBox.php";

class TestGenerators
{
    public static function myGen(): Generator
    {
        echo "1 step passed\n";
        yield "hello\n";

        echo "2 step passed\n";
        yield "from\n";

        echo "3 step passed\n";
        yield "gen\n";
    }
    public static function Run():void
    {
        Tools::Line();
        $iter = self::myGen();
        $res = $iter->current();
        echo $res;

        $iter->next();
        $res = $iter->current();
        echo $res;
    }
}