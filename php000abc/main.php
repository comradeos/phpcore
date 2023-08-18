<?php

require_once "vendor/autoload.php";
require_once "Text/Password.php";
require_once "another.php";

print_r("hello php <br>");

$result = Text_Password::create();

print_r($result);

$person = new Person(1, "Iaroslav Os");
$person->printInfo();