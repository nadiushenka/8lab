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

    <form action="insertUserGroups.php" method="post">
        <label>ID користувача</label><input name="user_id" type="text"><br>
        <label>ID групи</label><input name="group_id" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
