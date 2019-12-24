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
        include("showStory.php")    
    ?>

<form action="deleteStory.php" method="post">
        <label>ID музики</label><input name="id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>