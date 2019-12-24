<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'dovgun');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT a.login, a.password, u.information, COUNT(s.story_date), COUNT(p.load_date) FROM account a INNER JOIN user u ON a.account_id=u.id INNER JOIN story s ON u.id=s.user_id INNER JOIN photo p ON u.id=p.user_id')) {

        printf("Список: <br><br>");
        printf("<table><th>Логін</th><th>Пароль</th><th>Інформація</th><th>Кількість сторіс</th><th>Кількість фоток</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['login'], $row['password'], $row['information'], $row['COUNT(s.story_date)'], $row['COUNT(p.load_date)']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
