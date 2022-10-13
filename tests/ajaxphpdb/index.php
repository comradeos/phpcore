<?php 

// запустить сервер
// php -S localhost:8181

$pdo = new PDO('mysql:host=localhost:9990;dbname=test_db','root','root');
$result = $pdo->query('SELECT * FROM test_table');
$resultCount = $result->rowCount();

echo $resultCount;

?>

<script>
    
    /**
     * Основная функция обновления страницы при изменении базы
     */
    function loadDoc() {
        var currentValue = <?php echo $resultCount; ?>; // текущее значение
        // console.log(currentValue);

        const xhttp = new XMLHttpRequest(); // создаем экземпляр запроса
        xhttp.open("GET", "http://localhost:8181/updates.php"); // указываем тип запроса и адрес (файл updates.php в этой же папке)
        xhttp.send(); // отправляем запрос

        // при получении данных выполняем function() {...}
        xhttp.onload = function() {
            updatedValue = parseInt(this.responseText); // получаем текст, конвертируем в число 
            // console.log(updatedValue);
            if (currentValue != updatedValue) { // проверка условия
                location.reload(); // перезагружаем страницу
            }
        }

    }

    setInterval(loadDoc,1000); // запускаем функцию loadDoc каждую секунду

</script>