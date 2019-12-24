<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Groups</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця User_Groups</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'dovgun');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM user_group')) { 

        printf("Список груп: <br><br>");
        printf("<table><tr><th>ID користувача</th><th>ID групи</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['user_id'], $row['groups_id']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertUserGroupsForm.php">Вставити рядок</a><br></li>
		<li><a href="updateUserGroupsForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteUserGroupsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
