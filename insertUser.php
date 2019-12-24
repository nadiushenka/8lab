<?php

$mysqli = new mysqli('localhost', 'root', '', 'dovgun');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$name = $_POST['name']; $id = $_POST['id']; $information = $_POST['information'];

$sql = "INSERT INTO user (id, name, information) VALUES ('$id', '$name', '$information')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUser.php")
?>
