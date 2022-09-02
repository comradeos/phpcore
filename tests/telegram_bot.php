<?php

/*

Запустить сервер:
php -S 127.0.0.1:4000 

Перейти на страницу в браузере:
http://127.0.0.1:4000/telegram_bot.php

Установить composer:
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

Установить The VarDumper Component(dd):
composer require --dev symfony/var-dumper

 */

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';

    $array = [
        'chat_id' => '282241931',
        'text' => 'aaaaaaaaaaa',
    ];

    // 5494360112:AAFSdh62kFEe9z8csJe6-5Xb2yUbGp1ZIg8


    $c = curl_init('http://api.telegram.org/bot5494360112:AAFSdh62kFEe9z8csJe6-5Xb2yUbGp1ZIg8/sendMessage');

    curl_setopt($c, CURLOPT_RETURNTRANSFER, true); // вернуть результат в строку
    curl_setopt($c, CURLOPT_POST, true); // сообщаем что это метод POST
    curl_setopt($c, CURLOPT_POSTFIELDS, $array); // передаем данные методом POST
    
    $result = curl_exec($c); // получаем результат

    dd($result);

    curl_close($c);
    

}


?>

<form method="post">
    <input type="text" name="title">
    <input type="text" name="description">
    <button>Отправить</button>
</form>