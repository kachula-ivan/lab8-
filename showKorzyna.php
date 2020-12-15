<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Korzyna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Korzyna</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'mybd'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
    $mysqli->set_charset("utf8"); // Встановлюємо кодування utf8
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT * FROM korzyna')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Корзина покупок: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ІД</th><th>Назва</th>"); 
        // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td>", $row['id'], $row['tovar']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    }

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoKorzynaForm.php">Vstavyty ryadok</a><br></li>
        <li><a href="deleteFromKorzynaForm.php">Delete ryadok</a><br></li>
        <li><a href="showTovarpk.php">show tovary na prodaj i kupivlyu</a><br></li>
        <li><a href="index.php">return</a><br></li>
    </ul>
    
</body>
</html>
