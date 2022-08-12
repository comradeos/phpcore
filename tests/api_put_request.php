<?php

header("Content-type:application/json");

if ($_SERVER["REQUEST_METHOD"] === "PUT") {

    parse_str(file_get_contents("php://input"), $put_request_data);

    $result = [
        "data" => $put_request_data,
    ];

    echo json_encode($result);
}
