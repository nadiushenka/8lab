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
        include("showUser.php")    
    ?>

<form action="updateUser.php" method="post">
        <label>ID аккаунта</label><input type="text" name="id"><br>
        <label>Ім'я</label><input name="name" type="text"><br>
        <label>Інформація</label><input name="information" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>