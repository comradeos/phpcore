<?php

require_once "ToolBox.php";


class TestAnonymousClass
{
    public static function Run():void
    {
        Tools::Line();
        $a = new class {
            public static int $id;
            public static string $name;
            public function __construct()
            {
                self::$id = 1;
                self::$name = "MyName";
            }
        };

        echo $a::$id . "\n";
        echo $a::$name . "\n";

        $name = "Iaroslav Os";
        $email = "iaroslavos@gmail.com";

        $user = compact(
            'name',
            'email',
        );

        echo $user["name"] . "\n";
        echo $user["email"] . "\n";
    }
}