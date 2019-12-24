<?php

$mysqli = new mysqli('localhost', 'root', '', 'dovgun');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; $group_name = $_POST['group_name'];

$sql = "UPDATE groups SET group_name='$group_name' WHERE group_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showGroups.php")
?>
