<?php

require_once "ToolBox.php";

class Foo {}
class Bar {}

class Typed
{
    public static function func(Foo|null $item):void
    {
        var_dump($item);
    }
}

class TestTypedArgs
{
    public static function Run():void
    {
        Tools::Line();
        Typed::func(new Foo());
    }
}