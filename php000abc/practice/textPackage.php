<?php

require_once "vendor/autoload.php";
require_once "Text/Password.php";

class TestTextPackage
{
    public static function Run(): void
    {
        $result = Text_Password::create();
        print_r($result);
    }
}