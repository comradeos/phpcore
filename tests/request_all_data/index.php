<?php
// /Applications/MAMP/bin/php/php8.0.8/bin/php -S 127.0.0.1:8800

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<hr>";


$postdata = file_get_contents("php://input");
echo "<pre>";
print_r($postdata);
echo "</pre>";
echo "<hr>";


$postdata = apache_request_headers();
echo "<pre>";
print_r($postdata);
echo "</pre>";
echo "<hr>";



$entityBody = file_get_contents('php://input');
echo "<pre>";
print_r($entityBody);
echo "</pre>";
echo "<hr>";


echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";




// $requestHeaders = apache_request_headers();
// echo "<pre>";
// print_r($requestHeaders);
// echo "</pre>";
// echo "<hr>";

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// echo "<hr>";


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "<hr>";

?>

<form action="" method="post">
    <input type="text" name="a">
    <input type="submit" value="submit">
</form>