<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showUserGroups.php")    
    ?>

<form action="deleteUserGroups.php" method="post">
        <label>ID групи, яку видаляємо</label><input name="id" type="text"><br>
        <label>ID користувача, якого видаляємо</label><input name="user_id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>