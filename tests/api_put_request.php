<?php

header("Content-type:application/json");

if ($_SERVER["REQUEST_METHOD"] === "PUT") {

    $put_request_data = json_decode(file_get_contents("php://input"));

    $result = [
        "data" => $put_request_data,
    ];

    echo json_encode($result);
}
