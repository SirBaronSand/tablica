<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MSQL Table Test</title>
</head>
<body>
    
<form action="includes/write.php" method="POST">

<input type="text" name="text" placeholder="Enter your text here">
<br>
<button type="submit" name="submit">Spremi</button>

</form>

<?php

include_once 'includes/database.php';

$sql = "SELECT id, text FROM exampletext";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "id: " . $row["id"] . " - Text: " . $row["text"] . "<br>";
        }
    }else{
        echo "0 results";
    }

?>

</body>
</html>