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
        include("showGroups.php")    
    ?>

<form action="updateGroups.php" method="post">
        <label>ID рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Назва групи</label><input name="group_name" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>