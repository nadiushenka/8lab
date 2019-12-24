<?php

$mysqli = new mysqli('localhost', 'root', '', 'dovgun');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$user_id = $_POST['user_id']; $load_date = $_POST['load_date']; $description = $_POST['description'];

$sql = "INSERT INTO photo (photo_id, description, load_date, user_id) VALUES ('', '$description', '$load_date', '$user_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showPhoto.php")
?>
