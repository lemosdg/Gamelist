<?php
include "database.php";

echo "Connected successfully";
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql = 'INSERT INTO usuario (mail, pass) VALUES ("'.$mail.'", "'.$pass.'")';
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"].'?e='.mysqli_error($conn).'');
}

mysqli_close($conn);

?>