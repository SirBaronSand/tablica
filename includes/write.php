<?php

include_once 'database.php';

$text = $_POST['text'];

    $sql = "INSERT INTO exampletext (text) VALUES ('$text');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?message=sent");




?>

