<?php

require_once "ToolBox.php";

class TestArraysInArray
{
    public static function Run():void
    {
        Tools::Line();
        $arr1 = [1,2,3];
        $arr2 = ["a","b","c"];
        $arr3 = [7,8,...$arr1,...$arr2,9];
        foreach ($arr3 as $i) {
            echo $i;
        }
        echo "\n";
    }
}