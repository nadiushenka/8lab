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
        include("showPhoto.php")    
    ?>

<form action="updatePhoto.php" method="post">
        <label>ID рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Опис</label><input name="description" type="text"><br>
        <label>Дата загрузки</label><input name="load_date" type="text"><br>
        <label>ID користувача</label><input name="user_id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>