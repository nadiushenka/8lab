<?php

$mysqli = new mysqli('localhost', 'root', '', 'dovgun');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$user_id = $_POST['user_id']; $group_id = $_POST['group_id']; 

$sql = "INSERT INTO user_group (user_id, groups_id) VALUES ('$user_id', '$group_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUserGroups.php")
?>
