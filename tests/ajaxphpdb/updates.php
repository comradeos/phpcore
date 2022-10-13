<?php 

$pdo = new PDO('mysql:host=localhost:9990;dbname=test_db','root','root');
$result = $pdo->query('SELECT * FROM test_table');
$resultCount = $result->rowCount();

echo $resultCount;