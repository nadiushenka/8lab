<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Story</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Story</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'dovgun'); 
    $mysqli->set_charset("utf8"); 
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM Story')) {   

        printf("Список музики: <br><br>");
        printf("<table><tr><th>ID</th><th>Дата</th><th>ID користувача</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['story_id'], $row['story_date'], $row['user_id']); 
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertStoryForm.php">Вставити рядок</a><br></li>
		<li><a href="updateStoryForm.php">Редагувати рядок</a><br></li>
		<li><a href="deleteStoryForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
