<?php

$mysqli = new mysqli('localhost', 'root', '', 'dovgun');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$story_date = $_POST['story_date']; $user_id = $_POST['user_id']; $id = $_POST['id']; 

$sql = "UPDATE Story SET story_date='$story_date', user_id='$user_id' WHERE story_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showStory.php")
?>
