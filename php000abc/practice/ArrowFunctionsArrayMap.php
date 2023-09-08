<?php

require_once "ToolBox.php";


class TestArrowFunctionsArrayMap
{
    public static function doubleNum(int $num):int
    {
        return $num * 2;
    }
    public static function Run():void
    {
        Tools::Line();
        $arr = [1,2,3];
        foreach ($arr as $i) { echo "$i, "; } echo "\n";

        Tools::Line();

        $arr2 = array_map("self::doubleNum", $arr);
        foreach ($arr2 as $i) { echo "$i, "; } echo "\n";

        $arr3 = array_map(function ($num) { return $num * 2; } , $arr);
        foreach ($arr3 as $i) { echo "$i, "; } echo "\n";

        $arr4 = array_map(fn($num) => $num * 2 , $arr);
        foreach ($arr4 as $i) { echo "$i, "; } echo "\n";

        Tools::Line();
    }
}