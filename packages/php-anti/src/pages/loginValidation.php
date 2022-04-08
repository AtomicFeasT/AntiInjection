<?php

include_once("connectDB.php");

$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash($password, PASSWORD_BCRYPT);

$consultation = mysqli_query($conn)

if(mysqli_insert_id($conn)) {
    header("Location: welcome.php");
} else {
    header("Location: index.php")
}

?>