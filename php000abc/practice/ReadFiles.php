<?php

require_once "ToolBox.php";

class TestReadFiles
{
    public static function getLines()
    {
        $file = fopen("files/MyTestFile.txt","r");
        while (($line = fgets($file)) != false) {
            yield $line;
        }
        fclose($file);
    }
    public static function Run():void
    {
        Tools::Line();
        $lines = self::getLines()->key();
        self::getLines()->next();
        $lines = self::getLines()->current();
        self::getLines()->next();
        $lines = self::getLines()->current();

        echo $lines;
    }
}