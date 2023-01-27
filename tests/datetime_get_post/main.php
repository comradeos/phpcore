<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get">
    <input type="datetime-local" name="from" value="2018-06-12T19:30">
    <input type="datetime-local" name="to" value="2022-01-01T20:20">
    <button type="submit">submit</button>
</form>
    <?php

    // php -S 127.0.0.1:4000 

    $from = $_GET["from"] ?? "";
    $to = $_GET["to"] ?? "";
    echo "from $from <br>";
    echo "to $to <br>";

    ?>
    
</body>
</html>