<?php

$arr = [];
echo "$arr\n";

$data = [
    'device_id' => 13,
    'device_serial' => "serial",
    'count' => 5,
    'amount' => 10,
    'name' => "name1",
    'vend_recipe_id' => 16,
    'recipe_id' => 16,
    'date' => "2023-11-15 15:45:11",
    'location_id' => 22,
    'location_address' => "address 1",
    'location_code' => "locationCode"
];

$arr[5]["04"]["2023-11-15 15:45:11"] = $data;

var_dump($arr);